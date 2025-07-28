<html>
    <head>
        <style>
            body { 
                background-color: red ;
            }
            .divs { 
                width: 50% ; 
                height: 50% ;
            }

            img { 
                height: 100% ;
            }

            #box1 { 
                float: left ;
            }

            #box2 { 
                float: left ;
            }

            #box3 { 
                clear: left ;
                float: left ;
            }

            #box4 { 
                clear: right ;
                float: left ;
            }

            #img1, #img3 { 
                float: right ; 
                width: 50%;
            }

            #img2, #img4 { 
                float: left ; 
                width: 50%;
            }
        </style>
    </head>
    <body>
        <div class="divs" id="box1"><img id="img1" src="img/1.jpg" alt=""></div>
        <div class="divs" id="box2"><img id="img2" src="img/4.jpg" alt=""></div>
        <div class="divs" id="box3"><img id="img3" src="img/2.jpg" alt=""></div>
        <div class="divs" id="box4"><img id="img4" src="img/3.jpg" alt=""></div>
    </body>
</html>