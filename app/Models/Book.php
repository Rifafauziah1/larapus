<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title','author_id','amount','cover'];
    protected $visible = ['title','author_id','amount','cover'];
    public $timestamps = true;

    //membuat relasi one to many dengan model author
    public function author()
    {
        //data model book bisa dimiliki oleh model author
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Author'.'author_id');    
    }
}
