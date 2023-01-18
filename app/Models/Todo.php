<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /* Don't need to use both $guarded and $fillable at once
    protected $fillable = [
        'title',
        'completed'
    ];
    */
}
