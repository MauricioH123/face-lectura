<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classification extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
    ];

    public function article(){
        return $this->hasMany(Article::class);
    }
}
