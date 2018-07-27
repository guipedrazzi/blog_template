<!DOCTYPE html>
<!--
    Página de teste
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "
                <h1>$teste teste</h1>
                <p>$nome</p>
                <p>$testando</p>
                <p>$maisTeste</p>
                <hr/>
            ";
            echo '<pre>';
            $vet = array_map('utf8_encode', $vetTeste);
            print_r($vet);
            echo '</pre>';
        ?>
    </body>
</html>
