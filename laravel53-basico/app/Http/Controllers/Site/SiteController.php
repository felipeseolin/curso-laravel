<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
	
	public function __construct () {
		// Todos os metodos vão passar pelo middleware auth! ->
		//$this->middleware('auth');
		
		// Apenas os métodos contato e categoria vão passar pelo middleware auth
		/*$this->middleware(['auth'])
		     ->only(['contato', 'categoria']);*/
		
		// Todos vão passar pelo middleware, exceto index e contato
		// $this->middleware('auth')->except(['index', 'contato']);
	}
	
	public function index() {
    	return 'Homa Page do Site';
    }
    
    public function contato() {
    	return 'Pg Contato';
    }
    
    public function categoria($id) {
    	return "Listagem dos posts da categoria: {$id}.";
    }
	
	public function categoriaOp($id = 1) {
		return "Listagem dos posts da categoria op: {$id}.";
	}
}
