<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
     protected $table = 'posts';
  
    //primary Key
     public $primaryKey = 'id';

    //Time Stamps
     public $timestamp = true;


    
}
