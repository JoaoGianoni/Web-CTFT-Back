<?php
session_start();

$logado = isset($_SESSION['id']);

if (isset($_POST['submit'])) {
    //print_r('name: ' . $_POST['name']);
    //print_r('<br>');
    //print_r('email: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('cpf: ' . $_POST['cpf']);
    //print_r('<br>');
    //print_r('celular: ' . $_POST['celular']);
    //print_r('<br>');
    //print_r('senha: ' . $_POST['senha']);
    //print_r('<br>');
    //print_r('objetivo: ' . $_POST['objective']);
    //print_r('<br>');
    //print_r('genero: ' . $_POST['gender']);

    include_once('config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $objetivo = $_POST['objective'];
    $genero = $_POST['genero'];

    if ($logado) {
        $result = mysqli_query($conexao, "update usuarios set nome='$name',email='$email',cpf='$cpf'
            ,celular='$celular',objetivo='$objetivo',genero='$genero' where idusuarios=$_SESSION[id]");

        header('Location: ../aluno/aluno.php');
    } else {
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,cpf,celular,senha,objetivo,genero) 
            VALUES('$name','$email','$cpf','$celular','$senha','$objetivo','$genero')");

        header('Location: ../login/login.php');
    }
}
////////////////////////////////////////////////////////

// Definir variáveis do aluno com valores padrão
$aluno = array(
    'nome' => '',
    'email' => '',
    'cpf' => '',
    'celular' => '',
    'senha' => '',
    'objetivo' => '',
    'genero' => ''
);

// Verificar se há uma sessão ativa
if (isset($_SESSION['id'])) {
    $usuario_id = $_SESSION['id'];

    include_once('config.php');

    // Obter informações do usuário se a sessão estiver ativa
    $query = "SELECT * FROM usuarios WHERE idusuarios = $usuario_id";
    $resultado = mysqli_query($conexao, $query);

    if ($resultado) {
        $aluno = mysqli_fetch_assoc($resultado);
    } else {
        die('Erro na obtenção de dados do usuário: ' . mysqli_error($conexao));
    }

    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricule-se</title>
    <link rel="stylesheet" href="../estilos/mstyles.css">
    <style>
        .start-button a {
            background-color: #3498db;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            text-transform: uppercase;
            cursor: pointer;
            font-weight: 500;
            font-size: 14px;
        }

        .start-button a:hover {
            background-color: #153d8a;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="formulario.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Matricule-se</h1>
                    </div>
                    <div class="start-button">
                        <?php
                        // Se estiver logado, redireciona para aluno.php, caso contrário, para home.php
                        if ($logado) {
                            echo '<a href="../../../rascunho-ctft/docs/aluno/aluno.php">Área do Aluno</a>';
                        } else {
                            echo '<a href="../../../rascunho-ctft/docs/home.php">Início</a>';
                        }
                        ?>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" type="text" name="name" placeholder="Digite seu nome completo" required value="<?= $logado ? $aluno['nome'] : "" ?>">
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="Digite seu melhor email" required value="<?= $logado ? $aluno['email'] : "" ?>">
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="number" name="cpf" placeholder="xxx.xxx.xxx-xx" required value="<?= $logado ? $aluno['cpf'] : "" ?>">
                    </div>

                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input id="celular" type="tel" name="celular" placeholder="(xx) xxxx-xxxx" required value="<?= $logado ? $aluno['celular'] : "" ?>">
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Crie uma senha" required value="<?= $logado ? $aluno['senha'] : "" ?>">
                    </div>

                    <div class="input-box-select">
                        <label for="objective">Objetivo</label>
                        <select id="objective" type="text" name="objective" placeholder="Escolha uma" required value="<?= $logado ? $aluno['objective'] : "" ?>">
                            <option value="perder_peso">Perder Peso</option>
                            <option value="ganhar_massa_muscular">Ganhar Massa Muscular</option>
                            <option value="aumentar_resistencia">Aumentar Resistência</option>
                            <option value="aumentar_forca">Aumentar Força</option>
                            <option value="melhorar_condicionamento">Melhorar o Condicionamento Físico</option>
                            <option value="definir_musculos">Definir Músculos</option>
                            <option value="melhorar_postura">Melhorar a Postura</option>
                            <option value="aliviar_o_estresse">Aliviar o Estresse</option>
                            <option value="aumentar_a_flexibilidade">Aumentar a Flexibilidade</option>
                        </select>
                    </div>
                </div>

                <div class="gender-group">
                    <div class="gender-input">
                        <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($logado && $aluno['genero'] == 'feminino') ? 'checked' : ''; ?>>
                        <label for="feminino">Feminino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($logado && $aluno['genero'] == 'masculino') ? 'checked' : ''; ?>>
                        <label for="masculino">Masculino</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="outros" name="genero" value="outros" <?php echo ($logado && $aluno['genero'] == 'outros') ? 'checked' : ''; ?>>
                        <label for="outros">Outros</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="none" name="genero" value="prefiro_nao_dizer" <?php echo ($logado && $aluno['genero'] == 'prefiro_nao_dizer') ? 'checked' : ''; ?>>
                        <label for="none">Prefiro não dizer</label>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" id="submit" value="CADASTRAR">
                </div>
            </form>
        </div>
    </div>
</body>

</html>