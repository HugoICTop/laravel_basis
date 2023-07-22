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
    <h2>SMS-bericht</h2>
    <h5>De storing die u zojuist heeft gemeld wordt meteen aan de juiste monteur doorgegeven. 
    Hij ontvangt vrijwel direct een SMS-bericht op zijn telefoon. Dit is de eerste actie. </h3>
    <br><br>

    
    <div class="sms"> 
        <h1> SMS 0613455333</h1>

        <p>Bericht voor monteur:<b> {{ $greeting->body }} </b></p>
        <p>Beste {{ $greeting->voornaam }}, je wordt verwacht op {{ Carbon\Carbon::parse($greeting->bezoekdatum)->format('d-m') }} 
            om {{ $greeting->demonstration }} bij: {{ $greeting->bedrijf }}</p>
        <p>Het betreft machine </p>{{ $greeting->machine }}
        <p>Omschrijving storing:<i> {{ $greeting->klacht }} </i></p> 
        <p>Telefoonnummer klant: <u> {{ $greeting->telefoon }} </u></p>
    </div> 
    <br>
    <h2>Maar er gebeurt meer...</h2>
    <h5>Met automatisering willen we bereiken dat zaken  <i>geautomatiseerd</i> worden uitgevoerd. Daarmee vertel ik niks nieuws. Onder andere om het aantal menselijke 
        handelingen te beperken. Dat scheelt namelijk kostbare tijd en capaciteit, en daarmee veel geld. En het voorkomt communicatieproblemen, 
        vergeten acties, losse briefjes en gewoon 'domme' menselijke vergissingen.<br><br> 
        Wat hier gebeurt komt al redelijk in de buurt van dat idee. 
        U vult als klant een paar gegevens in op een website en de monteur ontvangt een sms op z'n telefoon. 
        Daar komt geen telefoniste of planner aan te pas. Er hoeven geen gegevens handmatig te worden ingevoerd en verspreid.<br><br>
        Natuurlijk ontvangt u zelf een e-mail ter bevestiging van de zojuist gemaakte afspraak:
    </h5>
    <br><br>
    <div class="mail"> 
        <h1> MAIL</h1>
        <p>Aan: {{ $greeting->bedrijf }} / {{ $greeting->naam }} </p>
        <p>Onderwerp:<b> storing aan {{ $greeting->machine }} </b></p>
        <p>Afkomstig van: Montagebedrijf The Mounting Men</p>
        {{ now() }}<br>
------------------------------------------------------------
       <p>Zojuist heeft u een storingsmelding gedaan. Deze melding is in ons systeem geregistreerd 
        met referentie <b> 23-REP{{ $greeting->demonstration_id }}/{{ $greeting->id }} </b>. </p> 
        <p>Op {{ Carbon\Carbon::parse($greeting->bezoekdatum)->format('d-m') }} 
             zal onze monteur <b> {{ $greeting->body }}</b> om {{ $greeting->demonstration }} 
            aanwezig zijn bij: {{ $greeting->bedrijf }} en zich melden bij {{ $greeting->naam }}</p>
        <p>{{ $greeting->voornaam }} zal onderhoud verrichten aan uw 
        <b> {{ $greeting->machine }}. </b></p>
        <p>Omschrijving storing:<i> {{ $greeting->klacht }} </i></p> 
        <p>Mochten er nog bijzonderheden zijn dan kunt u die vooraf telefonisch aan ons doorgeven op nummer <b>06 134 55 333</b>.</p> 

        <p>De monteur gebruikt eventueel telefoonnummer {{ $greeting->telefoon }} om contact met u op te nemen.</p>
        <br><br>
        <p>Met vriendelijke groet,</p> 
        
        <p><b><i>Montagebedrijf The Mounting Men</i> </b>  </p>
        <br><br>
    </div> 
    <br>
    <h2>Gegevensopslag</h2>
    <h5>Dit e-mailbericht aan u als klant bevat vergelijkbare gegevens als het sms-bericht aan de monteur. 
        Dat is logisch; het gaat immers om dezelfde afspraak.
        Maar het is ook logisch omdat deze gegevens, de <i>data</i>, uit dezelfde bron komen. 
        Het zijn gegevens die uit diverse databases worden opgehaald en aan elkaar gekoppeld. <br><br>
        Elders op deze site leg ik uit hoe de gegevens vanuit de 'opslag' (de zogenaamde <i>backend</i>) gebruikt kunnen worden door 
        een gebruiker van uw website (het zogeheten <i>frontend</i> gedeelte). Door op deze manier slim gebruik te maken van reeds bekende 
        data, en nieuwe informatie daar steeds aan te koppelen, kan enorme winst worden behaald. Uiteraard wordt dit in de praktijk 
        strikt beschermd door een inlogpagina met geregistreerde gebruikers en een goed doordacht authenticatie protocol, 
        maar dat zou voor deze eenvoudige demo een beetje te ver voeren.
            
        <br><br> 
        In ons voorbeeld ziet u hieronder een idee van een 'werkbon' ten behoeve van de planning afdeling. Wat ik hiermee wil tonen is 
        dat het redelijk eenvoudig is om overal in de organisatie te beschikken over dezelfde gegevens. Consequent en eenduidig dus.
        
        
    </h5>
    <br><br>

    <div class="bon"> 
    <h1> PLANNING </h1>
    <h2><b> Werkbon: 23-REP{{ $greeting->demonstration_id }}/{{ $greeting->id }}</b> </h2>
    <h2>Nieuw item op {{ Now() ->format('d-m') }} </h2>
    <h2>Gemeld door {{ $greeting->naam }} {{ $greeting->telefoon }}</h2>
    
    ------------------------------------------------------
    <p>Monteur {{ $greeting->body }} </p>
   <p>{{ Carbon\Carbon::parse($greeting->bezoekdatum)->format('d-m') }} {{ $greeting->demonstration }} 
    <b> {{ $greeting->bedrijf }} / {{ $greeting->naam }}</b> </p>
    <p>voor onderhoud aan {{ $greeting->machine }} </p>
    <p>--> {{ $greeting->klacht }}</p> 
    
</div> 

<h2>Met een beetje fantasie...</h2>
    <h5>U kunt zich voorstellen dat de monteur (in ons geval  {{ $greeting->body }}), als hij bij u op bezoek komt om de klacht aan de 
        {{ $greeting->machine }} op te lossen, zijn uren en materialen wil registreren. Dat doet hij ter plaatse in zijn tablet in een <i>vooraf gegenereerd formulier</i>. 
        De stappen die we daar dan weer aan kunnen hangen zijn bijvoorbeeld het <i>automatisch aanmaken van een factuur</i>, realtime op de administratie, 
        zodat er alleen nog maar een krabbeltje op hoeft. Of een pushbericht met een <i>geautomatiseerde paklijst</i>
        richting het magazijn zodat de verbruikte materialen voor {{ $greeting->voornaam }} gereed liggen. Dan kan hij zijn bus weer 
        eenvoudig compleet maken als hij 's middags terug is op de zaak.<br><br> </h5>
        
<h2>En u?</h2>  
    <h5>      
        Wellicht heeft u zelf een heel ander bedrijf zoals in de dienstverlening. Of een sportschool met 150 abonnementhouders, of een horecaonderneming. 
        Wat uw situatie ook is, gemerkt of ongemerkt lopen er allerlei informatiestromen door uw bedrijf. Tussen collega's, intern en extern.
        Tussen afdelingen, tussen afnemers, leveranciers en uw inkoop, de receptie of de boekhouding. Via klanten aan de balie of op het terras. 
        Maar ook op uw website gebeurt van alles (en kan er wellicht nog veel meer dan u voor mogelijk houdt). 
        Bestellingen plaatsen en direct betalen, informatie aanvragen, een afspraak plannen of een compleet loyaliteitsprogramma bijhouden. 
        <br><br>
        
        Ik weet niet waar uw behoefte ligt of welke ideeën u hebt. Ik weet wel dat een miniem stukje automatisering al snel zorgt voor 
        meer structuur in de data en strakkere lijnen in de informatiedeling. 
        Wilt u minder mailtjes, memootjes en afscheid van al die losse bestanden op elke computer? 
        In plaats van een zee aan losse gegevens liever een overzichtelijk dashboard met relevante data op basis waarvan u écht kunt sturen?<br><br>
        Werken via een interne website of intranet is een fluitje van een cent. Voor gegevens delen via mail, SMS 
        of met een eigen app in de Google playstore geldt hetzelfde. Dat heeft u in de demo gezien.
        Het voegt weinig toe om nog meer voorbeelden te geven: u begrijpt allang dat vrijwel alles mogelijk is. Laten we daarom vooral eens vrijblijvend kennismaken. 
        <b> <a class="linkgroen" href="https://www.ictop.nl/afspraak">Plan hier gewoon een afspraak in mijn eigen agenda.</a></b>
         Dan praat ik u graag helemaal bij...
    </h5>

    <br><br><br>

    <div class="pag">    

        <div class="sms"> 
            <h1>DE SNACKCORNER</h1>

            <p><b> Uw bestelling #{{ $greeting->id }} staat gereed om afgehaald te worden:</b></p>
            
            <p>Gezinszak frites 5 pers.</p>
            <p>2x Vega-burger</p> 
            <p>3x Kalfskroket</p>
            <p>2x Milkshake - aardbei</p>
            
            <p><i> Het totaalbedrag <b>€ 18,75</b> is voldaan met IDeal</i></p> 
            <p>(<u><b>18</b> snackpunten aan uw account toegevoegd</u>)</p>
        </div> 
        <br><br><br>
        <div class="bon"> 
            <h1><b> Werkbon: 23-REP{{ $greeting->demonstration_id }}/{{ $greeting->id }}</b> </h1>
            <h2>Ingevuld op {{ Carbon\Carbon::parse($greeting->bezoekdatum)->format('d-m') }} </h2>
            <h2>Klant: {{ $greeting->bedrijf }} </h2>
            
            ------------------------------------------------------
            <p>Monteur {{ $greeting->body }} </p>
           <p>{{ Carbon\Carbon::parse($greeting->bezoekdatum)->format('d-m') }} Reparatietijd <b>50 min.</b><br><br> 
            <b><u> Onderdelen:</u></b></p>
            <p>1x 0362.7 Relais 24V NC</p>
            <p>2x 1271.3 Connector 12 polig</p> 
            <p>1x 0022.8 Onderplaat RVS</p><br><br>
            <b><u> Naleveren:</u></b></p>
            <p>1x 8861.5 Display 24V incl. connector</p>
        </div> 

        <div class="sms"> 
            <h1>SMS {{ $greeting->telefoon }}</h1>

            <p>Bericht voor:<b> {{ $greeting->naam }} </b></p>
            <p>Onze monteur {{ $greeting->body }} is inmiddels onderweg.<br><br> 
                Naar verwachting is hij iets voor {{ $greeting->demonstration }} bij u.</p>
            <p>{{ $greeting->voornaam }} komt voor de storing aan </p>{{ $greeting->machine }}
        </div> 
        
        
    </div>
    <br><br><br>
    
    <h3><b><a class="linkgroen" href="https://site.ictop.nl/work.html">Terug...</a></b></h3>
   
    <br><br>
</body>



