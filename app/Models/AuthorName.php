<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorName extends Model
{
    use HasFactory;

    protected $table = 'author_name';

    protected $fillable = [
        'author_name',
        'images'
    ];
}
