<!doctype html>
<html>
    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="formulario.css" media="screen">
        <!-- Título da página (aparece na aba) -->
        <title>informações</title>
    </head>
    <body>
        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Guia para aquaristas</h1>
            <p id="subtitulo">Complete as informações do seu aquario</p>
            <br>
        </div>
        <!-- Início do formulário -->
        <form action="http://localhost:8080/projeto.php" method="post">
            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="ph"><strong>Qual PH do seu aquário?</strong></label>
                    <input type="text" name="ph" id="ph" required>
                </div>
                <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                <div class="campo">
                    <label for="temperatura"><strong>Qual a temperatura ?</strong></label>
                    <input type="text" name="temperatura" id="temperatura" required>
                </div>
            </fieldset>
            <!-- Botão para enviar o formulário -->
                <button>Confirmar</button>
            
        </form>
    </body>
</html>
