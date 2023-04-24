<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de contato</title>
    <link rel="stylesheet" href="css/contato.css">
</head>
<body>
    <section>
        <h2>Contato</h2>
        <form action="back/contato.php" method="POST">
            <input type="hidden" name="accessKey" value="1f664af7-93b5-417a-b924-651ca5c0c917"> <!-- Required -->
            <label>Seu nome</label>
            <input type="text" name="nome" required placeholder="Digite seu nome">
            <label>E-mail</label>
            <input type="email" name="email" required placeholder="Digite seu email de contato">
            <label>Mensagem</label>
            <textarea name="mensagem" cols="30" rows="10" required placeholder="Digite o motivo do seu contato" ></textarea>
            <button type="submit">Enviar</button>
        </form>
        <a href="index.php"><button type="button">Voltar</button></a>
    </section>
</body>
</html>