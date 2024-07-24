<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'storage_path',
        'image_path',
    ];
    protected $table = 'attachment';
}
