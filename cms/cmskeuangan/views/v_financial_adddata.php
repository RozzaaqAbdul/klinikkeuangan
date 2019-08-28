<div class="col-xl-12 col-lg-12">
  <!-- general form elements -->
  <div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"><?=$title;?></h4>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form style="padding-left: 10%;padding-right: 10%;" action="<?=site_url('financial/adddata');?>" method="post" class="form-element">
      <div class="box-body">
        <div class="form-group">
          <label for="question" style="font-weight:bold;">Question</label>
          <textarea class="form-control" rows="3" id="question" name="add_question" placeholder="Masukkan Pertanyaan"></textarea>
        </div>
        <div class="form-group">
          <label for="variable_1" style="font-weight:bold;">Variable 1</label>
          <input type="text" class="form-control" id="variable_1" name="add_variable_1" placeholder="Masukkan Variable 1">
        </div>
        <div class="form-group">
          <label for="variable_2" style="font-weight:bold;">Variable 2</label>
          <input type="text" class="form-control" id="variable_2" name="add_variable_2" placeholder="Masukkan Variable 2">
        </div>
        <div class="form-group">
          <label for="variable_3" style="font-weight:bold;">Variable 3</label>
          <input type="text" class="form-control" id="variable_3" name="add_variable_3" placeholder="Masukkan Variable 3">
        </div>
        <div class="form-group">
          <label for="variable_4" style="font-weight:bold;">Variable 4</label>
          <input type="text" class="form-control" id="variable_4" name="add_variable_4" placeholder="Masukkan Variable 4">
        </div>
        <div class="form-group">
          <label for="value_1" style="font-weight:bold;">Value 1</label>
          <input type="text" class="form-control" id="value_1" name="add_value_1" placeholder="Masukkan Value 1">
        </div>
        <div class="form-group">
          <label for="value_2" style="font-weight:bold;">Value 2</label>
          <input type="text" class="form-control" id="value_2" name="add_value_2" placeholder="Masukkan Value 2">
        </div>
        <div class="form-group">
          <label for="value_3" style="font-weight:bold;">Value 3</label>
          <input type="text" class="form-control" id="value_3" name="add_value_3" placeholder="Masukkan Value 3">
        </div>
        <div class="form-group">
          <label for="value_4" style="font-weight:bold;">Value 4</label>
          <input type="text" class="form-control" id="value_4" name="add_value_4" placeholder="Masukkan Value 4">
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