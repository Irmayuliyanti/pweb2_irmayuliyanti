<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>

<?php
echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
for ($x = 2; $x <=10; $x +=2)
    echo "$x </br>";
echo "</br>Perulangan WHILE bilangan ganjil dari 1 hingga 10 </br>";
$y = 1;
while ($y <= 10) {
    echo "$y </br>";
    $y += 2;
}
echo "</br>Perulangan DO..WHILE bilangan prima kurang dari 20 </br>";
$Angka= 2;
    do {
        $isPrima = true;
        for ($i = 2; $i < $Angka; $i++) {
            if ($Angka % $i == 0) {
                $isPrima = false;
                break; 
            }
        }
        if ($isPrima) {
            echo "$Angka </br>";
        }
    
        $Angka++;
    } while ($Angka < 20);
?>
    
</body>

</html>