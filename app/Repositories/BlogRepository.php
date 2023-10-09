<?php

namespace App\Repositories;

use App\Interfaces\BlogInterface;
use App\Models\Blog;

class BlogRepository implements BlogInterface{

    private $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->all();
    }

    public function getById($id)
    {
        return $this->blog->find($id);
    }

    public function getBySlug($slug)
    {
        return $this->blog->where('slug', $slug)->first();
    }

    public function store($data)
    {
    $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
    $data['thumbnail']->storeAs('public/blog', $fileNameThumbnail);

    $slug = str_replace(' ', '-', strtolower($data['title']));
    $isSlugExist = $this->blog->where('slug', $slug)->first();
    if ($isSlugExist) {
        $slug = $slug . '-' . uniqid();
    }

    DB::beginTransaction();

    try {
        $blog = $this->blog->create(array_merge($data, [
            'title' => $data['title'],
            'blog_category_id' => $data['blog_category_id'],
            'thumbnail' => $fileNameThumbnail,
            'content' => $data['content'],
            'author' => $data['author'],
            'published_date' => $data['published_date'],
            'view_count' => $data['view_count'],
            'slug' => $slug,
        ]));

        DB::commit();
    } catch (\Exception $e) {
        Storage::delete('public/blogs/' . $filenameThumbnail);
        DB::rollBack();
        return $e->getMessage();
    }

    }
    

    public function update($id, $data)
    {
        $blog = $this->blog->find($id);

        if (isset($data['thumbnail'])) {
            $fileNameThumbnail = uniqid() . '.' . $data['thumbnail']->extension();
            $data['thumbnail']->storeAs('public/blogs/thumbnail', $fileNameThumbnail);
            Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);
            $data['thumbnail'] = $fileNameThumbnail;
        }

        $slug = str_replace(' ', '-', strtolower($data['title']));

        // check if slug is exist
        $isSlugExist = $this->blog->where('slug', $slug)->first();
        if ($isSlugExist) {
            $slug = $slug . '-' . uniqid();
        }

        DB::beginTransaction();
        
        try {
            $blog->update(array_merge($data, [
                'slug'             => $slug
            ]));
        } catch (\Throwable $th) {
            throw $th;

            Storage::delete('public/blogs/thumbnail/' . $fileNameThumbnail);
            DB::rollBack();
        }
    }       

    public function destroy($id)
    {
        $blog = $this->getById($id);

        // delete old file
        Storage::delete('public/blogs/thumbnail/' . $blog->thumbnail);

        $blog->delete();
    }

}
