<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id=$request->user()->id;
        return view('profil.index',

                    ['profils' =>  $request->user()->where("id", $id)->first(),
                    ]);
    }

    public function edit(Request $request, $id)
    {

        return view('profil.edit',
            [
                'profil' => $request->user()->where("id", $id)->first(),

            ]
        );
    }

    public function update(Request $request, $id)
    {
       /*  $this->validate(
            $request,

            [
                'lastname' => 'required|string|max:60',
                'firstname' => 'required|string|max:60',
                'email' => ['string', 'email', 'max:100', 'unique:users'],
                'password' => ['string', 'min:8', 'confirmed'],
                'picture' => 'string|max:1024',
                'job' => 'string|max:255',
                'description' => 'string|max:255',

            ],
            [],
            []
        ); */

        $profil = User::find($id);
        $profil->lastname = $request->lastname;
        $profil->firstname = $request->firstname;
        $profil->email = $request->email;
        $profil->password = $request->password;
        $profil->picture = $request->picture;
        $profil->job = $request->job;
        $profil->description = $request->description;

        $profil->save();

        return redirect()->route('profil.index');
    }
}
