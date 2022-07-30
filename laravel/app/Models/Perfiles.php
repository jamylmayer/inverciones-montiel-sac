<?php
 
namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
 
class perfiles extends Model
{
    use HasUUID;

    protected $table = 'perfiles';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';

}