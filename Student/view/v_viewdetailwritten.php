<?php 
include_once('controller/c_written.php');
include_once('controller/c_register.php');

    $written = new c_written();
    $written = $data['Written'];


if(isset($_POST['insertComment']))
{
  if(isset($_POST['comment']))
    $comment = $_POST['comment'];

   if(isset($_POST['WrittenID']))
    $id = $_POST['WrittenID'];

  $studentid = $_SESSION['user_id'];
  if(isset($_POST['comment']) && isset($_POST['WrittenID'])) 
    {
      $cadd = new c_Written();
      $cadd->postInsertComment($comment, $id, $studentid);
    }
}
?>



    <h1>
         Article Detail
      </h1>
    

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
             
              <h2 class="profile-username text-center">Student: <?=$written->StdName?></h2>
             
              <h4 style="text-align: center">Email: <?=$written->StuEmail?></h4>
         
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
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
                  <!-- /.user-block -->
                 
                
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
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

           
              

            </form>
                </div>
</div>
</div>
</div>
</div>

            
          <div class="nav-tabs-custom">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                    <form action="#" role="form" method="post">
                          <label for="comment">Comment</label>
                          <input type="text" name="comment" id="comment" class="form-control" placeholder="Enter comment">
                    <button name="insertComment" type="submit" class="btn btn-primary" >Insert new Comment</button>

                    <input  type="hidden" name="WrittenID"  id="WrittenID" value="<?=$written->WrittenID?>">
                    </form>
              </div>
              <div>
                <b>All Comment:</b><br>
                <?php
                $cwritten = new c_Written();
                $data2 = $cwritten->getAllComment($written->WrittenID);
                $listComment = $data2['Comment'];
                    foreach($listComment as $comment)
                    {                                                        
                  ?> 
                "<?=$comment->StdName?>": <input type="text"  class="form-control" readonly="readonly" value="'<?=$comment->Comment?>'">
                <?php } ?>
              </div>
            </div>

          </div>


</section>