<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosTable extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'unique_id',
        'title',
        'type',
        'name',
        'size',
        'video_type',
        'url',
        'subtitle',
        'description',
        'image'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}

