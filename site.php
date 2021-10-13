<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  echo ("<h1>Hello there,");
  echo("<h2>My name is Roxana Nejat. Welcome to my Weight Loss and Body Mass Index (BMI) website.");
  ?>
  <form action='site.php' method='get'>
       Input your name please: <input type='text' name='name'>
       <input type='submit'>
 </form>
<br>
</body>
  <?php
  echo ("Dear ");
  echo $_GET['name'];
  echo ("Your BMI is based on your height and weight. It's one way to see if you're at a healthy weight.")
  ?>
  <form action='site.php' method='get'>
        Input your weight in kg please: <input type='number' name='weight'>
       <br>
       Input your height in cm please: <input type='number' name='height'>
      <br>
       <input type='submit'>
</form>
<?php
    $a= $_GET['weight'];
    $b= $_GET['height']*$_GET['height'];
    $c= $a/$b;
    $d= $c * 10000;
    echo "your BMI is $d ";
    if ($d < "19") {
      echo "you are underweight!";
    }
    elseif ("19"< $d and $d < "25") {
      echo "you have a normal weight!";
    }

    else {
  echo "you have are overweight!";
}

    ?>






<br>

  </body>
</html>
