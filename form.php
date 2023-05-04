<?php

include 'weatherApp.php';
// if (isset($_POST['submit'])) {
//     header('location:home.php');
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather condition</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">

        <form action="" method="post" enctype="multipart/form-data">
            <h3>Select a country to get the weather</h3>
            <br><br>
            <?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '<div class="message">' . $message . '</div>';
    }
}

?>

            <form class="dropdown-group">
                <select name="country" id="country">
                    <option value="" selected="selected">-- Select Country --</option>

                    <option value="ex Palestine">ex Palestine</option>
                    <option value="Jordan">Jordan</option>
                    <option value="France">France</option>
                    <option value="Morocco">Morocco</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <input type="submit" name="submit" value="submit" class="btn">

                    <br> <br>




                    <?php

echo "<br>";
if (isset($weather)) {
    echo '<div class="weather">' . $weather . '</div>';
}
?>


            </form>


    </div>

</body>

</html>