<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
 
class Perfil extends Model
{
    use HasUUID;

     protected $table = 'perfiles';
     protected$primarykey = 'id';
     public $incrementing = false;
     protected $keytype = 'string';
     protected $uuidFieldName = 'id';
}