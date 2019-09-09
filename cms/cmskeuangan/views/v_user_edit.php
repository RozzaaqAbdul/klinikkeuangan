<div class="col-xl-12 col-lg-12">
  <!-- general form elements -->
  <div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"><?=$title;?></h4>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form style="padding-left: 10%;padding-right: 10%;" action="<?=site_url('user/editdata/'.$user->id);?>" method="post" class="form-element">
      <div class="box-body">
        <div class="form-group">
          <label for="username" style="font-weight:bold;">Username</label>
          <input type="text" class="form-control" id="username" name="edit_username" value="<?=$user->nama?>">
        </div>
        <div class="form-group">
          <label for="email" style="font-weight:bold;">Email</label>
          <input type="text" class="form-control" id="email" name="edit_email" value="<?=$user->email?>">
        </div>
        <div class="form-group">
          <label for="password" style="font-weight:bold;">Password</label>
          <input type="password" class="form-control" id="password" name="edit_password">
          <p style="color:red;font-weight:bold;">*Biarkan kosong jika tidak ingin mengganti password</p>
        </div>
        <div class="form-group">
          <label for="status" style="font-weight:bold;">Status</label>
          <select name="edit_status" class="form-control">
              <option value="Y" <?=($user->status=='Y'?'selected="selected"':'')?>>Aktif</option>
              <option value="N" <?=($user->status=='N'?'selected="selected"':'')?>>Tidak Aktif</option>
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