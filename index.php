<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head>
<body>
    

<?php 

    $text = 'Benvenuti nel mondo di PHP';
    $text_lenght = strlen($text);
    $badword = $_GET['badword'];
    $replaced = str_replace($badword, '***', $text);

    if(($badword == undefined)) {
        echo 'Inserire un valore valido';
    }
?>

<h2> <?php echo $replaced ?> </h2>

<h3> La scritta qui sopra ha <?php echo $text_lenght ?> caratteri</h3>



</body>
</html>