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
<h2>Het servicebezoek</h2>
<h5>Nadat u uit de lijst een moment heeft gekozen staat deze afspraak meteen voor u gereserveerd. 
    Dit betekent dat een andere klant deze monteur niet voor hetzelfde tijdstip kan inplannen.

<br><br>
<table> 
    <thead>
        <tr>
            <th>nummer</th>
            <th>datum</th>
            <th>tijd</th>
            <th>naam monteur</th>
            <th>afspraak</th>            
        </tr>

    </thead>
    <tbody>
        
            <tr>
                <td>{{ $demo->id }}</td>
                <td>{{ $demo->datum }}</td>
                <td>{{ $demo->tijd }}</td>
                <td>{{ $demo->monteur }}</td>
                <td><b>geboekt!</b></td>
                                
            </tr>
        
    </tbody>
</table> 
<div>
    <br>
        Laten we de demo wat meer realistisch maken. Hieronder kunt u een machine selecteren, en daar vervolgens een fictieve storing 
        aan koppelen. De gegevens dar onder (naam, telefoon e.d.) zijn niet verplicht om in te voeren. 
        Maar het maakt de demo wel wat herkenbaarder en realistischer als u ze overschrijft met uw eigen gegevens.
    </h5>
    
</div>

<form method="POST" action="{{ route('demo.edit2', ['id' => $demo->id, 'bd' => $demo->monteur, 'vn' => $demo->naam, 
    'd_id' => $demo->id,'dem' => $demo->tijd,'bez' => $demo->datum]) }}">
    @csrf

    <div class="selecteren">
        <label for="machine" ></label>
        <select id="machine" name="machine">
        <option value="onbekende machine">Selecteer de machine:</option>
        <option value="Drukpers D21">Drukpers D21</option>
        <option value="Aandrijflijn A16">Aandrijflijn A16</option>
        <option value="Relaiskast R12">Relaiskast R12</option>
        <option value="Heftruck H04">Heftruck H04</option>
        <option value="Warmtepomp WP43">Warmtepomp WP43</option>
        </select>
        <br><br>
        <label for="klacht" ></label>
        <select id="klacht" name="klacht">
        <option value="geen klacht gespecificeerd">Selecteer de klacht:</option>
        <option value="machine start niet op">Machine start niet op</option>
        <option value="vloeistof lekkage">Vloeistof lekkage</option>
        <option value="spanning is weggevallen">Spanning is weggevallen</option>
        <option value="lager loopt aan">Lager loopt aan</option>
        <option value="machine wordt warm">Machine wordt warm</option>
        <option value="overig">Overig</option>
        </select>
    
    </div>
    <br>
                       
        <input type="text" name="naam" value="De heer Koopmans" placeholder="Uw naam" >
        <input type="text" name="telefoon" value="06 134 55 333" placeholder="Telefoonnummer" >
        <input type="text" name="bedrijf" value="De Kozijnenoutlet bv" placeholder="Bedrijfsnaam" >
    
    <button type="submit" >Verwerk deze gegevens...</button>
</form>




</body>
