<?php
    include "./database.class.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<?php
    if(!empty($_POST)){

        $db = new db();
        $conn = $db->conn();

        $sql = "INSERT INTO usuario (nome,cpf,telefone,email)VALUES (?,?,?,?)";

        $st = $conn->prepare(query: $sql);
        $st->execute([
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['telefone'],
            $_POST['email'],
        ]);

        /* mostra na URL
        echo $_GET['nome'];
        echo $_GET['email'];
        echo $_GET['telefone'];
        echo $_GET['cpf'];
        */
        /* não mostra na URL
        echo $_POST['nome'] . "br" ;
        echo $_POST['email'] . "br" ;
        echo $_POST['telefone'] . "br" ;
        echo $_POST['cpf'] . "br" ;
        */
        /* Depende do resto do codigo, so use esse */
        echo $_REQUEST['nome'] . "br" ;
        echo $_REQUEST['email'] . "br" ;
        echo $_REQUEST['telefone'] . "br" ;
        echo $_REQUEST['cpf'] . "br" ;
    }

?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
        <h3>Formulario Usuario</h3>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label form="" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label form="" class="form-label">email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label form="" class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label form="" class="form-label">telefone</label>
                        <input type="text" name="telefone" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-4">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="UsuarioList.php" class="btn btn-secondary">Listagem</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>