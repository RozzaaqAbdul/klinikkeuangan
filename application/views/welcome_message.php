<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="margin-bottom: 20px;">Kecukupan Asuransi Jiwa</h2>
  <form action="<?=site_url('welcome');?>" method="post">
    <div class="form-group">
      <?php
        $i=1;
        foreach (is_object($asuransi) || is_array($asuransi) ? $asuransi : array() as $key => $value) {
          echo '<label for="usr">'.$value->question.'</label>';
          echo '<input style="margin-bottom: 20px;" type="text" class="form-control" name='.$value->variable.' id="usr">';
          $i++;
        }
      ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
