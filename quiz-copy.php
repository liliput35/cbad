<html>
    <head>
        <style>
            body { 
                height: 100vh ;
                padding: 25% ; 
                padding-top: 50vh ;
                font-family: sans-serif ; 
            }

            div { 
                text-align: center ; 
            }
            div input{ 
                font-size: 1em ; 
                
            }

            div button { 
                background-color: green ; 
                color: white ; 
                border: none ; 
                border-radius: 5px ;
                padding: 0.25em 0.5em ; 
                font-size: 1em ;
            }

            p { 
                color: green ; 
                font-size: 2em ; 
                font-family: serif ;
                font-weight: bold ;
            }
        </style>

        <title>Personalized Greeting Page</title>
    </head>
    <body>
        <?php
            $Message = "Enter your name" ; 
            $ButtonText = "Greet Me" ; 
        ?>

        <div class="container">
            <input id="input-el" type="text" placeholder="<?php echo "$Message" ?>">
            <button onclick="greetPerson()" id="btn-el"><?php echo "$ButtonText"?></button>
            <p style="display: none ;" id="parag-el">Hello Bossing Kamusta ka</p>
        </div>
    </body>
    <script>
        var btnElement = document.getElementById("btn-el") ; 
        var inputElement = document.getElementById("input-el") ; 
        var paragElement = document.getElementById("parag-el") ; 

        function greetPerson(){ 
            btnElement.style.display = "none" ; 
            inputElement.style.display = "none" ; 

            paragElement.innerHTML = "Kamusta ang buhay, " + inputElement.value  ; 
            paragElement.style.display = "inline" ;  
        }
    </script>
</html>