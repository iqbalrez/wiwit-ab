<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public $table = 'work';

    protected $fillable = [
        'work_category_id',
        'title',
        'date',
        'photo',
    ];

    public function workCategory()
    {
        return $this->belongsTo(WorkCategory::class, 'work_category_id');
    }
}
