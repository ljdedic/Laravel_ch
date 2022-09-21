<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slastica extends Model
{
    use HasFactory;

    protected  $fillable = [
        'manufacturer', 'shape' , 'tipe' , 'size' , 'user_id'
    ];
    public function user()
    {
        return $this ->belongsTo(User::class);
    }
}
