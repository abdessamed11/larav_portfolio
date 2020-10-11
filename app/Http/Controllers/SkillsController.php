<?php

namespace App\Http\Controllers;

use App\Models\skills;
use App\Models\Profil;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $skills = skills::all();
      $profils = Profil::all();
      return view('skills.index',['skills'=>$skills,'profils'=>$profils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skills = new Skills();
        $skills->competence = $request['competence'];
        $skills->pourcentage = $request['pourcentage'];
        $skills->save();

        return redirect('/skills');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(skills $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skills = skills::find($id);
        return view('skills.edit',['skills' => $skills]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $skills = skills::find($id);

      $skills->competence = $request['competence'];
      $skills->pourcentage = $request['pourcentage'];
      $skills->save();

      return redirect('/skills');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $skills = skills::find($id);
      $skills->delete();
      return redirect('skills');
    }
}
