<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login or Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="col-md-4">
            
            
            <?php foreach($data as $d){?>
                <p><?php echo $d->name; ?><button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/maincontroller/update/<?php echo $d->id; ?>'" >update</button></br></p>
                <br>><button type="button" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/maincontroller/delete/<?php echo $d->id; ?>'" >delete</button></br>
                 <p><?php echo $d->genre;?></p>  
            <?php } ?>
            </div>
        </div>
    </div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js" integrity="sha384-7aThvCh9TypR7fIc2HV4O/nFMVCBwyIUKL8XCtKE+8xgCgl/PQGuFsvShjr74PBp" crossorigin="anonymous"></script>
</body>
</html>