<html>
    <head>
        <title>Upload Folder using PHP </title>
    </head>
    <body>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"> 
            
            Select Folder to Upload: <input type="file" name="dir_uppload[]" multiple directory="" webkitdirectory="" moxdirectory="" /><br/><br/> 
            <input type="Submit" value="Upload" name="submit" >
        </form>

        <?php
            var_dump($_FILES);
        ?>
    </body>
  </html>