<html>
    <head>
        <title> Cadastre seu certificado </title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
                
    </head>
    <body>
        <h2> Emissão de certificado </h2>
        <form action="certificado.php" method="post">
            <label for="nome_participante"> Nome Participante </label>
            <input type="text" id="nome" required name="nome"></br>
            <label for="curso"> Curso </label>
            <input type="text" id="curso" required name="curso"></br>
            <input type="submit" value="Emitir certificado">
        </form>
    </body>
</html>
    