<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug']; // массовое заполнение
   //  protected $guarded = []; противовес fillable

    public function comments(){
        return $this->hasMany(Comment::class); // взаимоотношение с несколько комментариев
    }

    public function state(){
        return $this->hasOne(State::class); // взаимоотношение с одним элементом
    }

    public function tags(){
        return $this->belongsToMany(Tag::class); // взаимоотношение со множеством
    }

}
