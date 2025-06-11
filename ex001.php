<html>
<head>
    <title>Exemplo com PHP</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Dia e Noite</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        $hoje = date("d/m/Y");
        $agora = date("H:i");
        $hora = date("H");

        // Exibe imagem de acordo com o horário
        if ($hora < 6 or $hora > 18){
            echo "<img src='lua.png'>";
        } else {
            echo "<img src='sol.png'>";
        }

        // Exibe a mensagem de acordo com a faixa de horário
        if ($hora >= 4 && $hora <= 12){
            echo "<p>Bom dia</p>";
        } elseif ($hora >= 13 && $hora <= 18){
            echo "<p>Boa tarde</p>";
        } else {
            echo "<p>Boa noite</p>";
        }

        echo "Hoje é dia ".$hoje." e agora são ".$agora." horas.";
    ?>
</body>
</html>
