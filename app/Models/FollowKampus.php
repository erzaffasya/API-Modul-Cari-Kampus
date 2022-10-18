<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowKampus extends Model
{
    use HasFactory;
    protected $table = 'follow_kampus';
    protected $guarded = [];

    protected $primaryKey = 'id';
}
