<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?>
        </h1>
    </div>

    <div class="card" style="width: 60%">
        <div class="card-body">
            <!-- FORM INPUT DATA -->
            <?php foreach ($rekomendasi as $r) : ?>
            <form method="POST" action="<?php echo base_url('administrator/pengajuan_rekom/update_data_aksi') ?>">
                <div class="form-group">
                    <label>Nama Pemilik</label>
                    <input type="hidden" name="id_rekomendasi" class="form-control"
                        value="<?php echo $r->id_rekomendasi ?>">
                    <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $r->nama_pemilik ?>">
                    <?php echo form_error('nama_pemilik', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <div class="form-group">
                    <label>No. Surat</label>
                    <input type="text" name="no_surat" class="form-control" value="<?php echo $r->no_surat ?>">
                    <?php echo form_error('no_surat', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="<?php echo $r->nik ?>">
                    <?php echo form_error('nik', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $r->alamat ?>">
                    <?php echo form_error('alamat', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <div class=" form-group">
                    <label>No. Hp</label>
                    <input type="text" name="telp" class="form-control" value="<?php echo $r->telp ?>">
                    <?php echo form_error('telp', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama_usaha" class="form-control" value="<?php echo $r->nama_usaha ?>">
                    <?php echo form_error('nama_usaha', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <div class="form-group">
                    <label>Jenis Usaha </label>
                    <input type="text" name="jenis_usaha" class="form-control" value="<?php echo $r->jenis_usaha ?>">
                    <?php echo form_error('jenis_usaha', '<div class="text-small text-danger"></div>'); ?>
                </div>

                <button type="submit" class="btn btn-success">Update</button>

            </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>