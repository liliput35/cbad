<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php 
        $Title = "CBAD Midterm Exam" ; 
        $Heading = "Personalized Message" ;    

        echo("<title>$Title</title>") ;
    ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body { 
            display: flex ; 
            align-items: center ; 
            flex-direction: column ;

        }

        .content-cont { 
            height: 50vh ;
        }

        p { 
            color: blue ; 
            font-weight: bold ; 
            font-size: 1.5em ;
            display: none;
        }
        input { 
            width: 60% ;
            border-radius: 10px ;
            border: solid 1px #e5e5e5 ;
        }
    </style>
</head>
<body>
    <div class="content-cont container text-center pt-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-4"><?php echo $Heading ?></h1>
        <input type="text" placeholder="Enter your name" class="p-2 mb-3" id="input-el"> 
        <button class="btn btn-primary mb-4" id="btn-el" onclick="greetUser()">Display</button>
        <p id="parag-el">Hello, <span id="span-el">Liliput</span>!</p>
    </div>
    <div class="content-cont container">
        <h2>Technologies Used</h2> 

        <table class="table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>Technologies Used</th>
                    <th>Description</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>HTML</td>
                    <td>HTML was used to construct the structure of the website</td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td>CSS was used to style the alignments according to the requirements</td>
                </tr>
                <tr>
                    <td>JavaScript</td>
                    <td>JavaScript was used for the greet user functionality</td>
                </tr>
                <tr>
                    <td>PHP</td>
                    <td>PHP was used for the title and the heading of the website</td>
                </tr>
                <tr>
                    <td>Bootstrap</td>
                    <td>Bootstrap was used to shorten CSS code through classes</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<script>
    var inputEl = document.getElementById("input-el") ; 
    var btnEl = document.getElementById("btn-el") ; 
    var paragEl = document.getElementById("parag-el") ; 
    var spanEl = document.getElementById("span-el") ; 

    function greetUser(){ 
        spanEl.textContent = inputEl.value ; 
        btnEl.style.display = "none" ; 
        paragEl.style.display = "block" ;
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>