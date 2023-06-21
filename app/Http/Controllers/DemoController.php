<?php

namespace App\Http\Controllers;

use App\Models\Demonstration;
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
             'demonstration' => 'contactformulier',
             //'demonstration' => $request->input('ref'),
             'naam' => $request->input('naam'),
             'email' => $request->input('email'),
             'telefoon' => $request->input('telefoon'),
             'body' => $request->input('message'),
             ]);
 
            //return redirect()->route('posts.index');
            return view('welcome');
 
     }  



    public function edit(Demonstration $demo)
    {
        Demonstration::find($demo->id)
            ->update([
                'afspraak'=>'geboekt!'
            ]); 
            
        $greeting = Greeting::create([
            
            'datum1' => now(),
            'demonstration_id' => $demo->id,
            'demonstration' => $demo->tijd,
            'bezoekdatum' => $demo->datum,
            'body' => $demo->monteur,
            ]);
                        
            //echo
             
           // $demo->id,
           // $demo->naam;

            // dus je krijgt / hieronder wordt de goede regel in de greeting gepakt (en dat is de juiste want de regel in demonstrations
            // kan ook nog door iemand anders woprden gebruikt en hoeft dus niet de unieke en gebruikersafhankelijke info te bevatten zoals dat nij greetings wel het geval is)
            //$greeting = Greeting::find($demo->demonstration_id);
            //$greeting = Greeting::find(94);
            return view('sms', [ 'greeting' => $greeting ]);
            
            // hieronder wordt de regel in demonstartions gepakt maar dat is dus niet de goede (zie uitleg hierboven!)
            //    $greeting = Demonstration::find($demo->id);
          //  return view('sms', [ 'greeting' => $greeting ]);
            
            
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
