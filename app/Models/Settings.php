<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable = [
        'whatsapp_promotion',
        'telegram_promotion',
        'facebook',
        'whatsapp',
        'instagram',
        'email',
        'telegram',
        'uploader_note',
        'footer_note',
        'isAdmin',
        'logo'
    ];
}
