<link rel="stylesheet" href="css/style.css" />

<body>
    
        <h2>
            Contactformulier
        </h2>
        <h5>   
            Heeft u een korte vraag of opmerking stuur dan even een berichtje via dit formulier. <br>
             
        Wilt u liever wat uitgebreider kijken naar
            alle mogelijkheden? Ik kom graag even bij u langs 
            voor een verhelderend gesprek.      
            Een afspraak inplannen doet u <a class="linkgroen" href="https://www.ictop.nl/afspraak">zonder te bellen
                rechtstreeks in mijn agenda</a> op het moment dat u het beste uitkomt.
        </h5>
       
    

    
    
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
                        <textarea name="message" placeholder="Uw bericht" required></textarea>
                        <br />
                        <button type="submit" >Verzenden...</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>