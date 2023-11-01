<!DOCTYPE html>
<html>

<head>
    <title>Listar Pastas</title>
</head>

<body>
    <h1>Pastas no Diretório Atual:</h1>
    <ul>
        <?php
        // Obtém o caminho do diretório atual
        $diretorio_atual = getcwd();

        // Abre o diretório
        $diretorio = opendir($diretorio_atual);

        // Loop para listar as pastas
        while (false !== ($pasta = readdir($diretorio))) {
            if ($pasta != "." && $pasta != ".." && is_dir($pasta)) {
                echo "<li><a href='$pasta/'>$pasta</a></li>";
            }
        }

        // Fecha o diretório
        closedir($diretorio);
        ?>
    </ul>
</body>

</html>