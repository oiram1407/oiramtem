<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $table = 'w_settings';

    protected $primaryKey = null;

    protected $incrasing = null;

    protected $fillable = ['variable', 'value'];
}
