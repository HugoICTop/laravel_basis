<link rel="stylesheet" href="css/style.css" />

<body>
    <div class="title">
        <h2>
            Contactformulier
        </h2>
                     
        
    </div>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('demo.contact') }}">
                        @csrf
                        <h3>Naam:</h3> 
                       
                        <input type="text" name="naam" required >
                        
                        <h3>Email:</h3>   
                       
                        <input type="text" name="email" required>
                        
                        <h3>Telefoon:</h3> 
                       
                        <input type="text"   name="telefoon" placeholder="(optioneel)">
<!--
                        <label for="cars" ></label>
                            <select id="ref" name="ref">
                            <option value="onderwerp">Onderwerp</option>
                            <option value="saab">Bestaande website</option>
                            <option value="volvo">Nieuwe website</option>
                            <option value="saab">App</option>
                            <option value="fiat">Koppeling met database</option>
                            <option value="overig">Overig</option>
                            </select>
                             -->

                          <h4>  >  </h4>
                        <textarea name="message" placeholder="Uw bericht"></textarea>
                        <br /><br />
                        <button type="submit" >Verzenden...</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h5>   
        Heeft u een korte vraag of opmerking stuur dan even een berichtje. 
        Wilt u liever wat uitgebreider kijken naar
        alle mogelijkheden? Dan kom ik graag (en geheel vrijblijvend) bij u langs 
        voor een verhelderend gesprek. <a class="linkgroen" href="afspraak.html">Plan hier meteen een afspraak in</a>; ik sta graag voor u klaar! </p>
    </h5>
</body>