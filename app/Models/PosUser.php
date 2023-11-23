<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PosUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'admin_id',
        'f_name',
        'l_name',
        'user_name',
        'password',
        'phone',
        'email',
        'role',
        'city',
        'user_image',
    ];
}
