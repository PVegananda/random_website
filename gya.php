<!-- HEADER -->
<?php 
$title = "Guess Your Age" ;
include('partials/header.php'); ?>
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
    body {
        color: black;
    }
</style>

<?php
    $days = array("01","02","03","04","05","06","07","08","09","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31");
    $bulans = array("January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December");
    $years = range(1900, strftime("%Y", time()));

?>
<div class="text-dark" style="margin-left:500px; margin-top:200px; margin-right: 200px;">
<form action="gya.php" method="post">
  <div class="mb-3">
    <label class="form-label">Masukkan Tanggal Lahir:</label>
    <select name="day" class="form-control form-control-sm mb-3 text-dark" required>
    <option >Pilih Hari</option>
    <?php foreach($days as $day) : ?>
        <option value="<?php echo $day; ?>" class="text-dark"><?php echo $day; ?></option>
    <?php endforeach; ?>
    </select>

    <select name="month" class="form-control form-control-sm mb-3 text-dark" required>
    <option >Pilih Bulan</option>
    <?php foreach($bulans as $bulan) : ?>
        <option value="<?php echo $bulan; ?>" class="text-dark"><?php echo $bulan; ?></option>
    <?php endforeach; ?>
    </select>

    <select name="year" class="form-control form-control-sm mb-3 text-dark" required>
    <option >Pilih Tahun</option>
    <?php foreach($years as $year) : ?>
        <option value="<?php echo $year; ?>" class="text-dark"><?php echo $year; ?></option>
    <?php endforeach; ?>
    </select>
    <input type="submit" name="submit" class="btn btn-primary" value="Hitung Umur:">

  </div>
</form>
<?php
		if(isset($_POST['submit']))
		{
		$d=$_POST['day'];
		$m=$_POST['month'];
		$y=$_POST['year'];
		 
		$dob=$d.'-'.$m.'-'.$y;
		 
		$bday=new DateTime($dob);
		 
		$t=date('d-m-Y');
			
		$age=$bday->diff(new DateTime);
		 
		$today=date('d-m-Y'); 
		echo '<br />';
		echo '<b>Your Birth date: </b>';
		echo $dob;
		echo '<br>';
		echo '<b>Your Age : </b> ';
		echo $age->y;
		echo ' Years, ';
		echo $age->m;
		echo ' Months, ';
		echo $age->d;
		echo ' Days';
		}

?>
</div>



<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
<!-- FOOTER -->