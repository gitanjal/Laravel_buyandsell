<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function user(){
      /*
      ***ASSIGNMENT***
      Task 1: Pass the proper class to the function belongsTo() to establish the relationship with the users table.
      */
      return $this->belongsTo( ??? );
    }
}
