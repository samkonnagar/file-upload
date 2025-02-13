<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {



$fileName = $_FILES['myFile']['name'];
$tempName = $_FILES['myFile']['tmp_name'];
$error = $_FILES['myFile']['error'];
$fileSize = $_FILES['myFile']['size'];

if (!$error) {
    if ($fileSize <= (200 * 1024)) {
       $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
       $allowTypes = ["jpg", "jfif", "png", "jpeg"];
        if (in_array($fileType, $allowTypes)) {
            $newName = uniqid('IMG-')."-".time().".".$fileType;
            $res = move_uploaded_file($tempName, "uploads/$newName");

            if ($res) {
                echo "File Uploaded";
            }
        }
        else {
            echo "Invalid File Type";
        }
    } 
    else {
        echo "File Size is more than 200KB";
    }
}
else{
     echo "Something Wrong";
}



}

// /images/user.image.JPG

// IMG-fn8fh8ewf-3242549625428.jpg

?>