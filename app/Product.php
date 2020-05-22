<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'p_products';

    protected $primaryKey = 'id_product';

    protected $fillable = ['product_name', 'id_branch', 'id_user', 'id_category', 'product_price_public', 'product_price_provider'];

}
