<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = [
    'user_id',
    'reactable_id',
    'reactable_type',
    'type',
];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function reactable()
    {
        return $this->morphTo();
    }

}
