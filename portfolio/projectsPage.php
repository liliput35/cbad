<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            $Title = "Projects"
        ?>
        <title><?php echo $Title ?></title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>


    <body>
        <div class="row">
            <?php include('menu.php') ?>
            <?php $Heading = "My Projects" ; ?>

            <div class="main-projects-section col-sm-9">
                <div class="projects-container row">
                    <div class="projects-text">
                        <h2><?php echo $Heading ?></h2>
                    </div>


                    <div class="projects-card-holder">

                        <div class="first-col">
                            <a href="https://github.com/liliput35/bust-a-beat">
                                <div class="project-card">
                                    <div class="proj-text">
                                        <h5>Bust-a-Beat</h5>
                                        <p>2d Rhythm Based Platformer</p>
                                        <ul class="prog-lang">
                                            <li>Unity</li>
                                            <li>C#</li>
                                        </ul>
                                    </div>

                                    <img src="img/babMockup-min.png" alt="" class="w-100">
                                </div>
                            </a>

                            <a href="https://liliput35.github.io/portfolio/">
                                <div class="project-card">
                                    <div class="proj-text">
                                        <h5>Portfolio Website</h5>
                                        <p>Fully Responsive Showcase Website with Animations</p>
                                        <ul class="prog-lang">
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>Javascript</li>
                                        </ul>
                                    </div>

                                    <img src="img/websiteMockup.png" alt="" class="w-100">
                                </div>
                            </a> 
                        </div>

                        
                        
                        <div class="second-col">
                        
                            <a href="https://github.com/liliput35/Toggl">
                                <div class="project-card">
                                    <div class="proj-text">
                                        <h5>Toggl</h5>
                                        <p>Task Tracking Application</p>
                                        <ul class="prog-lang">
                                            <li>Java</li>
                                        </ul>
                                    </div>

                                    <img src="img/togglMockup.png" alt="" class="w-100">
                                </div>
                            </a>
                            

                            <a href="https://github.com/liliput35/watchlist">
                                <div class="project-card">
                                    <div class="proj-text">
                                        <h5>Watchlist</h5>
                                        <p>Movie Logging Web App</p>
                                        <ul class="prog-lang">
                                            <li>React</li>
                                            <li>CSS</li>
                                            <li>Javascript</li>
                                        </ul>
                                    </div>

                                    <img src="img/watchlistMockup.png" alt="" class="w-100">
                                </div>
                            </a> 

                            <a href="https://liliput35.github.io/loficlockv2/">
                                <div class="project-card">
                                    <div class="proj-text">
                                        <h5>Lofi Clock</h5>
                                        <p>Clock Website With Lofi Background</p>
                                        <ul class="prog-lang">
                                            <li>HTML</li>
                                            <li>CSS</li>
                                            <li>Javascript</li>
                                        </ul>
                                    </div>

                                    <img src="img/lofimockup.png" alt="" class="w-100">
                                </div>
                            </a>

                        </div>                    
                        
                    </div>
                </div>
            </div>
        </div>
        

    </body>

    <?php include('footer.php') ?>

<?php include('main_footer.php') ?>