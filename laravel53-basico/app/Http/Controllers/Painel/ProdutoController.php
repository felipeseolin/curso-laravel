<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {
	
	private $product;
	
	public function __construct (Product $product) {
		$this->product = $product;
	}
	
	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index () {
		//    	$product = new Product();
		
		$title = 'Listagem dos Produtos';
		
		$products = $this->product->all();
		
		return view('painel.products.index', compact('products', 'title'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create () {
		//
	}
	
	/**
	 * Store a newly created resource in storage.
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store (Request $request, \App\User $user) {
		// Não é necessário fazer
		// $user = new \App\User();
	}
	
	/**
	 * Display the specified resource.
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show ($id) {
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit ($id) {
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update (Request $request, $id) {
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy ($id) {
		//
	}
	
	public function tests () {
		/* Não aconselhado fazer desse jeito
	
		$prod = $this->product;
		$prod->id = 2;
		$prod->name = 'Nome do produto';
		$prod->number = 234;
		$prod->active = true;
		$prod->category = 'eletronicos';
		$prod->description = 'Descricao do produto aki';
		$insert = $prod->save();
		
		if ($insert) {
			return 'inserido com sucesso';
		} else {
			return  'falha ao inserir';
		}
		
		*/
		
		/*
		$insert = $this->product->create([
			'name' => 'Nomde do Produto',
			'number' => 123456,
			'active' => false,
			'category' => 'eletronicos',
			'description' => 'Descrição do prod',
		]);
		
		if ($insert) {
			return "inserido com sucesso, id: {{$insert->id}} ";
		} else {
			return  'falha ao inserir';
		}
		*/
		
		// UPDATE
		
		$prod = $this->product->find(2);
		/* não recomendado
		$prod->name = 'Nome do produto MUDEI';
		$prod->number = 23123231;
		$prod->active = false;
		$prod->category = 'eletronicos';
		$prod->description = 'Descricao do produto aki';
		$update = $prod->save();
		*/ /*
		$update = $prod->update([
			'name' => 'Nome do Produto ALTERADO',
			'number' => 123456,
			'active' => false,
			'category' => 'eletronicos',
			'description' => 'Descrição do prod',
		]);
		*/
		
		// $prod = $this->product->where('number', '=' ,1);
		
		/*
		$update = $this->product->where('number', 1)->update([
			'name' => 'Nome do Produto MUDADO',
			'number' => 123456,
			'active' => false,
			'category' => 'eletronicos',
			'description' => 'Descrição do prod',
		]);
		
		if ($update) {
			return "alterado com sucesso, id: {{$prod->id}} ";
		} else {
			return 'falha ao alterar';
		}*/
		
		//		dd($prod->name);
		
		
		// DELETE
		
		$prod = $this->product->find(3);
		$delete = $prod->delete();
		
		if ($delete) {
			return 'Deletei mesmo!';
		} else {
			return 'Xiiiiiii';
		}
		
		// $delete = $this->product->where('number', '4')->delete();
	}
}
