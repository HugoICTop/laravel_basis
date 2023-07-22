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
    <h2>Bevestiging</h2>
    <br><br>
    <h5>Geachte {{ $greeting->naam}}, u heeft zojuist een afspraak gemaakt voor:<br><br>
        <u><b> {{ $greeting->demonstration }} om {{ $greeting->klacht}}</b>,
         locatie: {{ $greeting->body }}.</u> </h5>
    <br><br>
    <h5>Wilt u deze afspraak eventueel wijzigen, of vooraf alvast wat informatie delen, stuurt u dan even een bericht aan <b>info@ictop.nl</b>. </h5>
    
    <br>
    <h5>In de tussentijd kunt u mij ook bereiken op <b>06 - 134 55 333</b>.  </h5> <br>
    <h5>Met vriendelijke groet,<br>ICTop.nl<br><br>
    ing Hugo Viergever </h5> 
    <br><br><br>
    
    <h3><b><a class="linkgroen" href="https://site.ictop.nl/work.html">Terug...</a></b></h3>
   
    <br><br>
</body>



