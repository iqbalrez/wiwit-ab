<?php

namespace App\Repositories;

use App\Interfaces\EventCategoryInterface;
use App\Models\EventCategory;

class EventCategoryRepository implements EventCategoryInterface
{
    private $eventCategory;

    public function __construct(EventCategory $eventCategory)
    {
        $this->eventCategory = $eventCategory;
    }

    public function getAll()
    {
        return $this->eventCategory->all();
    }

    public function getById($id)
    {
        return $this->eventCategory->find($id);
    }

    public function store($data)
    {
        return $this->eventCategory->create($data);
    }

    public function update($id, $data)
    {
        return $this->eventCategory->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->eventCategory->find($id)->delete();
    }
}
