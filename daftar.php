<?php
   session_start();
   if(isset($_SESSION['username'])) 
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00b101;}
</style>
<form action="prosesdaftar.php" method="post"> 
</head>
<body style="background: url(t.jpg);">
  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $usiaErr = $nimErr = $biografiErr = $jurusanErr = "";
$username = $pass = $passErr = $email = $gender = $biografi = $website = $nim = $jurusan = $usia = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "NIM is required";
  } else {
    $nim = test_input($_POST["nim"]);
    if (!preg_match("/^[0-9 ]*$/",$nim)) {
      $nimErr = "Only Numbers allowed"; 
    }
  } 
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $pass = test_input($_POST["password"]);
    if (!preg_match("/^[0-9 ]*$/",$pass)) {
      $passErr = "error"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["jurusan"])) {
    $jurusanErr = "Please Select One";
  } else {
    $jurusan = test_input($_POST["jurusan"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["usia"])) {
    $usiaErr = "Age is required";
  } else {
    $usia = test_input($_POST["usia"]);
    if (!preg_match("/^[0-9 ]*$/",$usia)) {
      $usiaErr = "Only Numbers allowed"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["biografi"])) {
    $biografiErr = "Biografi is required";
  } else {
    $biografi = test_input($_POST["biografi"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<center><h2 style="color:black">===============Form Pendaftaran===============</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>Username</td>
   <td>:<input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
   <td>Password</td>
   <td>:<input type="password" name="password">
   <span class="error">* <?php echo $passErr;?> </span>
  </tr>
  <tr>
   <td>NIM</td>
   <td>:<input type="text" name="nim" value="<?php echo $nim;?>">
  <span class="error">* <?php echo $nimErr;?></span></td>
  </tr>
  <tr>
   <td>E-mail</td>
   <td>:<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr>
   <td>Jurusan</td>
   <td>:<form action="/action_page.php">
  <select name="jurusan">
    <option value="">-Pilih Jurusan-</option>
     <option value="Sistem Informasi">Sistem Informasi</option>
     <option value="Sistem Komputer">Sistem Komputer</option>
     <option value="Teknik Informatika">Teknik Informatika</option>
     <option value="Manajemen Informatika">Manajemen Informatika</option>
     <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
     <option value="Teknik Komputer">Teknik Komputer</option>
  </select>
  <span class="error">* <?php echo $jurusanErr;?></span></td>
  </tr>
  <tr>
   <td>Gender</td>
   <td>:
  <input type="radio" name="gender" value="Laki - Laki">Male
  <input type="radio" name="gender" value="Perempuan">Female
  <span class="error">* <?php echo $genderErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Usia</td>
   <td>:<input type="text" name="usia" value="<?php echo $usia;?>">
  <span class="error">* <?php echo $usiaErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Website</td>
   <td>:<input type="text" name="website" value="<?php echo $website;?>">
  <span class="error">* <?php echo $websiteErr;?></span></td>
  </tr>
  <tr>
   <td>Biografi</td>
   <td>:<textarea name="biografi"><?php echo $biografi;?></textarea><span class="error">* <?php echo $biografiErr;?></span></td>
  </tr>
  <tr><td><img src="capcay.php"/> </td><td>: <input type="text" placeholder="masukan kode captcha" name="kode"/><span class="error">*</span></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
   </td>
  </tr>

  <a href="login.php">Sudah punya akun ?</a>
</table>
</form>

<!-- <?php
 // echo "<h2>Your Input:</h2>";
 // echo "Nama : ";
 // echo $name;
 // echo "<br>";
 // echo "Nim : ";
 // echo $nim;
 // echo "<br>";
 // echo "E-mail : ";
 // echo $email;
 // echo "<br>";
 // echo "jurusan : ";
 // echo $jurusan;
 // echo "<br>";
 // echo "Gender : ";
 // echo $gender;
 // echo "<br>";
 // echo "Usia : ";
 // echo $usia;
 // echo "<br>";
 // echo "Website : ";
 // echo $website;
 // echo "<br>";
 // echo "Biografi : ";
 // echo $biografi;
 // echo "<br>";
 // echo $tgl = date("d/m/Y h:i:sa");
 // echo "<br>";
?>  -->



</body>
</html>