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
		<h3>Enkripsi</h3>
		<p>	
			Cript : mari belajar pemrograman ->
			<?php
			echo crypt('mari belajar pemrograman');
			?>
		</p>
		<p>
			Decrypt :
			<br>
			<?php
			$paswordcrypted = crypt('mari belajar pemrograman');
			if (hash_equals($paswordcrypted, crypt('mari belajar pemrograman', $paswordcrypted))) {
		   		echo "Data Enkripsi Sesuai";
			}else{
				echo "Data Tidak sesuai";
			}
			?>
		</p>
	</div>
</div>
