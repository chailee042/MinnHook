<?php
    require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title> MinnHook </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <!-- Header--------------------------------->
        <header>
            <nav>
                <a href="#minnhook">MinnHook</a>
                <a href="#about">About</a>
                <a href="#sign-up">Sign Up</a>
            </nav>
        </header>
        <!---- Body---------------------------------->
        <main>
        <!---- MinnHook Section------------------------>
            <section id="minnhook">
                <div class="hook-img">
                    <h1>MinnHook</h1>
                    <p class="para-hook"> 
                        <br>Win free fishing gears.</br>
                        <br>A chance to win a NEW BOAT!</br>
                        <br> Try new rods, reels, baits, and more!</br>
                        <br>Sign-up for more information to win.</br>
                    </p>
                </div>
            </section>
        <!---- About Section----------------------->
            <section id="about">
                <div class="para">
                    <h2> About </h2>
                    <img src="assets/images/lake.jpg" class="lake-img" alt="Lake">
                    <p> 
                        <br>MinnHook was found in 2019. </br>
                        <br>We are a fishing organization based in Minnesota. </br>
                        <br>We foucs on interaction with the Minnesota community and neighbor states. </br>
                        <br>We are Sponsered from local companies and all over United States. </br>
                    </p>
                    <p> 
                        <br>MinnHook creates one the largest tournaments within the mid-west region.</br>
                        <br>Join the local tournaments under MinnHook organization.</br>
                        <br>Sign up for more information about tournaments and a chance to win prizes!</br>
                    </p>
                </div>
            </section>
        <!----Sign-up Section------------------------>
            <section id="sign-up">
                 <h2>Sign up Below!</h2>
                 <img src="assets/images/gear.jpg" class="gear-img" alt="Fishing Gear">
                 <p class="para"> For more information or chance to win prizes, fill out the form down below!!!</p>
                 <form class="form" action="index.php" method="post">
                     <label for="fname"> First Name </label>
                     <input type="text" id="fname" name="first_name" value="" placeholder="First Name" required>
                     <label for="lname"> Last Name </label> 
                     <input type="text" id="lname" name="last_name" value="" placeholder="Last Name" required>
                     <label for="email"> Email </label>
                     <input type="text" id="email" name="email" value="" placeholder="Email" required>
                     <a href="submit.php"> <input type="submit" name="submit_btn" vaule="submit"> </a>
                 </form>
        <!----PHP/ Database------------------------>
                 <?php
                    if(isset($_POST['submit_btn']))
                    {
                        //echo '<script type="text/javascript"> alert("Submit button clicked") </script>';
                        $firstname = $_POST['first_name'];
                        $lastname = $_POST['last_name'];
                        $email = $_POST['email'];
                        {
                            $query= "SELECT * FROM user WHERE first_name= '$firstname'";
                            $query_run= mysqli_query($con,$query);

                            {
                                $query= "INSERT INTO user VALUES('$firstname','$lastname','$email')";
                                $query_run = mysqli_query($con,$query);
                            }
                        }
                        header("Location:submit.php");
                        die();
                    }
                 ?> 
            </section>     
        </main>
        <!---- Footer Section------------------------>
        <footer>
            <a href="#"> <i class="fas fa-arrow-up"></i> </a>
            <p> &copy; 2019 MinnHook </p>
            <p>
                <br>Disclaimer: You may not win the prizes. For more information
                sign up the form above.</br>
                <br>Sponsered by fishing organizations.</br>
            </p>
        </footer>
    </body>
</html>