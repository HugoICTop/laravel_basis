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
<h3>Dit wordt plannen</h3>
<h2>onderschrift</h2>
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
<br><br>
<h3></h3>
<br>

</body>
