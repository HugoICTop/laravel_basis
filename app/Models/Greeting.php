<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Greeting extends Model
{
 //protected $fillable = ['datum1','naam', 'email','telefoon'];
 
 protected $fillable = ['naam', 'email','telefoon','demonstration_id','demonstration','bezoekdatum','body','datum1'];
}
