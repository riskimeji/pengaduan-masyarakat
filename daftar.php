<?php
session_start();

if(isset($_SESSION['email'])){
	header("location:index.php?pesan=andasudahlogin");
}
?>
<html>
    <head>
        <title>Padang</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style>
        #header {
            background-color:black;
            color:white;
            text-align:center;
            padding:5px;
        }
        #nav {
            line-height:30px;
            background-color:#eee;
            height:300px;
            width:12%;
            float:left;
            padding:5px;
        }
        #section  {
            width:80%;
            float:left;
            padding:10px;
        }
        #footer {
            background-color:black;
            color:white;
            clear:both;
            text-align:center;
            padding:5px;
        }
        ul {
            list-style-type:none;
            padding:0;
            margin:0;
            
        }
        </style>
    </head>
    <body>
        <div id="header">
            <h1>Layanan Pengaduan Masyarakat</h1>
        </div>
        <div id="nav">
	<ul>
	<li><a href="index.html" class="btn btn-primary">Home </a></li>
	<li><a href="login.php" class="btn btn-primary">Login </a></li>
	<li><a href="daftar.php" class="btn btn-primary">Daftar </a></li>
	</ul>
</div>
<?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Email dan Password Tidak sesuai !</div>";
            }
        }
        ?>
    <div id="section">
        <h2>Daftar</h2><br/>
<form action="proses_daftar.php" method="POST" >
<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control"><br/>
<input type="email" name="email" placeholder="Email" class="form-control"><br/>
<input type="password" name="password" placeholder="password" class="form-control"><br/>
<input type="submit" name="submit" value="SUBMIT" class="btn btn-primary">
<input type="reset" name="reset" value="RESET" class="btn btn-danger">
</form>
    </div>
    <div id="footer">
	 ?? 2021 Riski Meji 
</div>
<script  type="text/javascript" src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</body>

</html>