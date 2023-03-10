<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bursa extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Bursa';
    protected $primaryKey = 'Id';
    protected $grad = 'Grad';
    protected $Bursa = 'Bursa';

}
