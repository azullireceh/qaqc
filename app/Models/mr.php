<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mr extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_mrs',
        'status_mrs',
        'link',
        'path_qr'

    ];
}
