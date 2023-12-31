<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image',
    ];

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }
}
