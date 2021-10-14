<html>
    <head>
        <title>Upload Folder using PHP </title>
    </head>
    <body>
        <?php
        $path  = 'upload';
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        
        echo "List of folder $path";
        foreach($files as $file){
            $ext = pathinfo($file);
            $tail = $ext['extension'];
            echo "<br>Name : $file <br>";
            echo "Type : $tail <br>";
            echo "Size : " .filesize($file) ."<br>";
            echo "Date : " .filemtime($file) ."<br>";
        }
        ?>
    </body>
  </html>