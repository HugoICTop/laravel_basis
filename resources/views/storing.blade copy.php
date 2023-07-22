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
<h2>Servicebezoek:</h2>
<h3>Nadat u de keuze heeft gemaakt staat deze afspraak voor u gereserveerd, zoals u ziet</h3>

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
    <h5>We gaan de demo wat meer realistisch maken. Daarom kunt u hieronder een fictieve machine selecteren. 
        En daar een storing aan koppelen:</h5>
    <br>
</div>
<div class="selecteren">
    <label for="machine" ></label>
    <select id="machine" name="machine">
    <option value="machine">Selecteer de machine:</option>
    <option value="Drukpers D21">Drukpers D21</option>
    <option value="Aandrijflijn A16">Aandrijflijn A16</option>
    <option value="Relaiskast R12">Relaiskast R12</option>
    <option value="Warmtepomp WP43">Warmtepomp WP43</option>
    </select>
    <br><br><br><br>
    <label for="klacht" ></label>
    <select id="klacht" name="klacht">
    <option value="klacht">Selecteer de klacht:</option>
    <option value="start">Machine start niet op</option>
    <option value="lekkage">Vloeistof lekkage</option>
    <option value="spanning">Spanning is weggevallen</option>
    <option value="lager">Lager loopt aan</option>
    <option value="overig">Overig</option>
    </select>

</div>


<br><br>
<td><a href="{{ route('demo.edit', $demo) }}"> Verwerk deze gegevens</a></td> 

</body>
