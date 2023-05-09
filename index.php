<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <pre>
    <?php
    require_once "animal.php";
    require_once "ave.php";
    require_once "mamifero.php";
    require_once "peixe.php";
    require_once "reptil.php";
    require_once "cao.php";
    require_once "canguru.php";
    require_once "cobra.php";
    require_once "pastor_alemao.php";

    $a1=new Ave();
    $a1->setMembros(4);
    $a1->setPeso("3.5kg");
    $a1->setIdade("2 anos");
    $a1->setCor_pena("branca");
    $a1->alimentar();
    echo"<br>";
    $a1->locomover();
    echo "<br>";
    $a1->emitirSom();
    print_r($a1);

    $m1=new Mamifero();
    $m1->setCor_pelo("preto");
    $m1->setIdade("5 anos");
    $m1->setMembros(4);
    $m1->setPeso("15kg");
    $m1->alimentar();
    print_r($m1);

    $r1=new Reptil();
    $r1->setPeso("4kg");
    $r1->setMembros(2);
    $r1->setIdade("2 anos");
    $r1->locomover();
    echo "<br>";
    $r1->alimentar();
    print_r($r1);

    $c1=new Cobra();
    $c1->setPeso("2kg");
    $c1->setIdade("6 meses");
    $c1->setMembros(1);
    $c1->alimentar();
    print_r($c1);

    $p=new Pastor_alemao();
    $p->setNome("Joly");
    $p->setIdade("10 anos");
    $p->setCor_pelo("castanho");
    $p->setMembros(3);
    $p->setNose("Black");
    $p->setPeso("18kg");
    $p->locomover();
    print_r($p);
    ?>
    </pre>
    
</body>
</html>