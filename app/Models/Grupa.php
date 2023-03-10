<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupa extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'Grupa';
    protected $primaryKey = 'Id';
    protected $name = 'Name';
    protected $leader = 'Leader';
    protected $originYear = 'Origin';
}
