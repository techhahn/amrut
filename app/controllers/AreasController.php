<?php

class AreasController extends \BaseController {

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
		return View::make('areas.index')->with('towns', Area::all());
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /areas/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('areas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /areas
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Area::$rules);

        if($validator->passes()) {
            $area = new Area;
            $area->TownName = Input::get('TownName');
            $area->save();
            return Redirect::to('areas')->with('message', 'New town '. $area->TownName . ' sucessfully added');
        }
        else {
            return Redirect::to('areas/create')->withErrors($validator)->withInput();
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
		$town = Area::find($id);
        return View::make('areas.edit')->with('town', $town);
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
        $validator = Validator::make(Input::all(), Area::$rules);

        if($validator->passes()) {
            $area = Area::find($id);
            $area->TownName = Input::get('TownName');
            $area->save();
            return Redirect::to('areas')->with('message', 'New town '. $area->TownName . ' sucessfully Edited Town Name');
        }
        else {
            return Redirect::to('areas/create')->withErrors($validator)->withInput();
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
		$area = Area::find($id);
		$areaName = $area->TownName;
		$area->delete();
		return Redirect::to('towns')->with('message', 'Town '. $areaName .' deleted successfully!');
	}

}