<?php

class TownsController extends \BaseController {

	public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth');
    }

	/**
	 * Display a listing of the resource.
	 * GET /areas
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('towns.index')->with('towns', Town::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /areas/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('towns.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /areas
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Town::$rules);

        if($validator->passes()) {
            $town = new Town;
            $town->TownName = Input::get('TownName');
            $town->save();
            return Redirect::to('towns')->with('message', 'New town '. $town->TownName . ' sucessfully added');
        }
        else {
            return Redirect::to('towns/create')->withErrors($validator)->withInput();
        }
	}

	/**
	 * Display the specified resource.
	 * GET /areas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /areas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$town = Town::find($id);
        return View::make('towns.edit')->with('town', $town);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /areas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Validator::make(Input::all(), Town::$rules);

        if($validator->passes()) {
            $town = Town::find($id);
            $town->TownName = Input::get('TownName');
            $town->save();
            return Redirect::to('towns')->with('message', 'New town '. $town->TownName . ' sucessfully Edited Town Name');
        }
        else {
            return Redirect::to('towns/create')->withErrors($validator)->withInput();
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /areas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$town = Town::find($id);
		$townName = $town->TownName;
		$town->delete();
		return Redirect::to('towns')->with('message', 'Town '. $townName .' deleted successfully!');
	}


}