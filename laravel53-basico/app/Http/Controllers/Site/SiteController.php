<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {
	
	public function __construct () {
		// Todos os metodos vão passar pelo middleware auth! ->
		//$this->middleware('auth');
		
		// Apenas os métodos contato e categoria vão passar pelo middleware auth
		/*$this->middleware(['auth'])
		     ->only(['contato', 'categoria']);*/
		
		// Todos vão passar pelo middleware, exceto index e contato
		// $this->middleware('auth')->except(['index', 'contato']);
	}
	
	public function index () {
		$teste = 123;
		$teste2 = 321;
		$teste3 = 132;
		
		$title = 'Titulo teste';
		
		$xss = '<script>alert("Alert XSS");</script>';
		
		$var1 = '123';
		
		$arrayData = [1, 2, 3, 4, 5, 6, 7, 8, 9];
		
		$arrayData2 = [];
		
		return view('site.home.index',
			compact('teste',
				'teste2',
				'teste3',
				'title',
				'xss',
				'var1',
				'arrayData', 'arrayData2'));
	}
	
	public function contato () {
		return view('site.contact.index');
	}
	
	public function categoria ($id) {
		return "Listagem dos posts da categoria: {$id}.";
	}
	
	public function categoriaOp ($id = 1) {
		return "Listagem dos posts da categoria op: {$id}.";
	}
}
