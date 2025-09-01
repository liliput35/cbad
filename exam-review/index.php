<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <?php 
        $Title = "Log in Page" ; 
        echo("<title>$Title</title>") ;
    ?>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body { 
            overflow-x: hidden;
        }
        .hero { 
            background: linear-gradient(-45deg, #c28d5bff, #6f2fc2ff);
            color: white;
            height: 100vh ;
            padding: 10em;
        }

        h3 { 
            color: #6f2fc2ff;
        }

        input { 
            width: 100%;
            background-color: #e3d8f1ff ;
            border-radius: 20px ;
            border: none ; 
        }

        button { 
            padding: 5px 10px;
            width: 150px;
            border: none ; 
            border-radius: 25px ; 
            color: white ; 
            background: linear-gradient( to right, #c25bb9ff, #6f2fc2ff);
        }
    </style>
</head>
<body>
    <div class="content-container">
        <div class="row">
            <div class="col-md-7 hero">
                <h1 id="header-el">Welcome to website</h1>
                <p id="parag-el">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultrices elit a neque pellentesque, id auctor mi aliquam. Donec vel arcu sapien. Aenean risus est, rutrum a aliquet sed, vestibulum vitae felis. Curabitur quis vulputate leo. In enim metus, rutrum vel sapien pulvinar</p>
            </div>

            <div class="col-md-5 login d-flex flex-column justify-content-center align-items-center ">
                <div class="login-cont w-50">
                    <h3 class="text-center">USER LOGIN</h3>
                    <input type="text" placeholder="username" class="mb-3 px-2 py-2 animate__animated" id="user-input">
                    <br>
                    <input type="password" placeholder="password" class="mb-3 px-2 py-2 animate__animated" id="pass-input"> 
                    <br>
                </div>
                    
                <button class="text-center" onclick="verifyUser()">LOGIN</button>
                
            </div>
        </div>
    </div>
</body>

<script>
    const correctUsername = "user123" ; 
    const correctPassword = "password123" ; 

    const header = document.getElementById("header-el") ; 
    const parag = document.getElementById("parag-el") ; 

    const userInput = document.getElementById("user-input") ; 
    const passInput = document.getElementById("pass-input") ; 

    function verifyUser(){ 

        userInput.classList.remove("animate__wobble") ;
        passInput.classList.remove("animate__wobble") ;

        if((userInput.value == correctUsername) && (passInput.value == correctPassword)){ 
            userInput.style.border = "none";
            passInput.style.border = "none";

            changeText() ; 
        } else { 
            userInput.style.border = "solid 1px red";
            passInput.style.border = "solid 1px red";

            userInput.classList.add("animate__wobble") ;
            passInput.classList.add("animate__wobble") ;
        }
    }

    var today = new Date() ;

    var minutes = today.getMinutes() ; 
    if(minutes < 10){ 
        minutes = '0' + minutes ;
    }
    console.log(minutes) ; 

    var seconds = today.getSeconds() ; 
    console.log(seconds) ;  

    var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Friday", "Saturday"]

    var day = today.getDay() ; 
    console.log(days[day]) ;  

    var month = (today.getMonth()) + 1 ; 
    console.log(month) ; 

    var date = today.getDate() ; 
    console.log(date) ; 

    var year = today.getFullYear() ; 
    console.log(year) ;  

    var hours = (today.getHours() > 12) ? (today.getHours() - 12) : today.getHours(); 
    console.log(hours) ; 

    var prepand = "AM" ; 

    if(today.getHours() > 12){ 
        prepand = "PM"
    }

    console.log(prepand) ; 


    var finalTime = hours + ':' + minutes + ':' + seconds + ' ' + prepand ; 
    console.log(finalTime)

    var finalDate = days[day] + ' ' + month + '/' + date + '/' + year ;
    console.log(finalDate)


    function changeText(){ 
        header.textContent = "Welcome " + userInput.value ;
        parag.innerHTML = "Today is " + finalDate + finalTime ; 
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>