<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <?php
                function sayhi($name, $age){
                  echo "hello  $name  your age is $age <br> <hr>"  ;
                }

                sayhi("MOHIT", 21);
                sayhi("HARSHALA", 17);
                sayhi("NIKET", 21);
                sayhi("NEHAL", 24);
             ?>

             <?php
                  function cube($num){
                    return   $num * $num * $num;
                  }

                  $cuberesult = cube(4);
                  echo $cuberesult;

              ?>

        </body>
</html>
