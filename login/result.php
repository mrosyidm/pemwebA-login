<?php
$temp = $_FILES['upload']['tmp_name'];
$jeneng = $_FILES['upload']['name'];
rename($temp, $jeneng);

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="hces.css">
<title>BRAWIJAYA CARD</title>
</head>
<body>
	<div class="cover">
			<div class="judul">
				<h1><a>Brawijaya<span>Card</span></a></h1>
			</div>
					<div class="pasfoto">
						<img src="<?php echo $jeneng; ?>" alt=""/>
					</div>
				<div style="padding-left: 25px; float: left;">
					<div class="w3ls-banner-left-info">
						<h4>USERNAME</h4>
						<p><?php
        				echo $_POST['uname'];
        				?></p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>EMAIL</h4>
						<p><?php
        				echo $_POST['email'];
        				?></p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>JENIS KELAMIN</h4>
						<p><?php
        				echo $_POST['gender'];
        				?></p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>ALAMAT ASAL</h4>
						<p><?php
        				echo $_POST['thetext'];
        				?></p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>JALUR MASUK</h4>
						<p><?php
        				echo $_POST['jalur'];
        				?></p>
					</div>
					<div class="w3ls-banner-left-info">
						<h4>HOBI</h4>
						<p>
						<?php
						$hb = $_POST['hobi'];	
    					foreach ($hb as $hobi){
        				echo $hobi;
        				echo "<br>";
    					}
        				?></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>	
</html>