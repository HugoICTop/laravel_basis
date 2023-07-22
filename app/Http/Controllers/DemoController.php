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
             'bedrijf' => 'niet gevraagd',
             'naam' => $request->input('naam'),
             'email' => $request->input('email'),
             'telefoon' => $request->input('telefoon'),
             'body' => $request->input('message'),
             ]);
 
            return redirect('https://site.ictop.nl/');
            //return redirect()->route('posts.index');
            //return view('welcome');
 
     }  

     public function edit3($id)
     {
        Demonstration::find($id)
        ->update(['type'=> 2 ]);
      // dd($id);
    $demo=Demonstration::find($id); // deze regel heb ik zelf verzonnen!!!
      return view('reserveer', [ 'demo' => $demo ]);
     }



    public function edit(Demonstration $demo)
    {
        Demonstration::find($demo->id)
            ->update([
                'afspraak'=>'geboekt!'
            ]); 
                
        //return view('storing', [ 'demo' => $demo ]);
/* Om te voorkomen dat er twee records worden aangemaakt vervalt deze create opdracht
de variabelen worden eerst meegenomen naar de storing.blade.php en aldaar aangevuld met extra
gebruikers gegevens als machine en klacht. Pas daarna wordt alles hieronder in edit2 procedure 
in één keer tegelijk in 1 record weggeschreven!

        $greeting = Greeting::create([
            
            'datum1' => now(),
            'voornaam' => $demo->naam,
            'demonstration_id' => $demo->id,
            'demonstration' => $demo->tijd,
            'bezoekdatum' => $demo->datum,
            'body' => $demo->monteur,

            'klacht' => "warm gelopen",
            'telefoon' => "06 5017 1011",
            'machine' => "Warmtepomp WP53",
            ]);
*/

            return view('storing', [ 'demo' => $demo ]);

/*
            Greeting::find($greeting->id)
            ->update([
                //'body'=>'GEBOEKT!'
            ]); 

            // dus je krijgt / hieronder wordt de goede regel in de greeting gepakt (en dat is de juiste want de regel in demonstrations
            // kan ook nog door iemand anders woprden gebruikt en hoeft dus niet de unieke en gebruikersafhankelijke info te bevatten zoals dat nij greetings wel het geval is)
            //$greeting = Greeting::find($demo->demonstration_id);
            //$greeting = Greeting::find(94);
          
            
            // hieronder wordt de regel in demonstrations gepakt maar dat is dus niet de goede (zie uitleg hierboven!)
            //    $greeting = Demonstration::find($demo->id);

            return view('smsbericht', [ 'greeting' => $greeting ]);
 */           
            
       //return redirect()->route('categories.index');
        //return view('categories.vastleggen', compact('category'));
    

        }

    


     //   public function vul(Demonstration $demo)    
        
                        
           
        

   

    /**
     * Update the specified resource in storage.
     */
    
    public function edit2(greeting $demo, Request $request)
    {
        
        Demonstration::find($demo->id);
            //  dd($demo->id)   ;           
        $greeting = Greeting::create([
             
            'datum1' => now(),
            //'bezoekdatum' => $demo->datum, >> toelichting!!!!!!
            'voornaam' => $request->input('vn') ,
            'demonstration_id' => $request->input('d_id') ,
            'demonstration' => $request->input('dem') ,
            'bezoekdatum' => $request->input('bez') ,
            
            'body' => $request->input('bd') ,
            'machine' => $request->input('machine'),
            'klacht' => $request->input('klacht'), 
            'naam' => $request->input('naam'),
            'bedrijf' => $request->input('bedrijf'),
            'telefoon' => $request->input('telefoon'),
            //'klacht' => "warm gelopen",
            //'telefoon' => "06 134 55 333",
            //'machine' => "Warmtepomp WP53",
            ]);


            return view('smsbericht', [ 'greeting' => $greeting ]);

            //<td><a href="{{ route('demo.edit', $demo) }}"> Verwerk deze gegevens</a></td> 
            //<td><a href="{{ route('demo.edit2', $demo) }}"> Verwerk deze gegevens</a></td>  
            
       /* dd($demo);

        $demo->update([
            
             'afspraak'=>$request->input('bedrijf'),
             
         ]);
 
        return redirect()->route('categories.index');
        */
    }
    
    public function edit4(greeting $demo, Request $request)
    {
        
        Demonstration::find($demo->id);
        
            //  dd($demo->id)   ;           
        $greeting = Greeting::create([
             
            'datum1' => now(),
            'demonstration_id' => $request->input('d_id') ,
            'demonstration' => $request->input('afspraak') ,
            'bezoekdatum' => $request->input('bez') ,
            'klacht' => $request->input('dem') ,
            'naam' => $request->input('naam'),
            'body' => $request->input('body'),
            'telefoon' => $request->input('telefoon'),
            
            ]);
        
            return view('bevestiging', [ 'greeting' => $greeting ]);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
