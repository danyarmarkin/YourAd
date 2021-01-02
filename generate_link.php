<html>
 <head>
  <title>Тестируем PHP</title>
 </head>
 <body>
   <!DOCTYPE html>
 <html>
 <body>

 <?php
   $id = rand(1000, 9999);
   echo strval($id);
   $dir = strval($id);

   if( is_dir($dir) === false ){
     mkdir($dir);
   }

   $file_to_write = "index.html";
   $content_to_write = "<!DOCTYPE html><html><head><meta><title></title></head><body><p>you are gay!</p></body></html>";

   $file = fopen($dir . '/' . $file_to_write,"w");

   // a different way to write content into
   // fwrite($file,"Hello World.");

   fwrite($file, $content_to_write);

   // closes the file
   fclose($file);
 ?>
 </body>
</html>
