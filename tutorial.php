<html>
    <head>
        <?php 
            $Firstname = "Lorenz" ; 
            $Lastname = "Ciocon" ; 

            echo "<title>Tutorial by $Firstname $Lastname</title>"
        ?>

        <link rel="stylesheet" href="style.css">

        
    </head>
    <body>
        <h1>Hello <span id="name-element">Name</span></h1> 

        <input type="text" id="input-element">
        <button onclick="replaceText()">Submit</button> 
        <br>

        <img src="img/pic_bulbon.gif" alt="" style="display: none;" id="on-img">
        <img src="img/pic_bulboff.gif" alt="" id="off-img">
        <button id="on-btn" onclick="switchLight()" style="display: none;">Turn ON</button>
        <button id="off-btn" style="display: none;" onclick="switchLight()">Turn OFF</button>
        
        <button id="btn" onclick="switchLight()">Turn <span id = "btn-text">ON</span></button>

        <br>

        <p id="date-element">Monday, July 69 2069</p>
        <p id="time-element">00:00:00 PM</p>
    </body>

    <script>
        var onImage = document.getElementById("on-img") ; 
        var offImage = document.getElementById("off-img") ; 
        var onBtn = document.getElementById("on-btn") ; 
        var offBtn = document.getElementById("off-btn") ; 
        var btnText = document.getElementById("btn-text") ; 

        var isOn = false ;

        function switchLight(){ 
            if(!isOn){ 
                offImage.style.display = "none" ;
                onImage.style.display = "inline" ; 

                btnText.innerHTML = "OFF" ; 
                isOn = true ;
            } else { 
                onImage.style.display = "none" ;
                offImage.style.display = "inline" ; 

                btnText.innerHTML = "ON" ; 

                isOn = false ;
            }
        }
        /*
        function turnOn(){ 
            offImage.style.display = "none" ;
            onImage.style.display = "inline" ; 

            onBtn.style.display = "none" ; 
            offBtn.style.display = "inline" ; 
        }

        function turnOff(){ 
            onImage.style.display = "none" ;
            offImage.style.display = "inline" ; 

            offBtn.style.display = "none" ; 
            onBtn.style.display = "inline" ; 
        }*/
    </script>

    <script src="js/datetut.js"></script>
</html>