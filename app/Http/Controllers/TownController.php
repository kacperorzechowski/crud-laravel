<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTown;
use Illuminate\Http\Request;
use App\Town;

class TownController extends Controller
{
    public function index()
    {
        $towns = Town::all();

        return view('town.index')->with('towns', $towns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('town.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreTown $request)
    {

        $this->validate($request);

        $input = $request->all();

        Town::create($input);

        return redirect('town');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $town = Town::findOrFail($id);

        return view('town.show')->with('town',$town);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $town = Town::findOrFail($id);

        return view('town.edit')->with('town',$town);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, StoreTown $request)
    {
        $town = Town::findOrFail($id);

        $this->validate($request);

        $input = $request->all();

        $town->fill($input)->save();

        return redirect('town');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $town = Town::findOrFail($id);

        $town->delete();

        return redirect('town');
    }
}
