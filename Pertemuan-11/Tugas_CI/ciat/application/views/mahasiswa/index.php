<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h1>Data Mahasiswa</h1>
			<ul class="list-group">
				<?php
				foreach ($mahasiswa as $mhs) {
				?>
  <li class="list-group-item"><?= $mhs['Nama']; ?></li>
	<?php } ?>
</ul>
		</div>
	</div>
</div>
