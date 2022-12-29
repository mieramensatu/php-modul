<html>
    <head>
        <title>Pemrosesan File</title>
    </head>
    <body>
        <h2>Penulisan Data</h2>
        <?php
        $file = 'C:\\Text.txt';
        $fo = fopen($file, 'w');
        $data = 'Tes fwire OK in ' . $file . ' !';
        fwrite($fo,$data);
        fclose($fo);
        echo ("cek isi file di <b> $file </b> !");
        ?>
    </body>
</html>