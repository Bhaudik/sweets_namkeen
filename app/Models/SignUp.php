<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
   // use HasFactory;
   protected $table='signup';
   protected $primarykey='id';
   protected $fillable=['emailid','pwd'];
}
