<?php 
include_once('controller/c_written.php');

if(isset($_POST["submit"])){
$target_dir = "publicmanagepage/images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
  
}
}

$user = new c_written();
$user = $data['Image'];

if(isset($_POST['updateStudent']))
{
  if(isset($_POST['image']))
    {
        $image = $_POST['image'];
        $id = $_POST['id'];
        $cinfor = new c_written();
        $cinfor->updateMemberImage($image, $id);
    }
}
?>
<h1>
	Update
	<small>Information</small>
</h1>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
          	<div class="box">
            <div class="box-header">
             	<h3 class="box-title">Image edit</h3>
            </div>
            <form method="post" enctype="multipart/form-data">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1"> Select image to upload:</label>
                 
                <input type="file" name="fileToUpload" id="fileToUpload">
                <?php if(isset($_FILES["fileToUpload"]["name"])) echo '<img src="publicmanagepage/images/'.$_FILES["fileToUpload"]["name"].'" width="500" height="500" />';
                ?><br>
                </div>

                <input type="submit" value="Upload" name="submit">
            </form>

              <form role="form" method="post">
              <div class="form-group">
                  <label for="exampleInputFile">image</label><br>
                <input type="text" name="image" id="image" style="border: 0px"  readonly="readonly" class="form-control" value="<?php
                if(isset($_FILES["fileToUpload"]["name"])) echo $_FILES["fileToUpload"]["name"];?>">
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button name="updateStudent" type="submit" class="btn btn-primary">Update</button>
              </div>
              <input type="hidden" name="id" value="<?=$user->StudentID?>">
            </form>
            <!-- /.box-body -->
          	</div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
	</div>
</section>

