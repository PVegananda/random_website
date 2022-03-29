<!-- HEADER -->
<?php 
$title = "Pengertian" ;
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
<?php 

    function kendali(){
        return 'terbagi atas 4 jenis statement (pernyataan) utama yaitu IF, SWITCH, WHILE, dan FOR. Struktur kendali merupakan bagian penting dalam suatu bahasa pemrograman karena bagian ini adalah bagian yang mengatur jalurnya eksekusi suatu program.';
    }

    function fungsi(){
        return 'Fungsi (atau Function) di bahasa pemograman adalah kode program yang dirancang untuk menyelesaikan sebuah tugas tertentu, dan merupakan bagian dari program utama. Kita dapat membuat fungsi sendiri, atau menggunakan fungsi yang dibuat oleh programmer lain.';
    }

    function arraydata(){
        return 'Array adalah salah satu struktur data yang berisi sekumpulan data dan memiliki indeks. Indeks digunakan untuk mengakses nilai array.
        Indeks array selalu dimulai dari nol (0).';
    }
?>
<div class="main margin justify-content-center" style="margin-left: 500px; margin-top:50px; margin-right:150px;">
    <div class="container mb-3">
        <h4>Struktur Kendali</h4>
        <strong>pengertian sederhana struktur kendali</strong>
        <blockquote>
            <p><?php echo kendali(); ?></p>
            <footer class="text-secondary">- kutipan singkat</footer>
        </blockquote>
    </div>

    <div class="container mb-3">
        <h4>Fungsi</h4>
        <strong>pengertian sederhana fungsi</strong>
        <blockquote>
            <p><?php echo fungsi(); ?></p>
            <footer class="text-secondary">- kutipan singkat</footer>
        </blockquote>
    </div>

    <div class="container mb-3">
        <h4>Array</h4>
        <strong>pengertian sederhana Array</strong>
        <blockquote>
            <p><?php echo arraydata(); ?></p>
            <footer class="text-secondary">- kutipan singkat</footer>
        </blockquote>
    </div>

</div>



<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
<!-- FOOTER -->