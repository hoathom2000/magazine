
 <h1>
  Posting Article Management

</h1>
<section class="content">
  
  <div class="row">
   <?php 
   $writtenlist = $data['PostingWrittenList'];
   foreach ($writtenlist as $written)
   {
    ?> 
    <div class="col-md-6">
      <!-- /.box-header -->
      <div class="box-body">
        <div class="box box-body">
          <div class="col-sm-3">
           <td><button type="button" onclick="window.location.assign('writtenposting.php?action=update&id=<?=$written->WrittenID?>');" class="btn btn-primary"><span>View Detail</span></button></td>
         </tr>
       </a>
     </div>
     
     <?=$written->Name?><br>
     <?=$written->DateTimeWritten?>
   </div>
   </div>
  </div>
  <!-- /.box-body -->
  <?php } ?>
<!-- /.box -->
</div>
</section>
