<link rel="stylesheet" href="css/style.css" />
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('demo.contact') }}">
                        @csrf
                        <h3>Naam:</h3> 
                        <br />
                        <input type="text" name="naam"  >
                        <br /><br />
                        <h3>Email:</h3>   
                        <br />
                        <input type="text" name="email" >
                        <br /><br />
                        <h3>Telefoon:</h3> 
                        <br />
                        <input type="text" name="telefoon" >
                        <br /><br />
                        <h3>Message:</h3>  
                        <br />
                        <input type="text" name="message" >
                        <br /><br />
                        <button type="submit" >Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>