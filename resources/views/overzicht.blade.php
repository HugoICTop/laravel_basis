<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>ICTop.nl</title>
</head>

<body>
<h3>U heeft vandaag, {{ now()->format('d-m') }}, om <b>{{ now()->format(' H:i') }}</b> een storing gemeld. We willen u natuurlijk zo snel mogelijk helpen!</h3>
<h2>Op een van de volgende data komen we graag langs voor een servicebezoek:</h2>
<br><br>
<table> 
    <thead>
        <tr>
            <th>datum</th>
            <th>tijd</th>
            <th>naam monteur</th>
            <th>afspraak</th>            
        </tr>

    </thead>
    <tbody>
        @foreach($demonstration as $demo)
            <tr>
                <td>{{ $demo->datum }}</td>
                <td>{{ $demo->tijd }}</td>
                <td>{{ $demo->monteur }}</td>
                <td>{{ $demo->afspraak }}</td>
                
            </tr>
        @endforeach
    </tbody>

</table> 
<br><br>
<h3>U kunt een van deze afspraken direct zelf reserveren. Toch liever op een ander moment, of wilt u eerst overleggen? <br>Belt u dan even met onze serviceafdeling op <b>06 - 134 55 333</b>.</h3>
<br>
--> nog toevoegen een redirect!
</body>
