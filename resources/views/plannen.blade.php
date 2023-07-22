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
<h2>Een kleine demonstratie...</h2>
<h5>Allereerst: fijn dat uw interesse is gewekt. Op deze pagina's neem ik u mee in een eenvoudig voorbeeld. 
    Mijn doel is om u hiermee enigszins beeld te geven van wat er zoal mogelijk is en waar eventueel voordelen zijn te behalen met wat maatwerk software. 
    Maar ook hoe een en ander technisch - letterlijk 'achter het scherm' - werkt. 
    Daarom geef ik hier en daar uitleg bij wat er gebeurt. <i>In deze case gaat u een fictieve storing melden.</i> <br><br>
    Misschien is het voorbeeld niet helemaal realistisch maar het gaat om het idee. 
    Probeer het daarom ook vooral op uw eigen situatie te projecteren. In dit geval heeft het bedrijf in kwestie een aantal machines opgeleverd.
    Maar ondanks alle inzet en goede zorgen gaat er wel eens iets mis. Er is een storing en daarom wil de gebruiker een monteur ter plaatse. 
    U speelt die gebruiker en u wilt dus zo snel mogelijk die monteur. In plaats van te bellen logt u in bij de leverancier en ziet onderstaand overzicht. 
    Kijk eens hoe eenvoudig het is om bij dit bedrijf een storing te melden...
  
<br><br>
<table> 
    <thead>
        <tr>
            <th>id</th>
            <th>datum</th>
            <th>tijd</th>
            <th>naam monteur</th>
            <th>afspraak</th>            
        </tr>

    </thead>
    <tbody>
        @foreach($demonstration as $demo)  
            <tr>
                <td>{{ $demo->id }}</td>
                <td>{{ $demo->datum }}</td>
                <td>{{ $demo->tijd }}</td>
                <td>{{ $demo->monteur }}</td>
                <td><a href="{{ route('demo.edit', $demo) }}">  Plan deze datum</a></td>  
                
            </tr>
        @endforeach
    </tbody>

</table> 
</h5>
<br><br><br>

</body>
