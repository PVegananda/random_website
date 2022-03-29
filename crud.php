<!-- HEADER -->
<?php
$title = "crud" ;
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

<div class="main margin justify-content-center" style="margin-left: 500px; margin-top:50px; margin-right:150px;">
<?php 
    $name = $email = $gender = $website = "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
if(isset($_POST['submit'])) {


    $email = $_POST['email'];
    $name = $_POST['name'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])) {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Hanya huruf dan spasi yang di perbolehkan";
        }
    }

    if (empty($_POST["email"])) {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format Email Salah";
        }
    }

    if (empty($_POST["website"])) {
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "URL website Salah";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender Harus di Isi";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
}
}

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
<div class="mb-3">
        <label class="form-label">Name</label>
        <input class="form-control" name="name" value="<?php echo $name; ?>">
        <div id="emailHelp" class="form-text"><?php echo $nameErr; ?></div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" name="email" value="<?php echo $email; ?>">
        <div id="emailHelp" class="form-text"><?php echo $emailErr; ?></div>
    </div>
    <div class="mb-3">
        <label class="form-label">Website</label>
        <input class="form-control" name="website" value="<?php echo $website; ?>">
        <div id="emailHelp" class="form-text"><?php echo $websiteErr; ?></div>
    </div>
    <div class="mb-1">
        <label class="form-label">Comment</label>
        <textarea class="form-control rounded-0" name="comment" value="<?php echo $comment; ?>" rows="3" ></textarea>
        <br><br>
    </div>
    <label class="form-label">Gender</label>
    <div class="justify-content-start input-group me-4">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Male
        </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
            Female
        </label>
    </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary mb-1" value="Submit">
</form>
 <?php 
    echo '<h4>Data Anda:</h4>';
    echo '<br />';
    echo 'Nama Anda :';
    echo '<b>' . $name . '</b>';
    echo ', Email Anda : ';
    echo '<b>' . $email . '</b>';
    echo ', Web Anda : ';
    echo '<b>' . $website . '</b>';
    echo ', Komentar Anda : ';
    echo '<b>' . $comment . '</b>';
    echo ', Gender Anda : ';
    echo '<b>' . $gender . '</b>';   
 ?>
</div>


<!-- FOOTER -->
<?php include('partials/footer.php'); ?>
<!-- FOOTER -->