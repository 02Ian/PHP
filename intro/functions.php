<!DOCTYPE html>
<html>
  <head>
    <title>php learn</title>
  </head>
  <body>
    <?php
        $phrase = "Sky never ends";
        $age = 21;
        $CGPA = 6.85;
        $isMale = true;

      #1
        echo strtolower($phrase);
        echo "<br>";
      #2
        echo strtoupper($phrase);
        echo "<br>";
      #3
        echo strlen($phrase);
        echo "<br>";
      #4
        echo $phrase[0];
        echo "<br>";
      #5
        echo "MOHIT"[0];
        echo "<br>";
      #6
        $phrase[0] = "M";
        echo "$phrase";
      #7 String replace
        echo "<br>";
        echo str_replace("Mky","World",$phrase);
      #8sub-string
        echo "<br>";
        echo substr($phrase,5,10);


     ?>


  </body>
</html>
