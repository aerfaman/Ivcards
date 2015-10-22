<?php

namespace App\Http\Controllers\cards;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Template;
use DB;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($templateId)
    {
        $template=template::where('name','=',$templateId)->firstOrFail();
        // dd($template);
        if (!$template){
            echo "fail";
        }
        return view('cardstemplate.createtemplate')->with('templateName',$templateId);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function template($templateName)
    {
        if(view()->exists('cardstemplate.'.$templateName.'.index')){
            return view('cardstemplate.'.$templateName.'.index');
        }
        echo "The template no exist!";
        
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
