<?php 
include_once('controller/c_coordinator.php');
include_once('./../Student/controller/c_register.php');

if(isset($_POST['updateCoordinator'])){
  if(isset($_POST['id']))
    {

          $id = $_POST['id'];
        $ccoordinator = new c_Coordinator();
        $ccoordinator->postUpdateCoordinator($id);

    }
}else if(isset($_POST['back'])){
        $ccoordinator = new c_Coordinator();
        $ccoordinator->back();

}
 else
  {
    $coordinator = new c_Coordinator();
    $coordinator = $data['Coordinator'];
  }
?>

<?php
if(isset($_POST['sendEmailToCoor']))
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
       $csend = new c_Coordinator();
      $csend->sendMail($sender,$subject,$content,$receiver);
    }
}

 ?>

    <h1>
        Update Coordinator
    </h1>
    <section class="content">

      <div class="row">
      
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><h1 style="margin-left: 10px;">Information of Coordinatore</h1></li>
            </ul>
           
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                 <form role="form" method="post">
                <div class="post">
                  <!-- /.user-block -->
                 
                
                <div class="post">
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    
                    <div class="col-sm-6">
                      
                      
                  <label for="exampleInputEmail1">Name
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"  readonly="readonly" value="<?=$coordinator->CoorName?>"></label>
                  <label for="exampleInputEmail1">Status
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name"  readonly="readonly" value="<?=$coordinator->Status?>"></label>
                  <a id="sendmail" class="btn btn-primary btn-block" ><b>Send Mail</b></a>
                    </div> 
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                 
                        <button name="updateCoordinator" type="submit" class="btn btn-info btn-block btn-sm"> Remove Role</button>
                        <button name="back" type="submit" class="btn btn-danger btn-block btn-sm">Back</button>
                 
              
              <input type="hidden" name="id" value="<?=$coordinator->CoorID?>">
            </form>
                </div>

<dialog id="favDialog">
  <form method="post" role="form">

    <div class="form-group">
      <label for="">Send From Email: </label>
      <input type="text" name="sender" class="form-control" value="<?=$_SESSION['manage_email']?>
      " readonly="readonly" >
    </div>
    <div class="form-group">
      <label for="">To Email: </label>
      <input type="text" name="" class="form-control" value="<?=$coordinator->CoorEmail?>" readonly="readonly" >
    <input type="hidden" name="receiver" value="<?=$coordinator->CoorID?>">
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
      <button class="btn btn-danger btn-block btn-sm" name="sendEmailToCoor" type="submit">Confirm</button>
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