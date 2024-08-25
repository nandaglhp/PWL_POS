<?php

namespace App\Models;

use App\Models\Level;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'level_id');
    }

}
