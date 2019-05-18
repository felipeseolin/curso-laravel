<?php

namespace App\Models\Painel;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produtos';
    // Todas as columanas que podem ser preenchidas
    protected $fillable = [
    	'name',
	    'number',
	    'active',
	    'category',
	    'description'
    ];
    // Todas as colunas que não podem ser preenchidas
	//protected $guarded = [];


    public $rules = [
      'name' => 'required|min:3|max:100',
      'number' => 'required|numeric',
      'category' => 'required',
      'description' => 'min:3|max:1000'
    ];
}
