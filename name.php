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

<div class="main">
<?php
    $NAME = $_POST['firstname'];
    $SURNAME = $_POST['surname'];
?>

<div class="text-dark justify-content-center" style="margin-left: 300px; margin-top: 200px;">
Welcome <?php echo $_POST["firstname"]; ?><br>
Nama Marga Anda: <?php echo $_POST["surname"]; ?>
</div>

</div>

<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
<!-- FOOTER -->