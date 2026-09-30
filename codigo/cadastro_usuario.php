<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <form action="salvar_usuario.php" method="POST">
        
        NOME
        <input type="text" name="nome"> <br><br>
        APELIDO
        <input type="text" name="apelido"> <br><br>
        EMAIL 
        <input type="text" name="email"> <br><br>
        SENHA 
        <input type="text" name="senha"> <br><br>
        FOTO
        <input type="text" name="foto"> <br><br>

        <input type="submit" name="salvar"> <br><br>
    </form>
</body>
</html>