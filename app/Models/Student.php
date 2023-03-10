<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'Student';
    protected $primaryKey = 'Id';
    protected $name = "Name";
    protected $surname = "Surname";
    protected $Grupa = "Grupa";
}
