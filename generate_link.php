<html>
    <head>
        <title>Тестируем PHP</title>
    </head>
    <body>

        <?php
            $id = rand(1000000, 9999999);
            echo strval($id);
            $dir = strval($id);

            if( is_dir($dir) === false ){
             mkdir($dir);
            }

            $file_to_write = "index.html";
            $content_to_write = "<!DOCTYPE html>
                                <html>
                                <head>
                                <meta>
                                <title></title>
                                <script type=\"text/javascript\" src=\"../jquery.js\"></script>
                                </head>
                                <body>
                                <p>you are gay!</p>
                                <script>
                                $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
                                    console.log(JSON.stringify(data, null, 2));
                                    ip = JSON.parse(JSON.stringify(data, null, 2));
                                    console.log(ip[\"geobytesipaddress\"]);
                                });
                                </script></body></html>";

            $file = fopen($dir . '/' . $file_to_write,"w");

            // a different way to write content into
            // fwrite($file,"Hello World.");

            fwrite($file, $content_to_write);

            // closes the file
            fclose($file);
        ?>
    </body>
</html>
