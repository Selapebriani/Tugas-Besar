<?php 
session_start();
  if (isset($_SESSION['login'])) {
    header("location: tambah_aksi.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah</title>
</head>
<body style="background: url(s.jpg);"> 
  <br><br>
  <form method="POST" action="tambah_aksi.php">
    <table align="center">
      <tr>
    <input type="hidden" name="waktu">
        <td>Tittle :</td> 
        <td>
          <input type="text" name="title" placeholder="">
        </td>
      </tr>
      <tr>
        <td>Content :</td>
    <td><input name="isi" placeholder=""> </td>
    </tr>
    <tr>
   <td></td>
    <td><input type="submit" name="Simpan"></td>
   </tr>
  </table>
</form>
</body>
</html>