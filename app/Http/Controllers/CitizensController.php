<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ward;
use App\Models\Citizen;
use App\Models\State;
use App\Models\LGA;

class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wards = Ward::all();
        $lgas = LGA::all();
        $states = Ward::all();
        return view('citizens.index', compact(['wards', 'lgas', 'states']));
    }
    public function listOfCitizensInAState(State $state)
    {
        return $state->citizens;
    }
    public function listOfCitizensInAWard(Ward $ward)
    {
        return $ward->citizens;
    }
    public function listOfCitizensInALGA(LGA $lga)
    {
        return $lga->citizens;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wards = Ward::all();
        $lgas = LGA::all();
        $states = Ward::all();
       
        return view('citizens.create', compact(['wards', 'lgas', 'states']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // todo validate request
        $data =  $request->validate([
            'name'=>'',
            'address'=> '',
            'phone'=> '',
            'gender'=> '',
            'ward_id'=> '',
            'state_id'=> '',
            'lga_id'=> '',
            
        ]);
        // $data['ward_id'] =$data['ward'];
        $citizen = Citizen::create($data);
        return $citizen;


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
