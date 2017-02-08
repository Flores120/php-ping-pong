<?php
    function pingPong($numbers)
    {
      $input_number = $_GET["number"];
      $number = array();

      for ($i = 1; $i <= $numbers; $i++) {
        if ($i % 15 === 0) {
          $array_push($number, "ping-pong");
        } elseif
          ($i % 5 === 0) {
            $array_push($number, "pong");
        } elseif
          ($i % 3 === 0) {
            $array_push($number, "ping");
        } else {
          $array_push($number, $i);
        }
        return $number;
      }
    }
 ?>

 <!DOCTYPE html>
 <html>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
     <title>Ping Pong</title>
   </head>
   <body>
      <div class="container">
        <?php
          $numbers = pingPong($numbers);
          echo $numbers;
        ?>
      </div>
   </body>
 </html>
