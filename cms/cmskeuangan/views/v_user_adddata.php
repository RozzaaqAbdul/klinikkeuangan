<div class="col-xl-12 col-lg-12">
  <!-- general form elements -->
  <div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"><?=$title;?></h4>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form style="padding-left: 10%;padding-right: 10%;" action="<?=site_url('user/adddata');?>" method="post" class="form-element">
      <div class="box-body">
        <div class="form-group">
          <label for="username" style="font-weight:bold;">Username</label>
          <input type="text" class="form-control" id="username" name="add_username">
        </div>
        <div class="form-group">
          <label for="email" style="font-weight:bold;">Email</label>
          <input type="text" class="form-control" id="email" name="add_email">
        </div>
        <div class="form-group">
          <label for="password" style="font-weight:bold;">Password</label>
          <input type="password" class="form-control" id="password" name="add_password">
        </div>
        <div class="form-group">
          <label for="status" style="font-weight:bold;">Status</label>
          <select name="add_status" class="form-control">
              <option value="Y">Aktif</option>
              <option value="N">Tidak Aktif</option>
          </select>
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