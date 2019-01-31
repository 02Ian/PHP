<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
          <?php
              $friends = array("MOHIT","NIKET","NEHAL","HARSHALA");
    #ARRAY                        0       1       2         3
              echo $friends[3];
              # THE below form will return the entered student grade
                  ?>

                  <form action= "array.php" method="post">
                      <input type="text" name="student">
                      <input type="Submit">
                  </form>
              <?php
                  $grad = array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
                  echo $grad[$_POST["student"]];
                  #we cannot use this when the key name is same;
               ?>

               <?php

                ?>
        </body>

</html>
