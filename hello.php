<html>
    <head>
        
        <?php 
            $Firstname = "Lorenz" ; 
            $Lastname = "Ciocon" ; 
            $Birthmonth = "November" ; 
            $Birthday = 14 ; 
            $Birthyear = 2004 ; 
            $Title = "About Me" ; 

            $Header = "About me page" ;

            echo "<title>$Title</title>" ;
        ?>
        
        <link rel="stylesheet" href="index.css">
        
    </head>
    <body>
        
        
        <?php 
            echo "<h1>$Header</h1> " ; 
            echo "Hi my name is $Firstname $Lastname <br>" ; 
            echo "I was born on $Birthmonth $Birthday, $Birthyear" ;
        ?>
        <p>
            Hi my name is Lorenz Ciocon. I'm 20 years old and I live in Bacolod City. I'm currently a 3rd year computer science student. So far into my college experience, I've learned about computer programming using C++ and Java, game development through Unity and C#, and database management using MySql. When I'm not in school, I like to play basketball, watch movies, and read comics.
        </p>
        <button class='btn'>Submit</button>

        <h3>My Hobbies</h3>
        <ul> 
            <li><a href="basketball.php">Playing basketball</a></li>
            <li><a href="movies.php">Watching movies</a></li>
            <li><a href="comics.php">Reading comics</a></li>
            
        </ul>

        <!--<img src="images.jpeg" alt=""> -->

        
    </body>
</html>

