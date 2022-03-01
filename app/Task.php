<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'user_id',
        'label',
        'color',
        'icon',
        'due_date',
        'description',
        'order',
        'status',

    ];


    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
