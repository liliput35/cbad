<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            $Title = "Lorenz Ciocon"
        ?>
        <title><?php echo $Title ?></title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>

    <body>
        <div class="row">
            <?php include('menu.php') ?>
            <?php $Heading = "lorenz ciocon" ; ?>

            <div class="content-container col-sm-9 pt-5 px-0">
                <div class="d-flex align-items-end vh-50">
                    <h1 class="fw-bold w-100 main-hero-heading"><?php echo $Heading ?></h1>
                </div>

                <div class="container mx-auto">
                    <p class="mt-5 hero-parag">a 20-year-old computer science student from University of St. Lasalle interested in front-end development</p>
                    <a href="aboutPage.php" class="mt-5 px-3 hero-btn">MORE</a>
                    <a href="#projects-section" class="mt-5 px-3 hero-btn recent-btn">RECENT WORK</a>
                </div>

                <?php include('projects.php') ?>
            </div>
        
        </div>
        

    </body>


    <?php include('footer.php') ?>
<?php include('main_footer.php') ?>