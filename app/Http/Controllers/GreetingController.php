<?php

namespace App\Http\Controllers;
//use App\Filament\Resources\GreetingResource;

//use App\Filament\Resources\DemonstrationResource;
use App\Models\Demonstration;
use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{

    public function keuze()
    {
        //$demonstration = Demonstration::get();
        $demonstration = Demonstration::all();
        
        //->paginate(3);
        return view('plannen', compact('demonstration')); 
    }

     

    public function prepare()
    {
        $datum = (now());
        $datum1 = $datum->add("P1D")->format('Y-m-d H:i:s');
        $datum2 = $datum->add("P2D")->format('Y-m-d H:i:s');
        $datum3 = $datum->add("P0D")->format('Y-m-d H:i:s');
        $datum4 = $datum->add("P1D")->format('Y-m-d H:i:s');

        $greeting = new Demonstration;
        $greeting->datum=$datum1;
        $greeting->afspraak = 'Afspraak 1';
        $greeting->tijd = '13:30 uur';
        $greeting->monteur = "Rolf van Vleuten";
        $greeting->naam = "Rolf";
        $greeting->save();

        $greeting = new Demonstration;
        $greeting->datum=$datum2;
        $greeting->afspraak = 'Afspraak 2';
        $greeting->tijd = '8:00 uur';
        $greeting->monteur = "Chris Goedhart";
        $greeting->naam = "Chris";
        $greeting->save();

        $greeting = new Demonstration;
        $greeting->datum=$datum3;
        $greeting->afspraak = 'Afspraak 3';
        $greeting->tijd = '14:00 uur';
        $greeting->monteur = "Chris Goedhart";
        $greeting->naam = "Chris";
        $greeting->save();

        $greeting = new Demonstration;
        $greeting->datum=$datum4;
        $greeting->afspraak = 'Afspraak 4';
        $greeting->tijd = '10:30 uur';
        $greeting->monteur = "Bart Flink";
        $greeting->naam = "Bart";
        $greeting->save();

        $tijd=now();

        return [$datum1,$datum2,$datum3,$datum4,$tijd];

    }


    public function show(Demonstration $demonstration)
    {
       
        $demonstration = Demonstration::all();
        //->paginate(3);
       
        return view('overzicht', compact('demonstration'));
      
    }

    /*
    public function edit(Demonstration $demo)
    {
        //DB::table('categories')->where('id','$category')->update(['status'=>'3']);
        //DB::Category->where('id','$category')->update(['status'=>'3']);
        //Category::where('id','$category')->update(['status'=>'3']);
        //Category::where('id','$category')->get();
        
        //Hierboven veel pogingen om de volgende stap te doen: direct wanneer een gebruiker een tijdstip kiest
        //om te reserveren moet dit tijdstip geblokkeerd worden om dubbele boeking te voorkomen! (2=optie)
        //Het veld status wijzigen lukte lang niet; probleem was dat de variabele niet op fillable stond ;)
        //Dus toegevoegd in models.category: protected $fillable = ['name','status'];
       
        Demonstration::find($demo->id)

            ->update(['status'=>'2']);       
        
        return view('categories.vastleggen', compact('category'));
    }
*/
 
}
