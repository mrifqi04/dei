<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bean extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar_bean',
        'nama_bean',
        'content_beans'
    ];
}
