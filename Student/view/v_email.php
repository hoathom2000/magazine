
<section class="content">
  <div class="row">
    <h1 style="text-align: center">New email</h1>
   <?php 
   $emaillist = $data['Email'];
   foreach ($emaillist as $email)
   {
    ?> 

    <div class="col-md-6">
      <!-- /.box-header -->
      <div class="box-body">
        <b>From: <?=$email->Sender?></b>
        <div class="box box-body" >
        Subject: <?=$email->Subject?> <br>
        Content: <?=$email->Content?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  <!-- /.box-body -->

  <!-- /.box -->
</div>
</section>
