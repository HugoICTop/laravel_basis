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
    <h3>Dit wordt plannen</h3>
    <h2>onderschrift</h2>
    <br><br>
    <body>
       <div class="sms"> 
           <h1> SMS </h1>

           <p>Nu wat variabelen hieronder:</p>

           {{ now() }}
           {{ $greeting->id }}
           {{ $greeting->demonstration_id }}
           {{ $greeting->demonstration }}
           {{ $greeting->datum1 }}
           {{ $greeting->bezoekdatum }}
           {{ $greeting->body }}
           {{ $greeting->email }}
           {{ $greeting->telefoon }}
        
             
       </div>     
        
      
    </body>
</html>
