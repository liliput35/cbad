<?php include('main_header.php') ?>
       <?php
            $Message = "Enter your name" ; 
            $ButtonText = "Greet Me!" ; 
        ?>

        <div class="container">
            <input id="input-el" type="text" placeholder="<?php echo "$Message" ?>">
            <button onclick="greetPerson()" id="btn-el"><?php echo "$ButtonText"?></button>
            <p style="display: none ;" id="parag-el">Hello Bossing Kamusta ka</p>
        </div>
<?php include('main_footer.php') ?>