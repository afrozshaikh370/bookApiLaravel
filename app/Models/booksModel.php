<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booksModel extends Model
{
    use HasFactory;

    public $table = "books";
    public $timestamps = false;

}
