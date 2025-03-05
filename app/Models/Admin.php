<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
   protected $table="admins";
   protected $fillable = [

    'name', 
    'email',
     'username' ,
      'password' ,
       'created_at',
        'updated_at',
        'added_by',
        'updated_by',
        'com_code'
   ];
}
