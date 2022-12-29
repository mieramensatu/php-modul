<html>
    <head>
        <title>Pemrosesan File</title>
    </head>
    <body>
        <h2>Pemeriksaan file</h2>
        <?php
        $file = 'C::\\Text.txt';
        if (file_exists($file)) {
            echo ("File <br> $file </b> sudah ada !");
        }else
        {
            echo ("File <br> $file </b> tidak ada !");
        }
        ?>
    </body>
</html>