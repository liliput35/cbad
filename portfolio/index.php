<?php include('main_header.php') ?>

<body>
    <div class="row">
        <?php include('menu.php') ?>


        <div class="content-container col-sm-9 pt-5 px-0">
            <div class="d-flex align-items-end vh-50">
                <h1 class="fw-bold w-100 main-hero-heading">lorenz ciocon</h1>
            </div>

            <div class="container mx-auto">
                <p class="mt-5 hero-parag">a 20-year-old computer science student from University of St. Lasalle interested in front-end development</p>
                <button class="mt-5 px-3 hero-btn">MORE</button>
                <button class="mt-5 px-3 hero-btn recent-btn">RECENT WORK</button>
            </div>

            <?php include('projects.php') ?>
        </div>
       
    </div>
    

</body>


<?php include('main_footer.php') ?>