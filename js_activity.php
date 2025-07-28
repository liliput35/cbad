<html>
    <head>
        <link rel="stylesheet" href="index.css">

        <script>
            function replaceText(){ 
                inputEl = document.getElementById("textinputEl") ; 
                spanEl = document.getElementById("spanEl") ; 
                
                spanEl.innerHTML = inputEl.value ;
            }

            let isOff = true ; 

            function switchLight(){ 
                if(isOff){ 
                    document.getElementById("offBulb").style.display = "none" ;
                    document.getElementById("onBulb").style.display = "block" ;

                    document.getElementById("switchEl").innerHTML = "OFF" ;
                    isOff = false ;
                } else { 
                    document.getElementById("offBulb").style.display = "block" ;
                    document.getElementById("onBulb").style.display = "none" ;

                    document.getElementById("switchEl").innerHTML = "ON" ;
                    isOff = true ;
                }
            }
        </script>
    </head>

    <body>
        <h1>Hello</h1>

        <input type="text" id="textinputEl"  placeholder="Enter name"> 
        <button id="btnEl" onclick="replaceText()">Submit</button>
        <br>

        <?php echo "Hi "?> 
        <span id="spanEl">Guest</span>
        <br>

        <img src="img/pic_bulboff.gif" alt="" id="offBulb">
        <img src="img/pic_bulbon.gif" alt="" id="onBulb" style="display: none ;">
        <br>
        <button onclick="switchLight()">Turn <span id="switchEl">ON</span></button>
    </body>
</html>