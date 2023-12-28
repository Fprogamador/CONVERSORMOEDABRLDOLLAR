<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <h1>Analisador de Numero Real</h1>
        <?php
            $num = $_REQUEST["n"] ?? 0;

            echo "<p>Analisando o número <strong>".number_format($num,3,",",".") ."</strong> informado pelo usuário: </p>";

            $int = (int)$num;
            $frac = $num - $int;
            $multi1 = $num * 2;
            $divi = $num / 2;
            $poten = $num **2;
            echo "<ul><li>A parte inteira do número é <strong>".number_format($int,0,",",".")."</strong> </li>";
            echo "<li>A parte fracionária do número é <strong>".number_format($frac,3,",",".")."</strong> </li>";
            echo "<li> Multiplicando por 2 fica <strong>".number_format($multi1,3,",",".")."</strong> </li>";
            echo "<li> Dividindo por 2 fica <strong>".number_format($divi,3,",",".")."</strong> </li>";
            echo "<li> Ao quadrado fica <strong>".number_format($poten,3,",",".")."</strong> </ul></li>";

            // Loop para multiplicar por 10
            echo "<p>Multiplicando o número original por 10:</p>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $multiplicado = $num * $i;
                echo "<li><strong>".number_format($multiplicado,3,",",".")."</strong></li>";
            }
            echo "</ul>";

            // Loop para dividir por 10
            echo "<p>Dividindo o número original por 10:</p>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $dividido = $num / $i;
                echo "<li><strong>".number_format($dividido,3,",",".")."</strong></li>";
            }
            echo "</ul>";

            // Loop para potencia
            echo "<p>Aumentando a potência do número original:</p>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $potencia = $num ** $i;
                echo "<li><strong>".number_format($potencia,3,",",".")."</strong></li>";
            }
            echo "</ul>";

        ?>
        <button onclick = "javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>