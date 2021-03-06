<script src="<?= base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<div class="container">

<a href="<?= base_url('postingan'); ?>" class="btn btn-secondary mb-3">Kembali</a>

	<div class="card">
		<div class="card-body">
			<form action="<?= base_url('postingan/update'); ?>" method="POST">
				<div class="form-group">
					<label>Nama postingan</label>
					<input type="hidden" name="id" value="<?= $postingan['id']; ?>">
					<input type="text" name="nama_postingan" class="form-control" value="<?= $postingan['nama']; ?>">
					
				</div>
				<div class="form-group">
					<label>Kategori postingan</label>
					<select name="id_kategori" class="form-control">
						<?php foreach($kategori as $data): ?>
							<option value="<?= $data['id']; ?>" <?= ($data['id'] == $postingan['id_kategori']) ? 'selected' : '' ?> ><?= $data['nama_kategori']; ?></option>
						<?php endforeach; ?>
					</select>

				</div>
				<div class="form-group">
					<label>Isi postingan</label>
					<textarea class="form-control" name="isi_postingan" id="isi_postingan"><?= $postingan['isi_postingan'] ?></textarea>


				</div>

				<button type="submit" class="btn btn-primary">Simpan</button>
			</form>
		</div>
	</div>
</div>

<script>
	CKEDITOR.replace('isi_postingan');
</script>