<?php
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> MinnHook Submit </title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <main>
        <!----Submit Section------------------------>
            <section id="button">
                 <h2> You have submited!</h2>
                 <p class="para"> You will receive an email from MinnHook.</p>
                 <form class="form" action="submit.php" method="post">
                    <a href="index.php"><input type="button" name="backbutton" value=" Go Back"> </a>
                 </form>
            </section>  
        </main>
    </body>
</html>