<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ICTop.nl</title>
</head>

<body>
<h2>Bijna gereed!</h2>
<h5>U wilt onderstaande afspraak plannen. Vult u de ontbrekende gegevens even aan? Dan weet ik waar en bij wie ik me kan melden? 
Ik kijk uit naar ons gesprek. 
<br><br>
<table> 
    <thead>
        <tr>
            
            <th>datum</th>
            <th>tijd</th>
            <th>afspraak</th>            
        </tr>

    </thead>
    <tbody>
        
            <tr>
                
                <td>{{ $demo->afspraak }}</td>
                <td>{{ $demo->tijd }}</td>
                <td><b>gereserveerd</b></td>
                                
            </tr>
        
    </tbody>
</table> 
<div>
    <br>
        
    </h5>
    
</div>

<form method="POST" action="{{ route('demo.edit4', ['id' => $demo->id,  
    'd_id' => $demo->id,'dem' => $demo->tijd,'bez' => $demo->datum,'afspraak' => $demo->afspraak]) }}">
    @csrf

    
    
    </div>
    <br>
                       
        <input type="text" name="naam" placeholder="Uw naam" required>
        <input type="text" name="telefoon" placeholder="Telefoonnummer" required>
        <input type="text" name="body" placeholder="Bezoekadres en plaats" required >
    
    <button type="submit" >Bevestig deze afspraak</button>
</form>




</body>
