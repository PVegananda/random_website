<!-- HEADER -->
<?php 
$title = "Quiz" ;
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

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
</style>

<div class="main margin" style="margin-left: 500px; margin-top:50px;">
<?php 


    

    $correct = 0;
    if(isset($_POST['submit']))
		{
        $ans1 = $_POST['ans1'];
        $ans2 = $_POST['ans2'];
        $ans3 = $_POST['ans3'];
        $ans4 = $_POST['ans4'];

        if ($ans1 == "-13400" ){
            $correct++;
        } else {
            echo "<p>kurang teliti</p>";
        }

        if ($ans2 == "Semarang" ){
            $correct++;
        } else {
            echo "<p>hmm salah</p>";
        }

        if ($ans3 == "Jokowi" || $ans3 == "Joko Widodo"  ){
            $correct++;
        } else {
            echo "<p>waduh</p>";
        }
        if ($ans4 == 79 ){
            $correct++;
        } else {
            echo "<p>coba pakai kalkulator</p>";
        }

        echo "<p> Score mu adalah $correct Point!</p>";
        $grade = ($correct / 4) * 100;
        if ( $correct == 0){
            echo "<p>anda kurang belajar</p>";
        } elseif ( $correct == 1){
            echo "<p>terus mencoba</p>";
        } elseif ( $correct == 2){
            echo "<p>kurang beruntung</p>";
        } elseif ( $correct == 3){
            echo "<p>menuju sangat baik</p>";
        } else {
            echo "<p>sangat baik sekali.</p>";
        }

    } else {
        echo "<p> Isi Semua Soal Quiz</p>";
    }
    error_reporting(E_ALL ^ E_NOTICE);
?>
    <form action="quiz.php" method="post">
        <h1 class="fs-3">Jawablah Pertanyaan Di Bawah Ini</h1>
        <div class="mb-3">
        <label class="form-label"> <strong>Berapa Hasil 100-50x270:1</strong> </label>
        <input class="form-control" type="text" name="ans1">
        </div>

        <div class="mb-3">
        <label class="form-label"> <strong>Nama Ibukota Jawa Tengah</strong> </label>
        <input class="form-control" type="text" name="ans2">
        </div>

        <div class="mb-3">
        <label class="form-label"> <strong>Nama Presiden Indonesia Saat Ini (2022)</strong> </label>
        <input class="form-control" type="text" name="ans3">
        </div>

        <div class="mb-3">
        <label class="form-label"> <strong>Rata2 nilai jika 9 murid mendapat nilai 80 dan 1 murid mendapat nilai 70</strong> </label>
        <input class="form-control" type="number" name="ans4">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Skor Anda:">
    </form>



</div>
<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
<!-- FOOTER -->