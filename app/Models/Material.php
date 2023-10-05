<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    public $table = 'material';

    protected $fillable = [
        'material_category_id',
        'title',
        'thumbnail',
        'file',
        'author',
        'download_count',
        'published_date',
    ];

    public function materialCategory()
    {
        return $this->belongsTo(MaterialCategory::class, 'material_category_id');
    }
}
