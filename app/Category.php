<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'p_categories';

    protected $primaryKey = 'id_category';

    protected $fillable = ['name_category'];

}
