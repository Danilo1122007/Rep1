<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $nome = "Danilo";
        $idade = "17";
        echo "Ola mundo PHP, $nome <br>";
        if($idade < 18){
            echo " é de menor";
        } 
        else {
            echo " é de maior";
        }

        echo "<br>";
        
        $notas = [7, 6, 5, 8, 9];
        for ($i = 0; $i < count($notas); $i++) {
            if($notas[$i] >= 6){echo $notas[$i];}
        }

        echo "<br>";

        $alunos = ["Marcos ", "Juan ", "Bel ", "Judy ", "Carl "];
        for ($i = 0; $i < count($alunos); $i++) {
            if($alunos[$i] == 0){echo $alunos[$i];}
        }
    ?>

</body>
</html>