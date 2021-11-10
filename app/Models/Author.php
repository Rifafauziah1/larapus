<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //memberikan akses field apa saja yg boleh diisi
    protected $fillable = ['name'];
    //memberikan akses field apa saja yg boleh dilihat atau dikeluarkan
    protected $visible = ['name'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "Book"
    public function books()
    {
        //model author bisa memiliki banyak data dari
        //model book melalui fk "author_id"
        return $this->hasMany('App\Models\Book','author_id');
    }
}
