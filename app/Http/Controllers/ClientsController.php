<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Client;
use App\Models\DataClient;
use Illuminate\Http\Request;

class ClientsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getIndex() {

	}
	public function getAll() {
		return view("clients.list")->with('clients', Client::with("data_client")->paginate(4)->setPath('all'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getCreate() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function getDetail($id) {
		$client       = Client::find($id);
		$data_clients = DataClient::with("client")->where("client_id", "=", $id)->get();
		return view("clients.detail")->with(array(
				'client'      => $client,
				'data_client' => $data_clients));

		return redirect()->back();

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
