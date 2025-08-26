<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorenz Ciocon</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * { 
            margin: 0 ; 
            padding: 0 ;
        }

        .container { 
            width: 90% ; 
            margin: 0 auto ;
        }

        body { 
            font-family: 'Poppins', sans-serif ;
            overflow-x: hidden;
        }

        ul { 
            padding: 0 ;
        }

        li { 
            list-style: none;
        }

        a { 
            text-decoration: none ;
            color: black ;
        }

        .vh-50 {
            height: 50vh;
        }

        .main-hero-heading { 
            font-size: 10vw;
            margin-left: 1rem ;
        }

        .hero-parag { 
            width: 75% ;
        }

        .hero-btn { 
            text-align: left ;
            background-color: #fff ;
            border: solid 1px black ;
            width: 100px;
        }

        .skill-text { 
            font-size: smaller ;
        }

        .about-heading { 
            font-size: 3em ;
        }

        .about-text { 
            border-top: solid 1px black ;
        }

        .projects-section h1 { 
            font-size: 4em ;
        }

        .projects-section a { 
            text-decoration: underline ;
        }

        .projects-section img { 
            width: 100%;
            border-bottom: solid 3px black ;
            padding-bottom: 10px ;
        }

        .proj-lang { 
            font-size: 1em ;
            font-weight: 500 ; 
            color: #8b8b8bff ;
        } 

        .sidebar-container { 
            background-color: #f2f2f2 ; 
            padding-right: 0 ;
        }

        .bot-section { 
            display: none;
        } 

        .top-section ul { 
            display: flex ; 
            width: 50vw;
            justify-content: space-between ;
            align-items: center ;
        }


        @media only screen and (min-width: 576px) { 
            .sidebar-container .container { 
                width: auto ;
                margin: auto ;
            }

            .sidebar-content-cont { 
                height: 80vh;
                margin-top: 5rem;
                margin-left: 3rem ;
            }

            .bot-section { 
                display: block ;
            }

            .top-section ul { 
                display: block ;
                width: auto;
            }
        }

        @media only screen and (min-width: 768px) { 
            .hero-parag { 
                width: 25% ;
            }

            .projects-section { 
                height: 100vh ;
            }

            .sidebar-content-cont { 
                position: fixed;

            }
        }
    </style>
</head>