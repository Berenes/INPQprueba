<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\SubFamily;
use Illuminate\Http\Request;

class FamilyController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getIndex() {
		/*
		Igualamos la base de datos con mayúsculas

		 */$familys = Family::get();
		foreach ($familys as $family) {
			$family->description = strtoupper($family->alias);
			$family->save();
		}

	}
	public function getAll() {
		return view("familys.list")->with('familys', Family::with("sub_family")->paginate(10)->setPath('all'));
	}

	public function getDetail($id) {
		$family     = Family::find($id);
		$sub_family = SubFamily::with("family")->where("family_id", "=", $id)->get();
		return view("familys.detail")->with(array(
				'family'     => $family,
				'sub_family' => $sub_family));

		return redirect()->back();

	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
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
	public function show($id) {
		//
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
		$family              = Family::find($id);
		$family->alias       = \Request::input('title');
		$family->description = \Request::input('description');
		$family->save();
		return redirect()->back();
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
