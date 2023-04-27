<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private $primarykey='id';
    protected $table='post';
    protected $fillable=[
        'category_id','title','description','content','author'
    ];
}
