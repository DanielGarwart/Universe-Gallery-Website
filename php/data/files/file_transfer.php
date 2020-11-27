<?php
function uploadFile($dir, $id, $required_file_ext) {
    if(!isset($_FILES[$id])) { return; }

    $target_file = "/" . $dir . basename($_FILES[$id]["name"]);
    $file_ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if required file type is met
    $check = getimagesize($_FILES[$id]["tmp_name"]);
    if(!($check !== false && $file_ext == $required_file_ext)) {
        return;
    }

    if (!move_uploaded_file($_FILES[$id]["tmp_name"], $target_file)) {
        echo "<script>alert('File wasnt created!');</script>";
    }
}