<html>
    <head>
        <title>Upload Folder using PHP </title>
    </head>
    <body>
        <?php
        $dir  = "./upload";
        // $files = scandir($path);
        // $files = array_diff(scandir($path), array('.', '..'));
        
        // echo "List of folder $path";
        // foreach($files as $file){
        //     $ext = pathinfo($file);
        //     $tail = $ext['extension'];
        //     echo "<br>Name : $file <br>";
        //     echo "Type : $tail <br>";
        //     echo "Size : " .filesize($file) ."<br>";
        //     echo "Date : " .filemtime($file) ."<br>";
        // }

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    echo "Filename : " .$file . "<br>";
                }
                closedir($dh);
            }
        }
        ?>
    </body>
  </html>