<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';

    public function relUsers()
    {
        return $this->hasOne(related: 'App\User', foreignKey:'id', localKey:'id_user');
    }
}
