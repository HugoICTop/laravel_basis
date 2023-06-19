<?php

namespace App\Http\Controllers;

use App\Models\demonstration;
use App\Models\Greeting;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    

     public function contact(Request $request)
     {
         
         Greeting::create([
             'datum1' => now(),
             //'demonstration_id' => '', 
             'demonstration' => 'contact aanvraag',
             'naam' => $request->input('naam'),
             'email' => $request->input('email'),
             'telefoon' => $request->input('telefoon'),
             'body' => $request->input('message'),
             ]);
 
            //return redirect()->route('posts.index');
            return view('welcome');
 
     }  



    public function edit(demonstration $demo)
    {
        demonstration::find($demo->id)
            ->update([
                'afspraak'=>'geboekt!'
            ]); 
            
        
        Greeting::create([
            'datum1' => now(),
            'demonstration_id' => $demo->id,
            'demonstration' => $demo->tijd,
            'bezoekdatum' => $demo->datum,
            'body' => $demo->monteur,
            ]);

            echo $demo;
       //return redirect()->route('categories.index');
        //return view('categories.vastleggen', compact('category'));
    }


    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, demonstration $demo)
    {
       /* dd($demo);

        $demo->update([
            
             'afspraak'=>$request->input('bedrijf'),
             
         ]);
 
        return redirect()->route('categories.index');
        */
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
