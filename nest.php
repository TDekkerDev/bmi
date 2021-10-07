<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <title>confirm.php</title>
    </head>
    <body>
    <div class="main_box">
    <h1>klop het?</h1>
    
    <?php
    
    $getal_1 = $_POST['getal_1'];
    $getal_2 = $_POST['getal_2'];
    $getal_3 = $_POST['getal_3'];
    

    $bmi = $getal_3 / $getal_2^2; 

  echo $bmi ;
echo "<br>" ;

if ($bmi <= 18.5 ) {echo "onder";
}else if( $bmi >18.5 && $bmi <=25){echo "goed";
}else if( $bmi >25   && $bmi <=27){echo "licht over";
}else if( $bmi >27   && $bmi <=30){echo "matig overgewicht";
}else if( $bmi >30   && $bmi <=40){echo "ernstig overgewicht";
}else    {echo "gevaarlijk overgewicht";}
     
     ?>
  
 </div>
    
   </body>
   </html>