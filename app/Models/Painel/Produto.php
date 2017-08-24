<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ["prod_name", "prod_number", "prod_active", "prod_category", "prod_description"];
    
    protected $rules = [
        "prod_name" => "required|min:3|max:100",
        "prod_number" => "required|numeric",
        "prod_category" => "required",
        "prod_description" => "min:3|max:1000"
    ];
}
