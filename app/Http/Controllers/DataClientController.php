<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\DataClient;
use App\Models\DataClientCartera;
use App\Models\DataClientContact;
use App\Models\DataClientHome;
use App\Models\DataClientSale;
use App\Models\Pedido;

class DataClientController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 */
	public function getIndex() {
		$clients = DataClient::get();
		foreach ($clients as $client) {

			$client->client_id = $client->id;
			$client->save();
		}
	}

	public function getContacts($id) {
		$client              = Client::find($id);
		$data_client_contact = DataClientContact::find($id);
		return view("data_clients.contacts")->with(array(
				'client'              => $client,
				'data_client_contact' => $data_client_contact));

		return redirect()->back();
	}

	public function getHomes($id) {
		$client           = Client::find($id);
		$data_client_home = DataClientHome::find($id);
		return view("data_clients.homes")->with(array(
				'client'           => $client,
				'data_client_home' => $data_client_home));

		return redirect()->back();
	}

	public function getSales($id) {
		$client           = Client::find($id);
		$data_client_sale = DataClientSale::find($id);
		return view("data_clients.sales")->with(array(
				'client'           => $client,
				'data_client_sale' => $data_client_sale));

		return redirect()->back();
	}

	public function getCarteras($id) {
		$client              = Client::find($id);
		$data_client_cartera = DataClientCartera::find($id);
		return view("data_clients.carteras")->with(array(
				'client'              => $client,
				'data_client_cartera' => $data_client_cartera));

		return redirect()->back();

	}
	public function getPedidos($id) {
		$client = Client::find($id);
		$pedido = Pedido::with('client')->where('client_id', '=', $id)->get();
		//dd($pedido->toArray());
		return view("data_clients.pedidos")->with(array(
				'client' => $client,
				'pedido' => $pedido));

		return redirect()->back();

	}

}
