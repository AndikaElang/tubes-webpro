<div class="col pt-5 mb-4">
	<div class="container mt-5">
		<h2>Tambah Obat</h2>
		<!-- MULAI KONTEN DISINI -->

		<?= form_open_multipart('obat/tambahobat');?>
		
        <div class="col-md-7 mt-3">
			<div class="form-group row">
				<label for="kode_obat" class="col-sm-3 col-form-label">Kode Obat</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="kode_obat" name="kode_obat" placeholder="Kode Obat"
                    value="<?= set_value('kode_obat'); ?>">
					<?= form_error('kode_obat', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row">
				<label for="nama_obat" class="col-sm-3 col-form-label">Nama Obat</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Nama Obat"
                    value="<?= set_value('username'); ?>">
					<?= form_error('nama_obat', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row">
				<label for="role" class="col-sm-3 col-form-label">Jenis Obat</label>
				<div class="col-sm-9">
					<select class="custom-select" name="role">
						<?php foreach ($getrole as $r ) :?>
                            <?php if( set_value('role') == $r['role_id'] ) : ?>
                                <option value="<?= $r['role_id']; ?>" selected><?= $r['role']; ?></option>
                            <?php else : ?>
                                <option value="<?= $r['role_id']; ?>"><?= $r['role']; ?></option>
                            <?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label for="harga" class="col-sm-3 col-form-label">Harga</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="harga" name="harga" value="<?= set_value('harga'); ?>">
					<?= form_error('harga', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row">
				<label for="stok" class="col-sm-3 col-form-label">Stok</label>
				<div class="col-sm-9">
					<input type="number" class="form-control" id="stok" name="stok"
                    value="<?= set_value('stok'); ?>">
					<?= form_error('stok', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row">
				<label for="fungsi" class="col-sm-3 col-form-label">Fungsi</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="fungsi" name="fungsi" rows="2"><?= set_value('fungsi'); ?></textarea>
					<?= form_error('fungsi', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row">
				<label for="aturan" class="col-sm-3 col-form-label">Aturan</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="aturan" name="aturan"
                    value="<?= set_value('aturan'); ?>">
					<?= form_error('aturan', '<small class="form-text text-danger">', '</small>'); ?>
				</div>
			</div>

			<div class="form-group row">
				<label for="gambar" class="col-sm-3 col-form-label">Gambar Obat</label>
				<div class="col-sm-9">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="gambar" name="gambar">
						<label class="custom-file-label" for="foto">Pilih Gambar</label>
						<?= $this->session->flashdata('message'); //pesan error khusus upload ?>
					</div>
				</div>
			</div>
            <hr>
			<div class="form-group row justify-content-end">
				<a type="button" href="<?= base_url('admin/user'); ?>" class="btn btn-secondary form-control mt-2 col-sm-2 mx-1">Batal</a>
				<button type="submit" class="btn btn-success form-control mt-2 col-sm-2 mx-1">Tambah Obat</button>
			</div>
		</div>

		</form>
	</div>
</div>
<script>
    $('.custom-file-input').on('change', function() { 
        let fileName = $(this).val().split('\\').pop(); 
        $(this).next('.custom-file-label').addClass("selected").html(fileName); 
    });
</script>
