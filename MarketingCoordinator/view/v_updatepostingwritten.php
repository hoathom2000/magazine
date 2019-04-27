<?php 
include_once('controller/c_postingwritten.php');
include_once('./../Student/controller/c_register.php');

if(isset($_POST['updatePosting2'])){
  if(isset($_POST['id']))
    {

          $id = $_POST['id'];
        $cwritten = new c_PostingWritten();
        $cwritten->postUpdateWritten2($id);

    }
}else if(isset($_POST['back'])){
 $cwritten = new c_PostingWritten();
        $cwritten->back();

}
 else
  {
    $written = new c_PostingWritten();
    $written = $data['Written'];
  }
?>
<?php
if(isset($_POST['sendEmailToStudent']))
{
  if(isset($_POST['sender']))
    $sender = $_POST['sender'];

  //if(isset($_POST['email']))
   // $receiver = $_POST['email'];

   if(isset($_POST['subject']))
    $subject = $_POST['subject'];

  if(isset($_POST['content']))
    $content = $_POST['content'];
if(isset($_POST['receiver']))
    $receiver = $_POST['receiver'];


  if(isset($_POST['sender'])  && isset($_POST['subject']) && isset($_POST['content']) && isset($_POST['receiver'])) 
    {
       $csend = new c_PostingWritten();
      $csend->sendEmail($sender,$subject,$content,$receiver);
    }
}

 ?>
<h1>
  Update Article Profile
</h1>
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
         
          <h2 class="profile-username text-center">Student: <?=$written->StdName?></h2>
             
           <h4 style="text-align: center">Email: <?=$written->StuEmail?></h4>
          
          <a id="sendmail" class="btn btn-primary btn-block" ><b>Send Mail</b></a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><h1 style="margin-left: 10px;">Information of article</h1></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="activity">
            <!-- Post -->
            <form role="form" method="post">
              <div class="post">
                <div class="post">
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img  src="../Student/publicmanagepage/images/<?=$written->Image?>" style="width: 100%; height: 500px;" alt="Photo">
                    </div> 
                    <div class="col-sm-6">
                      <div>Title:<?=$written->Name?></div>
                      <div>Content:<?=$written->Content?></div>
                      <div>Faculty:<?=$written->FacultyName?> (<?=$written->StartDate?> to <?=$written->EndDate?>)</div>
                      <div>Profile:<a href="./../Student/publicmanagepage/pdf/<?=$written->Profile?>"><?=$written->Profile?></a></div>
                    </div> 
                  </div>
                </div>
              </div>
              <button name="updatePosting2" type="submit" class="btn btn-info btn-block btn-sm">Remove accept Posting</button>
              <button name="back" type="submit" class="btn btn-danger btn-block btn-sm">Back</button>
              <input type="hidden" name="id" value="<?=$written->WrittenID?>">
            </form>
          </div>

<dialog id="favDialog">
  <form method="post" role="form">

    <div class="form-group">
      <label for="">Send From Email: </label>
      <input type="text" name="sender" class="form-control" value="<?=$_SESSION['coordinator_email']?>
      " readonly="readonly" >
    </div>
    <div class="form-group">
      <label for="">To Email: </label>
      <input type="text" name="" class="form-control" value="<?=$written->StuEmail?>" readonly="readonly" >
    <input type="hidden" name="receiver" value="<?=$written->StudentID?>">
    </div>
    <div class="form-group">
      <label for="">Subject</label>
      <input type="text" name="subject" class="form-control" placeholder="Enter subject">
    </div>
    <div class="form-group">
      <label for="">Message: </label><br>
      <textarea name="content" rows="10" cols="30" placeholder="Enter content"></textarea>
    </div>
    <div class="col-sm-6">
      <button class="btn btn-info btn-block btn-sm" value="cancel">Cancel</button>
    </div>
    <div class="col-sm-6">
      <button class="btn btn-danger btn-block btn-sm" name="sendEmailToStudent" type="submit">Confirm</button>
    </div>
  </form>
</dialog>

</section>
<script type="text/javascript">
  
  var updateButton = document.getElementById('sendmail');
  updateButton.addEventListener('click', function onOpen() {
    if (typeof favDialog.showModal === "function") {
      favDialog.showModal();
    }
  });
</script>