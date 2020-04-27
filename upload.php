<?php

$filename = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (in_array($ext, array("pdf", "docx", "doc")))
             move_uploaded_file($tmp_name, "contactus_files/$filename");

?>