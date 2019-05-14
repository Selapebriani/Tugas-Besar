<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background: url(k.jpg);">
    <form id="form-container" class="form-container">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="idx.php">Dashboard</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-md-1 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="idx.php">BLOG</a></li>
            <li class=><a href="login.php">SIGN IN</a></li>
            <br>
              <label for="input">Wikipedia : </label>
              <input type="text" id="input" value="">
              <button id="submit-btn">Search</button>
            <li class="wikipedia-container">
                <h3 id="wikipedia-header">Relevant Wikipedia Links</h3>
                <ul id="wikipedia-links">Type in an address above and find relevant Wikipedia articles here!</ul>
            </li>

          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main">
           <div class="kol2">
            <a name="tabel" class="tabela">
                <h3 align="center" style="background-color: white">WELCOME TO BLOG SELA</h3>
                <br>
                <table align="center" rules="all" border="1" style="background-color: white">
                    <tr style=""> 
                        <th><center>No</center></th>
                        <th><center>Title</center></th>
                        <th><center>Content</center></th> 
                        <th><center>Terakhir diakses</center></th>     
                    </tr>
                    <?php
                        include "koneksi1.php";
                        $no = 1;
                        $data = mysqli_query($db,"select * from post");
                        while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['title']; ?></td>
                        <td><?php echo $d['isi']; ?></td>
                         <td><?php echo $d['tanggal']; ?></td>

                    </tr>
                    <?php
                }
                ?>
                </table>
            </a>
            </div>
            </div>

         

          <div class="table-responsive">
          
          </div>
        </div>
      </div>
    </div>
  </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
