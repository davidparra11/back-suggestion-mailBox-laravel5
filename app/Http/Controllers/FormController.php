<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\Http\Requests;
use App\Http\Requests\FormReq;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Form::all();
        return response()->json(['person' => $persons]);
       // return view('usuario.create');
    }

 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormReq $request)
    {

        if($request->ajax())
        {   
            $form = new Form();
            $form->name = $request->input('name');
            $form->email = $request->input('email');
            $form->mobile = $request->input('mobile');
            $form->suggest = $request->input('suggest');
            $form->save();
            return response()->json(['message' => 'Form saved']);
        }

    /*    Form::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'suggest' => $request['email'],
        ]);

        return "Usuario registrado";*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = Form::find($id);
        return response()->json(['person' => $form]);
        
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
    public function update(FormReq $request, $id)
    {
         if($request->ajax())
        {
            $form = Form::find($id);
            $form->name = $request->input('name');
            $form->email = $request->input('email');
            $form->mobile = $request->input('mobile');
            $form->suggest = $request->input('suggest');
            $form->save();
            return response()->json(['message' => 'Form updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form::find($id);
        $form->delete();
        return response()->json(['message' => 'form removed']);
    }
}
