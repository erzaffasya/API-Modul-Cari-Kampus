<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FollowKampus extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'follow_kampus';
    protected $guarded = [];

    protected $primaryKey = 'id';
}
