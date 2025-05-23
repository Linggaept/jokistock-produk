<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'admin_id',
        'nama',
        'email',
        'password',
        'no_hp',
        'alamat',
        'foto',
        'foto-sampul',
    ];

}
