<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../login/login.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../docs/estilos/aluno.css">
    <style>
        .box a{
            width: 100%;
            margin-top: 1rem;
            border: none;
            background-color: #00aeef;
            padding: 0.70rem;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
            font-size: 0.93rem;
            font-weight: 500;
            color: #fff;
            display: block;
        }

        .box a:hover{
            background-color: #153d8a;
        }

        .box-logout a{
            width: 100%;
            margin-top: 1rem;
            border: none;
            background-color: red;
            padding: 0.70rem;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 0.93rem;
            font-weight: 500;
            color: #fff;
            display: block
        }

        .box-logout a:hover{
            background-color: rgb(119, 0, 0);

        }

    </style>
</head>

<body>
    <div class="container">
        <h1>ALUNO</h1>
        <div class="image"><img src="../img/usuário.png" alt=""></div>
        <?php
            echo "<h1>$logado</h1>";
        ?>

        <div class="card-container">
            <div class="box">
                <button onclick="showA()">Avaliação</button>
            </div>

            <div class="box">
                <button onclick="showD()">Desempenho</button>
            </div>

            <div class="box">
                <button onclick="showB()">Treino do dia</button>
            </div>

            <div class="box">
                <a href="/web-ctft-back/docs/matricule-se/formulario.php">Alterar Informações</a>
            </div>

            <div class="box-logout">
                <a href="sair.php">Sair</a>
            </div>
        </div>

        <div class="a-container" id="a-container">
            <form action="">
                <table>
                    <tr>
                        <td>200M Corrida c/bag - Tempo em segundos:</td>
                        <td><input title="tempo" type="text" name="tempo" id="tempo" required placeholder="T"></td>
                    </tr>
                    <tr>
                        <td>20 Black Squat c/bag - Peso e Repetições:</td>
                        <td><input title="peso" type="text" name="segundo_p" id="segundo_p" required placeholder="P">
                        </td>
                        <td><input title="repeticao" type="text" name="segundo_r" required placeholder="R"></td>
                    </tr>
                    <tr>
                        <td>15 Butterfly sit up c/ - Peso e Repetições:</td>
                        <td><input title="peso" type="text" name="primeiro_p" id="primeiro_p" required placeholder="p">
                        </td>
                        <td><input title="repeticao" type="text" name="primeiro_r" required placeholder="R"></td>
                    </tr>
                    <tr>
                        <td>10 Push Press c/Kettlebell - Peso e Repetições:</td>
                        <td><input title="terceiro_p" type="text" name="terceiro_p" id="terceiro_p" required
                                placeholder="P">
                        </td>
                        <td><input title="terceiro_r" type="text" name="terceiro_r" required placeholder="R"></td>
                    </tr>
                </table>


                <div class="submit">
                    <input type="submit" value="Registrar">
                </div>
            </form>

            <div class="back-to-buttons">
                <button onclick="backToButtons()">Voltar</button>
            </div>
        </div>

        <div class="desempenho" id="desempenho">
            <H2>Relatório Mensal</H2>
            <canvas id="myChart" width="400" height="400"></canvas>
            <!-- <img src="/docs/img/4435924.png" alt=""> -->

            <div class="back-to-buttons">
                <button onclick="backToButtons()">Voltar</button>
            </div>
        </div>

        <div class="b-container" id="b-container">
            <table>
                <textarea class="expanding-textarea" id="aluno-textarea" rows="4"
                    placeholder="Treino do professor aparecerá aqui..." readonly></textarea>
            </table>

            <div class="back-to-buttons">
                <button onclick="backToButtons()">Voltar</button>
            </div>

        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>