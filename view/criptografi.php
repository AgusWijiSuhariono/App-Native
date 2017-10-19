<div class="row">
	<div class="col-lg-12">
		<h3>Hashing</h3>
		<p>
			SHA1
		</p>
		<p>
		mari belajar pemrograman :
		<?php
		echo hash('sha1', 'mari belajar pemrograman');
		?>
		</p>
		<br>
		<p>
			MD5
		</p>
		<p>
		mari belajar pemrograman :
		<?php
		echo hash('md5', 'mari belajar pemrograman');
		?>
		</p>
		<br>
		<p>
			Whirlpool
		</p>
		<p>
		mari belajar pemrograman :
		<?php
		echo hash('whirlpool', 'mari belajar pemrograman');
		?>
		</p>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h3>Encoding</h3>
		<p>
			Base 64
		</p>
		<p>
			Encoding : mari belajar pemrograman ->
			<?php
			echo base64_encode('mari belajar pemrograman');
			?>
		</p>
		<p>
			Decoding : bWFyaSBiZWxhamFyIHBlbXJvZ3JhbWFu -> 
			<?php
			echo base64_decode('bWFyaSBiZWxhamFyIHBlbXJvZ3JhbWFu');
			?>
		</p>
	</div>
</div>
<br><br>
<div class="row">
	<div class="col-lg-12">
		<?php		
		function encrypt($string, $key) {
		    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, utf8_encode($string), MCRYPT_MODE_ECB, $iv);
		    return $encrypted_string;
		}

		function decrypt($encrypted_string, $key) {
		    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
		    return $decrypted_string;
		}
		?>
		<h3>Enkripsi</h3>
		<p>	
			Encrypt :  <br>
			String Yang di enkripsi : 'mari belajar pemrograman'<br> 
			menjadi : 
			<?php
			$encrypted_string =  encrypt("mari belajar pemrograman", "blablabla");
			echo $encrypted_string;
			?>
		</p>
		<p>
			Decrypt : <br>
			String Yang akan di decrypt : <?= $encrypted_string ?><br>
			menjadi : 
			<?php
			echo  decrypt($encrypted_string, "blablabla");
			?>
		</p>
	</div>
</div>
