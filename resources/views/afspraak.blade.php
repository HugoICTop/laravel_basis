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
<h2>Een afspraak inplannen</h2>
<h5> 

<div class="title">
    
    <p>
        Inderdaad  kom ik graag even bij u langs voor een persoonlijk gesprek. Dan kan ik u
        rustig alle uitleg geven die u nodig heeft. En -aan de hand van uw specifieke
        situatie- meteen veel beter inschatten welke mogelijkheden en kansen er eventueel zijn. 
        Alles geheel vrijblijvend uiteraard.
    </p>

    <p>
        Kies hieronder een tijdstip dat u uitkomt. Liever een ander moment?  
        Stuur even een mail op <a class="linkgroen" href="mailto:info@ictop.nl">info@ictop.nl</a>, of
        vul het <a class="linkgroen" href="https://www.ictop.nl/form">contactformulier</a> in.
        Bellen kan op <b>06 134 55 333</b>. 
    </p>
   
    
   
</div>

<br>
<table> 
    <thead>
        <tr>
            
            <th>datum</th>
            <th>tijd</th>
            <th>beschikbaar</th>            
        </tr>

    </thead>
    <tbody>
        @foreach($demonstration as $demo)  
            <tr>
                
                <td>{{ $demo->afspraak }}</td>
                <td>{{ $demo->tijd }}</td>
                <td><a href="{{ route('demo.edit3', $demo) }}">Reserveer deze afspraak</a></td>  


            </tr>
        @endforeach
    </tbody>

</table> 
</h5>
<br><br><br>

</body>
