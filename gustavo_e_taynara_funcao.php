<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 

    // Da Taynara e do Gustavo Cauê
        function Adicao($num1, $num2) {
            $resultado = $num1 + $num2;
            return $resultado;
        }

        function Subtracao($num1, $num2) {
            $resultado = $num1 - $num2;
            return $resultado;
        }

        function Multiplicar($num1, $num2) {
            $resultado = $num1 * $num2;
            return $resultado;
        }

        function Divisao($num1, $num2) {
            $resultado = $num1 * $num2;
            return $resultado;
        }

        $sinal = "-";

        switch ($sinal) {
            case "+":
                $res = Adicao(20, 2);
                echo($res);
            break;

            case "-":
                $res = Subtracao(30, 15);
                echo($res);
            break;
            
            case "*":
                $res = Multiplicar(10, 100);
                echo($res);
            break;

            case "/":
                $res =  Divisao(40, 4);
                echo($res);
            break;

            default:
                echo("Isso não existe, tente novamente :D");


        }
    ?>
</body>
</html>