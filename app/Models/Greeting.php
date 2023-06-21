<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class Greeting extends Model
{
    use HasFactory;
    public function demonstration(): BelongsToMany
    {
        return $this->belongsToMany(Demonstration::class);

    }

 //protected $fillable = ['datum1','naam', 'email','telefoon'];
 
 protected $fillable = ['naam', 'email','telefoon','demonstration_id','demonstration','bezoekdatum','body','datum1'];
}
