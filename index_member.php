
<html>
<head>
	<title>Layanan Pengaduan Masyarakat</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
    <?php
    session_start();

    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
    
    ?>
<div id="header">
	<h1>Layanan Pengaduan Masyarakat</h1>
</div>
<div id="nav">
	<ul>
	<li><a href="index_member.php" class="btn btn-primary">Home </a></li>
	<li><a href="mahasiswa.php" class="btn btn-primary">Forum Pengaduan </a></li>
	<li><a href="dosen.html" class="btn btn-primary">Tracking </a></li>
	</ul>
</div>
<div id="section">
<h1>Layanan Pengaduan </h1>
	<p>
	Layanan ini diperuntukkan bagi masyarakat umum kota padang yang akan mengadukan pelanggaran/penyimpangan yang terjadi
	di lingkungan Kota Padang.
	</p>
	<p>Sebelum melaporkan pengaduan, ada baiknya anda membaca dulu beberapa peraturan dan pedoman di bawah ini:</p>
	<ol start="a">
		<li><a href="https://drive.google.com/file/d/1pUZGWZzMRKNzyCKtkTDAlArivvCL-GvW/view">Permendikbud Nomor 126 Tahun 2014 tentang Penanganan Pengaduan di Lingkungan Kemendikbud</a></li>
		<li><a href="https://drive.google.com/file/d/1FZfSnRtQUCChZqhF2Oxrca_c7bY_iC66/view">Pedoman Penanganan Pengaduan Masyarakat di Lingkungan LPMP Sulawesi Tengah</a></li>
		<li><a href="https://drive.google.com/file/d/1oq9g3Fwosd2x3uOI2Gm2Se9g-yZuHmvm/view">Pedoman Perlindungan dan Penghargaan Pelapor di Lingkungan LPMP Sulawesi Tengah</a></li>
	</ol>
	<p> Penting, pengaduan Anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut:</p>
	<ol>
		<li> What: Perbuatan berindikasi pelanggaran yang diketahui</li>
		<li>Where: Dimana perbuatan tersebut dilakukan</li>
		<li>When: Kapan perbuatan tersebut dilakukan</li>
		<li>Who: Siapa saja yang terlibat dalam perbuatan tersebut</li>
		<li>How: Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb.)</li>
	</ol>
</div>
<div id="footer">
	 © 2021 Riski Meji 
</div>
<script  type="text/javascript" src="js/bootstrap.min.js"></script>
<script  type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
</body>

</html>