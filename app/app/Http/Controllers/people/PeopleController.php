<?php

namespace App\Http\Controllers\people;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(Auth::guest()){
            return view('user.login');
        }
        
        // $user = DB::table('users')->where('name', $username)->first();
        // if ($user) {

        //     if (Auth::guest()) {

        //         return view('user.login');

        //     } 
        //     if (Auth::user()->name == $username) {

        //         return view('user.people')->with('username', $username);

        //     }
        //     if (Auth::user()->name!=$username) {

        //         echo 'hello '
        //     }
        // }

        // echo 'no this people';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
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
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
