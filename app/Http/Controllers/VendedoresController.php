<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;

use App\Models\Vendedor;

class VendedoresController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex() {
		//
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getAll() {
		return view("vendedores.all")->with('vendedores', Vendedor::with("client")->paginate(4)->setPath('all'));
	}
	public function getClients($id) {
		$vendedor = Vendedor::find($id);
		$client   = Client::select('name', 'telephone')->with('vendedor')->where('vendedor_id', '=', $id)->get();
		//dd($clients->toArray());
		return view("vendedores.clients")->with(array(
				'vendedor' => $vendedor,
				'client'   => $client));

		return redirect()->back();
	}

}
