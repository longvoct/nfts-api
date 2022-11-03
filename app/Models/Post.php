<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Filterable;

class Post extends Model
{
    use HasFactory, Filterable;

    protected $table = 'posts';

    protected $fillable = [
    	'name', 
    	'description'
    ];
}
