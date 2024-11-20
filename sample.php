<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample PHP</title>
</head>
<body>
        <h1> Sample PHP</h1>
        <p>Converting LA1 (pyton file) to PHP (LA3)</p>
        <?php
            echo "Hello World <br>";

            $age = 20;
            $fullname = "Vinico Winn A. Sumbad <br>";

            echo($age . "<br>" . $fullname . "<br>");

            // This is a Comment

            $x = 4;         // x is a type of int
            $x = "Sally <br>";   // x now is type of str
            echo($x);

            // TYPE CASTING
            $x = strval(3);  // x will be "3"
            $y = intval(3);  // y wil be 3
            $z = floatval(3);// z will be 3.0

            $x = 3;
            $y = 3;
            $z = 3;

            echo(gettype($x). "<br>");
            echo(gettype($y). "<br>");
            echo(gettype($z). "<br>");

            // The output is Integer or in shor Int

            // Single or Double
            // Case Sensitive same w/ python

            $a = "<br>Vinico";
            $A = "<br> Sumbad";

            echo($a);
            echo($A);

            //Out put will be Vinico Sumbad, because "A" will not overwrite "a", thats because Python is case sensitive
            // Same w/ python
        ?>
</body>
</html>