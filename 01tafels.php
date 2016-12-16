<?php
    //checking if fields are set
    //put's the input into more manageable var's.
    if(isset($_POST['tableOf']) && isset($_POST['numberOfTimes'])){
        $tableOf = $_POST['tableOf'];
        $numberOfTimes = $_POST['numberOfTimes'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        /*the markup for the table and setting a font.*/
        body{
                font-family: sans-serif;
        }
        table{
            border-collapse: collapse;
            margin: 4px;
            margin-top: 10px;
        }
        td, tr{
            border: 2px solid black;
            padding: 6px;
            text-align: right;
        }
    </style>
</head>
<body>
    <form action="01tafels.php" method="post">
        <b>Input what table of multiplication you would like to see.</b>
        <br/>
        <input type="text" name="tableOf" value="" />
        <br/><br/>
        <b>Input the number of times you want to multiply.</b>
        <br/>
        <input type="text" name="numberOfTimes" value="" />
        <br/><br/>
        <input type="submit" name="button" value="Submit"  />
    </form>
    <table>
        <?php
            //declare'a a running number calculates the multiplacation and draws the table.
            $runningNum = 1;
            while($runningNum < $numberOfTimes + 1){
                echo '<tr><td>'."$runningNum x $tableOf =".'</td>'.'<td>'.$runningNum * $tableOf.'</td></tr>';
                $runningNum++;
            }
        ?>
    </table>
</body>
</html>

