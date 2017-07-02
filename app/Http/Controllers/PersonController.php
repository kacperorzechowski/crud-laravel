<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Town;



class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();

        return view('person.index')->with('people', $people);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $towns = Town::pluck('cityname', 'id');
        return view('person.create')->with('towns',$towns);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'town_id' => 'required'
        ]);

        $input = $request->all();

        Person::create($input);

        return redirect('person');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);

        return view('person.show')->with('person',$person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        $towns = Town::pluck('cityname', 'id');

        return view('person.edit')->with('person',$person)->with('towns', $towns);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $person = Person::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'town_id' => 'required'
        ]);

        $input = $request->all();

        $person->fill($input)->save();

        return redirect('person');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);

        $person->delete();

        return redirect('person');
    }
}
