<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\Skills;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $profils = Profil::all();
      $skills = skills::all();
      return view('profil.index',['profils'=>$profils,'skills'=>$skills]);
    }

    public function acceuil()
    {
      $profils = Profil::all();
      $skills = skills::all();
      return view('index',['profils'=>$profils,'skills'=>$skills]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $profils = new Profil();
      $profils->nom = $request['nom'];
      $profils->prenom = $request['prenom'];
      $profils->email = $request['email'];
      $profils->naissance = $request['naissance'];
      $profils->adresse = $request['adresse'];
      $profils->telephone = $request['telephone'];
      $profils->password = $request['password'];
      $profils->diplome = $request['diplome'];
      $profils->save();

      return redirect('/profil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
