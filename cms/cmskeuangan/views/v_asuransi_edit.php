<div class="col-xl-12 col-lg-12">
  <!-- general form elements -->
  <div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"><?=$title;?></h4>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form style="padding-left: 10%;padding-right: 10%;" action="<?=site_url('asuransi/editdata/'.$asuransi->id);?>" method="post" class="form-element">
      <div class="box-body">
        <div class="form-group">
          <label for="question" style="font-weight:bold;">Question</label>
          <input type="text" class="form-control" id="question" name="edit_question" value="<?=$asuransi->question?>">
        </div>
        <div class="form-group">
          <label for="variable" style="font-weight:bold;">Variable</label>
          <input type="text" class="form-control" id="variable" name="edit_variable" value="<?=$asuransi->variable?>">
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-success">Submit</button>
        <button onclick="history.back()" type="button" class="btn btn-danger">Back</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
</div>
<!--/.col (left) -->