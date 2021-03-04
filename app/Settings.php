<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = "settings";
    protected $guarded = [];

    protected $fillable =
        [
            'logo',
            'name',
            'surname',
            'id_number',
            'fin',
            'email',
            'password',
            'phone',
            'address',
            'date_of_birth',
            'gender'
        ];
}
