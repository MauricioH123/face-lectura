<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'pages',
        'genre_id',
        'clasification_id',
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function clasification(){
        return $this->belongsTo(Classification::class);
    }
}
