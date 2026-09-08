<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //Relationships
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //To enable Mass Assignment
    protected $fillable = [
        'title',
        'content',
        'image',
        'category_id'
    ];
}
