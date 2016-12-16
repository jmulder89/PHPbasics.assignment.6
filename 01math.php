<?php
    //check to see if field is set
    if(isset($_POST['radius'])){
        //calculation
        $output = 2 *$_POST['radius'] * pi();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body{
                font-family: sans-serif;
        }
    </style>
</head>
<body>
    <form action="01math.php" method="post">
        <b>Voer de straal van de cirkel  in:</b>
        <br/>
        <input type="text" name="radius" value="
                   <?php
                        //remebers the user's input.
                        if(isset($_POST['radius'])) { echo $_POST['radius']; }
                    ?>
        "/>
        <br/>
        <input type="submit" name="button" value="Submit">
    </form>
<?php
    echo '<br/>'.$output;
?>
</body>
</html>

