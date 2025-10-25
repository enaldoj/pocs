<?php
$pageTitle = "Reino dos Tabuleiros: Xadrez e Dama";
$welcomeMessage = "Bem vindas Enanda e Emilliana ao mundo dos jogos de estratégia clássicos!";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            text-align: center;
        }
        .header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }
        .game-section {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            margin-top: 30px;
        }
        .game-card {
            flex: 1;
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .game-card:hover {
            transform: translateY(-5px);
        }
        .chess {
            background-color: #e74c3c; /* Reddish for intensity */
            color: white;
        }
        .checkers {
            background-color: #2ecc71; /* Greenish for calm */
            color: white;
        }
        .game-card h2 {
            margin-top: 0;
            font-size: 1.8em;
        }
        .game-card p {
            font-size: 1.1em;
            line-height: 1.6;
        }
        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #bdc3c7;
            color: #333;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><?php echo $pageTitle; ?></h1>
        <p><?php echo $welcomeMessage; ?></p>
    </div>

    <div class="container">
        <h2>A Arte da Estratégia</h2>

        <div class="game-section">
            <div class="game-card chess">
                <h2>♟️ Xadrez (Chess)</h2>
                <p>O jogo real. Uma batalha de intelecto e tática onde cada peça tem um movimento único e o objetivo é dar xeque-mate no rei adversário. É o auge da estratégia de tabuleiro.</p>
                <p><strong>Peças:</strong> 16 por jogador (Rei, Rainha, Torres, Bispos, Cavalos, Peões).</p>
                <p><strong>Objetivo:</strong> Capturar o Rei (Xeque-mate).</p>
            </div>

            <div class="game-card checkers">
                <h2>🔴 Dama (Checkers)</h2>
                <p>Um clássico atemporal de movimentos simples, mas com profundidade tática surpreendente. O objetivo é capturar todas as peças do oponente ou bloqueá-las para que não possam se mover.</p>
                <p><strong>Peças:</strong> 12 por jogador (Peões e Damas).</p>
                <p><strong>Objetivo:</strong> Capturar ou imobilizar todas as peças do oponente.</p>
            </div>
        </div>
        
        <p style="margin-top: 40px; font-style: italic;">
            Ambos os jogos exigem concentração, visão de futuro e a capacidade de antecipar os movimentos do adversário.
        </p>
    </div>

    <div class="footer">
        <p>&copy; <?php echo date("Y"); ?> Jogos de Tabuleiro Clássicos. Desenvolvido com PHP e Docker.</p>
    </div>
</body>
</html>
