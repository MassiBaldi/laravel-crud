<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $fillable = ['name', 'lastname', 'age', 'cf'];
}
