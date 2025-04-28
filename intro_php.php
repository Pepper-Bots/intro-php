<!-- Mettre PHP avant HTML -->
<?php
    $test = "Bonjour";
    $test2 = "tout le monde";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet1</title>
</head>
<!-- On intègre le moins de php possible dans le html, on met tout en haut -->
<body>
    <h1><?php echo "Hello World !"; ?></h1>
    <h1><?= "Hello World ! Méthode raccourcie"; ?></h1>
    <?= "<h1> Hello World! Autre méthode</h1>" ; ?>

    <!-- Rappel de la variable $test -->
    <h1><?php echo $test ; ?></h1> 

    <!-- Avec méthode raccourcie -->
    <h1><?= $test ; ?></h1> 

    <!-- Avec concaténation -->
    <h1><?= $test.$test ; ?></h1> 

    <h1><?= $test.$test2 ; ?></h1> 

    <!-- En concaténant un espace (chaine de caractère) -->
    <h1><?= $test." ".$test2 ; ?></h1> 

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, asperiores?</p>

    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
<!-- Jusqu'à 10 -->
        <li>10</li>
    </ul>

    <!--  version boucle avec php -->
    <ul>
        <?php for ($i = 1; $i<=10; $i ++){
            echo "<li>".$i."</li>";
        }?>
    </ul>

    <ul>
        <?php for ($i = 1; $i<=10; $i ++){
            if ($i % 2 == 0) {?>
                <li><?=$i;?></li>
            <?php }
        }?>
    </ul>
</body>
</html>
