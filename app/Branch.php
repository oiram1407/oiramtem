<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'p_branches';

    protected $primaryKey = 'id_branch';

    protected $fillable = ['name_branch', 'id_user'];
}
