<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NexDo extends Model
{
    protected $table = 'nex_dos';

    protected $fillable = [
        'title',
        'done'
    ];
}
