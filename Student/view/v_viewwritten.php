<?php 
include_once('controller/c_written.php');
include_once('controller/c_register.php');
date_default_timezone_set("Asia/Bangkok");

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
if(isset($_POST["submit"])){
$allowedExts = array("pdf");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["pdf_file"]["name"];

if (($_FILES["pdf_file"]["type"] == "application/pdf")  && in_array($extension, $allowedExts))
{
   if ($_FILES["pdf_file"]["error"] > 0)
   {
      echo "Return Code: " . $_FILES["pdf_file"]["error"] . "<br>";
   }
   else
   {
          move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"publicmanagepage/pdf/" . $_FILES["pdf_file"]["name"]);
      
    }
}
else
{
    echo "Size of file too lagre ";
}
}

if(isset($_POST['insertWritten']))
{

  if(isset($_POST['name']))
    $name = $_POST['name'];
  if(isset($_POST['profile']))
    $profile = $_POST['profile'];
  if(isset($_POST['image']))
    $image = $_POST['image'];
  if(isset($_POST['date']))
    $date = $_POST['date'];
if(isset($_POST['content']))
    $content = $_POST['content'];

  $studentid = $_SESSION['user_id'];

  if(isset($_POST['name']) && isset($image) && isset($_POST['profile']) && isset($_POST['date']) && isset($_POST['content']) ) 
    {
      $cadd = new c_Written();
      $cadd->postInsertWritten($name,$image,$profile,$date,$content,$studentid);
    }
}
?>
<h1>
  Insert
  <small>New Article</small>
</h1>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Insert new Article</h3>
            </div>
            <!-- /.box-header -->
            
            <form method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1"> Select image to upload:</label>
                 
                <input type="file" name="fileToUpload" id="fileToUpload">
                <?php if(isset($_FILES["fileToUpload"]["name"])) echo '<img src="publicmanagepage/images/'.$_FILES["fileToUpload"]["name"].'" width="500" height="500" />';
                ?><br>
                </div>
                  <div class="form-group">
              <label for="exampleInputEmail1"> Select PDF to upload:</label> 
              <input type="file" name="pdf_file" id="pdf_file" accept="application/pdf" /><br>
            </div>

                <input type="submit" value="Upload" name="submit">
            </form>
              <form role="form" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">image</label><br>
                <input type="text" name="image" id="image" style="border: 0px"  readonly="readonly" class="form-control" value="<?php
                if(isset($_FILES["fileToUpload"]["name"])) echo $_FILES["fileToUpload"]["name"];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">profile</label><br>
                  <input type="text" name="profile" id="profile" class="form-control"  readonly="readonly" value="<?php
                if(isset($_FILES["pdf_file"]["name"])) echo $_FILES["pdf_file"]["name"];?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="text" name="date" class="form-control" readonly="readonly" value="<?php echo date("Y-m-d", time()); ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Content</label><br>
                  <input type="text" name="content" class="form-control"  placeholder="Enter brief content">
                </div>
               
                <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
                <div class="form-group">
                  <textarea rows="4" cols="150" name="comment" form="usrform" disabled>Terms of Use of FreePrivacyPolicy.com

PLEASE READ THE FOLLOWING TERMS AND CONDITIONS OF USE CAREFULLY BEFORE USING THIS WEBSITE.

All users of this site agree that access to and use of this site is subject to the following terms and conditions and other applicable law. If you do not agree to these terms and conditions, please do not use this site.

Disclaimer

You understand that it is your responsibility to ensure that the privacy policy you create is complete, accurate, and meets your companies specific privacy needs. FreePrivacyPolicy.com is not liable or responsible for any privacy policies created using our services, and we give no representations or warranties, express or implied, that the privacy policies created using our service are complete, accurate or free from errors or omissions.

FreePrivacyPolicy.com is a family friendly site and we DO NOT intentionally accept or allow the following types of sites into our program: Gambling, Adult content (porn, soft porn, sites with adult ad's), Pharmacy (Cheap drugs, Viagra, male/female enhancement, etc.), Hate, Link Farms or Spam Sites. If you sell any of these products and we find out, we will cancel your membership without hesitation. We do not need to explain our decision or reasons if we reject or cancel any membership.

Refunds & Guarantees

FreePrivacyPolicy.com offers the following guarantee. If you purchase a FreePrivacyPolicy.com course, product or service, and for some reason you decide that you would like a refund, you have 7 days to request a refund. If you request a refund within 7 days from the date of purchase, FreePrivacyPolicy.com will give you a full refund of your purchase price for the course, product or service. If you do not request a refund within the 7 day refund period, you forfeit this option and will not be eligible for a refund. We do not offer refunds on any additional services that you may purchase in the members area once you are a member.

Email Opt-in Policy

When using our FreePrivacyPolicy.com Generator service you will be opted-in to receive weekly email updates, tips and suggestions we believe will help build, grow and enhance your site. You may unsubscribe at any time by clicking on the "Unsubscribe or Modify my subscription" link at the bottom of any email sent.

Copyright

The entire content included in this site, including but not limited to text, graphics or code is copyrighted as a collective work under the United States and other international copyright laws, and is the property of FreePrivacyPolicy.com. The collective work includes works that are licensed to FreePrivacyPolicy.com. Copyright 2009, FreePrivacyPolicy.com ALL RIGHTS RESERVED. Permission is granted to electronically copy and print hard copy portions of this site for the sole purpose of placing an order with FreePrivacyPolicy.com or purchasing our products. Any other use, including but not limited to the reproduction, distribution, display or transmission of the content of this site is strictly prohibited, unless authorized by FreePrivacyPolicy.com. You further agree not to change or delete any proprietary notices from materials downloaded from the site.

Trademarks

All trademarks, service marks and trade names of FreePrivacyPolicy.com used in the site are trademarks or registered trademarks of FreePrivacyPolicy.com.

Warranty Disclaimer

This site and the materials and products on this site are provided "as is" and without warranties of any kind, whether express or implied. To the fullest extent permissible pursuant to applicable law, FreePrivacyPolicy.com disclaims all warranties, express or implied, including, but not limited to, implied warranties of merchantability and fitness for a particular purpose and non-infringement. FreePrivacyPolicy.com does not represent or warrant that the functions contained in the site will be uninterrupted or error-free, that the defects will be corrected, or that this site or the server that makes the site available are free of viruses or other harmful components. FreePrivacyPolicy.com does not make any warrantees or representations regarding the use of the materials in this site in terms of their correctness, accuracy, adequacy, usefulness, timeliness, reliability or otherwise. Some states do not permit limitations or exclusions on warranties, so the above limitations may not apply to you.

Limitation of Liability

FreePrivacyPolicy.com shall not be liable for any special or consequential damages that result from the use of, or the inability to use, the services and products offered on this site, or the performance of the services and products.

Typographical Errors

In the event that a FreePrivacyPolicy.com product is mistakenly listed at an incorrect price, FreePrivacyPolicy.com reserves the right to refuse or cancel any orders placed for product listed at the incorrect price. FreePrivacyPolicy.com reserves the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is cancelled, FreePrivacyPolicy.com will issue a credit to your credit card account in the amount of the incorrect price.

Term; Termination

These terms and conditions are applicable to you upon your accessing the site and/or completing the registration or shopping process. These terms and conditions, or any part of them, may be terminated by FreePrivacyPolicy.com without notice at any time, for any reason. The provisions relating to Copyrights, Trademark, Disclaimer, Limitation of Liability, Indemnification and Miscellaneous, shall survive any termination.

Use of Site

Harassment in any manner or form on the site, including via e-mail, chat, or by use of obscene or abusive language, is strictly forbidden. Impersonation of others, including a FreePrivacyPolicy.com or other licensed employee, host, or representative, as well as other members or visitors on the site is prohibited. You may not upload to, distribute, or otherwise publish through the site any content which is libelous, defamatory, obscene, threatening, invasive of privacy or publicity rights, abusive, illegal, or otherwise objectionable which may constitute or encourage a criminal offense, violate the rights of any party or which may otherwise give rise to liability or violate any law. You may not upload commercial content on the site or use the site to solicit others to join or become members of any other commercial online service or other organization.

Participation Disclaimer

FreePrivacyPolicy.com does not and cannot review all communications and materials posted to or created by users accessing the site, and are not in any manner responsible for the content of these communications and materials. You acknowledge that by providing you with the ability to view and distribute user-generated content on the site, FreePrivacyPolicy.com is merely acting as a passive conduit for such distribution and is not undertaking any obligation or liability relating to any contents or activities on the site. However, FreePrivacyPolicy.com reserves the right to block or remove communications or materials that it determines to be (a) abusive, defamatory, or obscene, (b) fraudulent, deceptive, or misleading, (c) in violation of a copyright, trademark or; other intellectual property right of another or (d) offensive or otherwise unacceptable to FreePrivacyPolicy.com in its sole discretion.

Indemnification

You agree to indemnify, defend, and hold harmless FreePrivacyPolicy.com, its officers, directors, employees, agents, licensors and suppliers (collectively the "Service Providers") from and against all losses, expenses, damages and costs, including reasonable attorneys' fees, resulting from any violation of these terms and conditions or any activity related to your account (including negligent or wrongful conduct) by you or any other person accessing the site using your Internet account.

Third-Party Links

In an attempt to provide increased value to our visitors, FreePrivacyPolicy.com may link to sites operated by third parties. However, even if the third party is affiliated with FreePrivacyPolicy.com, FreePrivacyPolicy.com has no control over these linked sites, all of which have separate privacy and data collection practices, independent of FreePrivacyPolicy.com. These linked sites are only for your convenience and therefore you access them at your own risk. Nonetheless, FreePrivacyPolicy.com seeks to protect the integrity of its website and the links placed upon it and therefore requests any feedback on not only its own site, but for sites it links to as well (including if a specific link does not work).

Contacting Us

If there are any questions regarding this privacy policy you may contact us.</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="insertWritten" type="submit" class="btn btn-primary">Insert new Article</button>
              </div>
            </form>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
  </div>
</section>
