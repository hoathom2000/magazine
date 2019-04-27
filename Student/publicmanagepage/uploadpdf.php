<?php
$target_dir = "pdf/";
$target_file = $target_dir . basename($_FILES["filePDFToUpload"]["namePDF"]);
$uploadOk = 1;
$pdfFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submitPDF"])) {
    $check = getpdfsize($_FILES["filePDFToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an PDF.";
        $uploadOk = 0;
    }
}


// Check file size
if ($_FILES["filePDFToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($pdfFileType != "pdf" ) {
    echo "Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["filePDFToUpload"]["tmp_name"], $target_file)) {
        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

