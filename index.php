<!-- HEADER -->
<?php
$title = "Home" ;
include('partials/header.php'); 

?>
<!-- HEADER -->

<style>
    .main {
        position: fixed;
        margin-left: 200px;
    }

    .margin {
        margin-left: 200px;
        align-content: center;
    }
</style>



<div class="main margin" style="margin-left: 500px; margin-top:100px;">
<form action="name.php" method="post">
  <div class="mb-3">
    <label class="form-label">First Name</label>
    <input class="form-control" name="firstname" value="">
    <div id="emailHelp" class="form-text">masukkan nama panggilan anda disini.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Surname</label>
    <input class="form-control" name="surname" value="" >
    <div id="emailHelp" class="form-text">masukkan nama marga anda disini.</div>
  </div>
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
</div>



<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
<!-- FOOTER -->