<?php
error_reporting(0);
?>
<!--
    ********************************************************
    Fake Generator - Pengumuman SELEKSI SBMPTN LTMPTN 2020
    Author: @naufalist //https://github.com/naufalist/sbmptn
    Original Source Code: Tim TIK LTMPT 2020
    ********************************************************
-->
<!DOCTYPE html>
<html lang="id">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <!--script async src="https://www.googletagmanager.com/gtag/js?id=UA-143196243-1"></script-->
	<!--script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-143196243-1');

	gtag('event', 'play', { 'event_category': 'Server Name', 'event_action': 'Server', 'event_label': window.location.hostname });
	gtag('event', 'play', { 'event_category': 'Page Name', 'event_action': 'Page', 'event_label': 'index.html' });
	</script-->
	<!-- End Google Analytics -->
	<!-- Matomo -->
	<!--script type="text/javascript">
	  var _paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="https://analytics.ipb.ac.id/";
	    _paq.push(['setTrackerUrl', u+'matomo.php']);
	    _paq.push(['setSiteId', '22']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script-->
	<!-- End Matomo Code -->

	<title>Pengumuman SBMPTN LTMPT 2020</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" /-->	
		
	<link rel="apple-touch-icon" sizes="180x180" href="images/icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icon/favicon-16x16.png">
	<link rel="manifest" href="images/icon/site.webmanifest">
	<link rel="mask-icon" href="images/icon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="images/icon/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="images/icon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="sbmptn.css" />
	<script type="text/javascript" src="sbmptn.js"></script>
	<!-- Sweetalert -->
	<link rel="stylesheet" type="text/css" href="sweetalert.css">
	<script type="text/javascript" src="sweetalert.min.js"></script>
	<!-- Validasi Form -->
	<script>
	function validateForm() {
        var x = document.forms["sbm"]["nopes"].value;
        var p = x.substring(0, 3);
        if ((x.length !== 12) || ((p !== "120") && (p !== "220"))) {
            setTimeout(function () { swal("Invalid!","Mohon periksa kembali penulisan Nomor Pendaftaran!\n\nKetentuan:\n- Jumlah digit 12\n- Diawali 120 (SAINTEK) atau 220 (SOSHUM)","error")}, 1000);
            return false;
        }
	}
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="p-3 d-none d-sm-block">
			<div class="row">
				<div class="col-12 col-sm-5 d-none d-sm-block">
					<div class="text-center">
						<img src="images/logo-home.png" class="img-fluid" alt="Logo LTMPT" />
					</div>
				</div>
				<div class="col-10 col-sm-5 d-none d-sm-block">
					<div class="text-center">
						<img src="images/sponsor.png" class="img-fluid" alt="Logo Sponsor" />
					</div>
				</div>
				<div class="col-2 col-sm-2 d-none d-sm-block">
					<div class="text-center">
						<img src="images/indonesia-75.png" class="img-fluid" width="62" height="100" alt="Logo HUT Indonesia ke-75" />
					</div>
				</div>
			</div>
			
		</div>

		<div class="p-1 d-block d-sm-none">
			<div class="row">
				<div class="col-9 d-block d-sm-none">
					<div class="row ml-1 mt-2">
						<div class="col-12">
							<div class="text-center">
								<img src="images/logo-home.png" class="img-fluid" alt="Logo LTMPT" />
							</div>
						</div>
						<div class="col-12">
							<div class="text-center">
								<img src="images/sponsor.png" class="img-fluid" alt="Logo Sponsor" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-3 d-block d-sm-none mt-2">
					<div class="text-center">
						<img src="images/indonesia-75.png" class="img-fluid" width="62" height="100" alt="Logo HUT Indonesia ke-75" />
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm">
				<div class="header-bottom-line"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<div class="marquee"></div>
			</div>
		</div>
	</div>
	
    <div class="container" id="main" style="display: block;">
		<div class="void"></div>
		<div class="row m-1">
			<div class="col-12 text-center">
				<span class="title">PENGUMUMAN HASIL SELEKSI SBMPTN LTMPT 2020</span>
			</div>
		</div>
		<div class="void"></div>

		<div class="row mx-auto box-width m-1" id="error" style="display: none;">
			<div class="col-12 text-center">
				<div class="alert alert-danger" id="error-msg">
		        </div>
			</div>
			<div class="void"></div>
		</div>

		<div class="card card-block bg-faded mx-auto box-width">
			<div class="card-header">
				<strong>Silahkan Masukkan data peserta SBMPTN Anda.</strong>	
			</div>
			<div class="card-body">
				<form name="sbm" method="POST" action="">
				<!-- <form name="sbm" method="POST" onsubmit="return validateForm()" action=""> -->
				<!--div class="form-group">
					<label for="nopes">Nomor peserta SBMPTN</label>
					<input type="number" id="nopes" class="form-control no-spinners" tabindex="1" size="10" autocomplete="off">
					<small id="nopes-help" class="form-text text-muted">Masukkan 10-digit nomor peserta SBMPTN Anda.</small>
				</div-->
				<div class="form-group">
					<label for="nopes">Nomor peserta SBMPTN</label>
					<input type="number" id="nopes" name="nopes" class="form-control no-spinners" tabindex="1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="12" autocomplete="off" required="">
					<small id="nopes-help" class="form-text text-muted">Masukkan 12-digit nomor peserta UTBK-SBMPTN Anda.</small>
				</div>
				<div class="form-group">
					<label for="nama">Nama peserta</label>
					<input type="text" id="nama" name="nama" class="form-control no-spinners" tabindex="2" autocomplete="off" style="text-transform:uppercase" required="">
					<small id="nama-help" class="form-text text-muted">Masukkan nama peserta Anda.</small>
				</div>
				<div class="form-group">
					<label>Tanggal lahir Anda</label>
					<div class="form-row">
                        <!--
						<div class="col">
							<input type="number" id="day" class="form-control no-spinners" tabindex="2" maxlength="2"  size="2" autocomplete="off" placeholder="dd">
							<small id="day-help" class="form-text text-muted">Tanggal (2 digit): 01-31</small>
						</div>
						<div class="col">
							<input type="number" id="month" class="form-control no-spinners" tabindex="3" maxlength="2"  size="2" autocomplete="off" placeholder="mm">
							<small id="month-help" class="form-text text-muted">Bulan (2 digit): 01-12</small>
						</div>
						<div class="col">
							<input type="number" id="year" class="form-control no-spinners" tabindex="4" maxlength="4"  size="4" autocomplete="off" placeholder="yyyy">
							<small id="year-help" class="form-text text-muted">Tahun (4 digit): 1978-2009</small>
						</div>
                        -->
						<div class="col">
							<select name="day" id="day" class="form-control no-spinners" tabindex="3" autocomplete="off" required="">
								<option value="" disabled="" selected="">dd</option>
<?php
    for ($i = 1; $i <= 31; $i++) {
        if (strlen((string)$i) == 1) {
?>
                                <option value="0<?php echo $i; ?>">0<?php echo $i; ?></option>
<?php
        } else {
?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
        }
    }
?>
                            </select>
							<small id="day-help" class="form-text text-muted">Tanggal (2 digit): 01-31</small>
						</div>
						<div class="col">
							<select name="month" id="month" class="form-control no-spinners" tabindex="4" autocomplete="off" required="">
								<option value="" disabled="" selected="">mm</option>
<?php
    for ($i = 1; $i <= 12; $i++) {
        if (strlen((string)$i) == 1) {
?>
                                <option value="0<?php echo $i; ?>">0<?php echo $i; ?></option>
<?php
        } else {
?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
        }
    }
?>
							</select>
							<small id="month-help" class="form-text text-muted">Bulan (2 digit): 01-12</small>
						</div>
						<div class="col">
							<select name="year" id="year" class="form-control no-spinners" tabindex="5" autocomplete="off" required="">
								<option value="" disabled="" selected="">yyyy</option>
<?php
    for ($i = 2010; $i >= 1978; $i--) {
?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
    }
?>
                            </select>
							<small id="year-help" class="form-text text-muted">Tahun (4 digit): 1978-2010</small>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="bidikmisi">Peserta Bidik Misi?</label>
					<select name="bidikmisi" id="bidikmisi" class="form-control no-spinners" tabindex="6" autocomplete="off" required="">
						<option value="tidak" selected="">Tidak</option>
						<option value="ya">Ya</option>
					</select>
					<small id="jurusan-help" class="form-text text-muted">Apakah Anda peserta bidik misi?</small>
				</div>
				<div class="form-group">
					<label for="kodeptn">PTN</label>
					<select name="kodeptn" id="kodeptn" class="form-control no-spinners" tabindex="7" autocomplete="off" required="">
						<option value="" selected="">-- Pilih PTN --</option>
					</select>
					<small id="kodeptn-help" class="form-text text-muted">Pilih PTN Anda.</small>
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select name="jurusan" id="jurusan" class="form-control no-spinners" tabindex="8" autocomplete="off" required="">
						<option value="" selected="">-- Pilih Jurusan --</option>
					</select>
					<small id="jurusan-help" class="form-text text-muted">Pilih Jurusan Anda.</small>
				</div>
				<div class="form-group">
					<label for="prodi">Prodi</label>
					<select name="prodi" id="prodi" class="form-control no-spinners" tabindex="9" autocomplete="off" required="">
						<option value="" selected="">-- Pilih Prodi --</option>
					</select>
					<small id="prodi-help" class="form-text text-muted">Pilih Prodi Anda.</small>
				</div>
				<button id="search" class="btn btn-primary" type="submit" name="submit">Buat Bangga Temanmu!</button>
				<br>
                </form>
			</div>
		</div>
		<p class="text-center"><small class="text-muted">&copy; 2020. <b>Bukan</b> Lembaga Tes Masuk Perguruan Tinggi</small></p>
	
	</div>

	<div class="container" id="accepted" style="display: none;">
		<div class="void"></div>
		<div class="row m-1">
			<div class="col-12 text-center">
				<span class="title">PENGUMUMAN HASIL SELEKSI SBMPTN LTMPT 2020</span>
			</div>
		</div>
		<div class="void"></div>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-12 col-sm-4">
						<img id="qr-terima" class="img-fluid" src="images/qrimg.png">
					</div>
					<div class="col-12 col-sm-8">
						<div class="container" style="background-color: #f8f8f8; padding:15px;">
							<div class="row no-gutters">
								<div class="col-auto col-sm-3">
									Nomor peserta Anda
								</div>
								<div class="col-6 col-sm-1">
									:
								</div>
								<div class="col-12 col-sm-8" style="font-weight: bold;">
									<span id="no-peserta-diterima"><?php if(isset($_POST['submit'])){
										
										echo substr($_POST["nopes"], 0,3);
										echo " - ";
										echo substr($_POST["nopes"], 3,3);
										echo " - ";
										echo substr($_POST["nopes"], 6,2);
										echo " - ";
										echo substr($_POST["nopes"], -4);
										
									}?></span>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-auto col-sm-3">
									Nama Anda
								</div>
								<div class="col-6 col-sm-1">
									:
								</div>
								<div class="col-12 col-sm-8" style="font-weight: bold;">
									<span id="nama-peserta-diterima"><?php if(isset($_POST['submit'])){echo strtoupper($_POST["nama"]);} ?></span>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-auto col-sm-3">
									Tanggal lahir Anda
								</div>
								<div class="col-6 col-sm-1">
									:
								</div>
								<div class="col-12 col-sm-8" style="font-weight: bold;">
									<span id="tgllahir-peserta-diterima"><?php if(isset($_POST['submit'])){echo $_POST["day"]; echo " - "; echo $_POST["month"]; echo " - "; echo $_POST["year"];} ?></span>
								</div>	
							</div>
							<br>
							<div class="row">
								<div class="col-12">
									<span style="font-size: 1.1em;">Selamat! Anda dinyatakan lulus seleksi SBMPTN LTMPT 2020 di</span>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-auto col-sm-3">
									Perguruan Tinggi Negeri
								</div>
								<div class="col-6 col-sm-1">
									:
								</div>
								<!--div class="col-12 col-sm-8">
									<span style="font-size: 1.1em; font-weight: bold;"><span id="kode-ptn-terima"></span> - <span id="nama-ptn-terima"></span></span>
								</div-->
								<div class="col-12 col-sm-8">
									<span style="font-size: 1.1em; font-weight: bold;"><span><?php if(isset($_POST['submit'])){echo $_POST["kodeptn"];} ?></span></span>
								</div>
							</div>
							<div class="row no-gutters">
								<div class="col-auto col-sm-3">
									Program Studi
								</div>
								<div class="col-6 col-sm-1">
									:
								</div>
								<!--div class="col-12 col-sm-8">
									<span style="font-size: 1.1em; font-weight: bold;"><span id="kode-prodi-terima"></span> - <span id="nama-prodi-terima"></span></span>
								</div-->
								<div class="col-12 col-sm-8">
									<span style="font-size: 1.1em; font-weight: bold;"><span><?php if(isset($_POST['submit'])){echo $_POST["prodi"];} ?></span></span>
								</div>
							</div>
							<br>
							<div class="row" id="bidik-misi" style="display: none;">
								<div class="col-12">
									<p style="color: red;">Anda sebagai pendaftar  Program  Indonesia  Pintar  Pendidikan  Tinggi,  calon  pemegang  Kartu Indonesia Pintar Kuliah (KIP Kuliah) harus lolos verifikasi terhadap data akademik dan verifikasi  data  ekonomi  melalui  dokumen  dan/atau  kunjungan  ke  alamat  tinggal Peserta.</p>
									<!-- <p style="color: red;">Anda sebagai pemohon program BIDIKMISI, keputusan DITERIMA atau TIDAKNYA permohonan program BIDIKMISI Anda akan disampaikan oleh Rektor PTN di mana Anda diterima berdasarkan hasil VERIFIKASI.</p> -->
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<span>Persyaratan pendaftaran ulang calon mahasiswa baru dapat dilihat di <a id="url-daftar" target="_blank" href="">sini</a>.</span>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-12">
									<span>Anda dapat mencetak kembali Kartu Tanda Peserta UTBK-SBMPTN 2020 di <a target="_blank" href="https://portal.ltmpt.ac.id">sini</a>.</span>
									<!-- <span>Anda dapat mencetak kembali Kartu Tanda Peserta SBMPTN 2019 di <a target="_blank" href="https://pendaftaran-sbmptn.ltmpt.ac.id">sini</a>.</span> -->
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-12">
									<a class="btn btn-block btn-info btn-wrap-text flash-button" target="_blank" href="#">UNDUH PENGUMUMAN KETUA LTMPT (PDF)</a><!-- pengumuman_peserta_lulus.pdf -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer">
				<a id="accepted-back" class="btn btn-block btn-success" href="">Kembali ke pencarian</a>
			</div>
		</div>
	</div>
	
	<div class="container" id="not-accepted" style="display: none;">
		<div class="void"></div>
		<div class="row m-1">
			<div class="col-12 text-center">
				<span class="title">PENGUMUMAN HASIL SELEKSI SBMPTN 2020</span>
			</div>
		</div>
		<div class="void"></div>
		<div class="card card-block bg-faded mx-auto">
			<div class="card-body">
				<p class="text-center" style="font-size: 1em;">
					PESERTA ATAS NAMA <strong><span id="nama-peserta-tidak-terima"></span></strong> DENGAN NOMOR PESERTA <strong><span id="no-peserta-tidak-diterima"></span></strong> DINYATAKAN <strong>TIDAK DITERIMA</strong> PADA SBMPTN LTMPT 2020.
				</p>
				<p class="text-center" style="font-weight: bold; font-size: 1.5em;">JANGAN PUTUS ASA DAN TETAP SEMANGAT!</p>
			</div>
			<div class="card-footer">
				<a id="not-accepted-back" class="btn btn-block btn-success" href="">Kembali ke pencarian</a>
			</div>
		</div>
	</div>

	<div class="void"></div>

	<!-- footer class="footer">
      <div class="container">
        <p class="text-muted text-center">Panitia Pusat SBMPTN 2020</p>
      </div>
    </footer -->

	<!--script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script-->
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<!--script src="sbmptn.min.js"></script-->
    <!--
	<noscript>
		<meta http-equiv="refresh" content="0; url=/nojs.html" />
	</noscript>
    -->
<?php
if (isset($_POST['submit'])) {
    echo '
        <script type="text/javascript">
        setTimeout(function () { swal("Selamat!","Selamat pansos dan jangan lupa sensor dulu :)","success")}, 1000);
        </script>
    ';
    echo '
        <script type="text/javascript">
        document.getElementById("main").style.display = "none";
        document.getElementById("accepted").style.display = "block";
        </script>
    ';
	if ($_POST['bidikmisi'] == 'ya') {
		echo '
			<script type="text/javascript">
			document.getElementById("bidik-misi").style.display = "block";
			</script>
    	';
	}
} else {
    echo '
        <script type="text/javascript">
        setTimeout(function () { swal("Perhatian!","Untuk sementara, format No Peserta yang saya tau:\nprefix 120, 12 digit\nex: 120XXXXXXXXX\n\nKalo sekiranya ada yg perlu diralat, contact saya via sosmed ya gan/sis, makasii\n\nIni hanya untuk hiburan semata.\nGunakan dengan bijak!","warning")}, 1000);
        </script>
    ';
}
?>	
</body>
</html>
