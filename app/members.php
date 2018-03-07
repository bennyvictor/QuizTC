<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    //
	protected $table = " members "
	protected $fillable = { ' username ', ' email ', ' password ' };
	protected $guarded = {};

}