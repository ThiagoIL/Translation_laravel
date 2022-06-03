<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPtbr extends Model
{
    use HasFactory;

    protected $table = 'posts_ptbr';

    protected $guarded = ['id'];
}
