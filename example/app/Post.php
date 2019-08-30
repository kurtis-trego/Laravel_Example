<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = 'posts';
    //Primary Key in DB (ID for now)
    public $primaryKey = 'id';
    

}
