<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model

{

    // brought data from table in database

    use HasFactory;
    protected $table = "feedback";
    protected $primaryKey ="ID";

}
