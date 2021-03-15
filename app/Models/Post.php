<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\View;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    
    public function category(){
        return $this->belongsTo(Category::class, 'cate_id');
    }
    public function view(){
        return $this->belongsTo(View::class, 'post_id');
    }
}