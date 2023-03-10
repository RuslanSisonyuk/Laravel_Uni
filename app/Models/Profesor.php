<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Profesor';
    protected $primaryKey = 'Id';
    protected $name = 'Name';
    protected $prenume = 'Surname';
    protected $object = 'Object';
}
