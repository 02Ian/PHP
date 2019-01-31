<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>

             <form action= "get_user_input.php" method="get">
                Name: <input type="text" name="name">
                AGE : <input type="number" name="age">
                <input type="submit" value="SUBMIT">
             </form>
               <br>
                    YOUR NAME IS &nbsp <?php  echo $_GET["name"];  ?>
               <br>
                    YOUR AGE IS &nbsp <?php  echo $_GET["age"];  ?>
#***********************************************************************************************************#
 To take a character in lower case and converting it into uppercase then displaying it to the get_user_input
#***********************************************************************************************************#
                <?php
                $cal = "calculator";

                $up=strtoUpper($cal);
                echo "<h1>$up</h1>";
                ?>
        </body>
</html>
