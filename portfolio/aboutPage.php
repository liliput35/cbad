<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            $Title = "About"
        ?>
        <title><?php echo $Title ?></title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>


    <body>
        <div class="row">
            <?php include('menu.php') ?>
            <?php $Heading = "ABOUT ME" ?>

            <div class="main-about-section col-sm-9">

                <div class="about-page-text">
                    <h2><?php echo $Heading ?></h2>

                    <img src="img/ciocon.jpg" alt="" class="object-fit-cover my-3 rounded-3">

                    <p class="about-page-parag">Hi, my name is <span>Lorenz Nicolas Ciocon</span>. I'm currently in third year college studying for a Computer Science degree in Bacolod City, Philippines. I started learning frontend development by myself with the help of youtube and online courses such as the Javascript and React courses on Scrimba. I've also gained experience in C++ and Java Object Oriented Programming through school by making various projects such as 2D games, and other GUI based systems.</p>


                    <div class="about-skills row ">
                        <div class="about-skill col-sm-6">
                            <h4>Frontend Development</h4>
                            <p>Creation of functional websites using React Javascript. Completed a 5-hour course on scrimba.com. I know how to use hooks such as useState and useEffect, as well as React Router.</p>
                        </div>
                        <div class="about-skill col-sm-6">
                            <h4>Game Development</h4>
                            <p>I know how to develop 2D Games through Unity Engine and C# programming. I've already developed a 2D rhythm based platformer together with my team.</p>
                        </div>
                    </div>

                    <div class="about-info" >
                        <div class="credentials">
                            <div class="">
                                <h5>Position</h5>
                                <p>Frontend Developer</p>
                            </div>

                            <div>
                                <h5>Company</h5>
                                <p>Freelance</p>
                            </div>

                            <div>
                                <h5>Experience</h5>
                                <p>3+ years</p>
                            </div>

                            <div>
                                <h5>Technologies</h5>
                                <p>React, CSS, Java, Unity</p>
                            </div>
                            
                        </div>

                        <div class="contact">
                            <h5>Email</h5>
                            <p class="email">cioconlorenz@gmail.com</p>

                            <h5>Location</h5>
                            <p>Bacolod City, Philippines</p>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        

    </body>

    <?php include('footer.php') ?>

<?php include('main_footer.php') ?>