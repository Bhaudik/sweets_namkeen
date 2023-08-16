<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //use HasFactory;
    protected $table='items';
    protected $primarykey='id';
    protected $fillable=['cid','item_name','image','description','price','discount'];
}
