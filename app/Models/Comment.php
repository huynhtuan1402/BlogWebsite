<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    private $primarykey='id';
    protected $table='comment';
    protected $fillable=[
        'name','email','message','post_id'
    ];
}
