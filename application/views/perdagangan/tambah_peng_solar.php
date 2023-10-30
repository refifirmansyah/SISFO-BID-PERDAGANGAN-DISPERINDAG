<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
        </div>

        <div class="card" style="width: 60%">
            <div class="card-body">
                <?php echo form_open_multipart('perdagangan/pengajuan_rekom/tambah_data_aksi') ?>
                <div class="form-group">
                    <label>No. Surat</label>
                    <input type="text" name="no_surat" class="form-control"
                        value="<?php echo set_value('no_surat'); ?>">
                    <?php echo form_error('no_surat', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Nama Pemilik</label>
                    <input type="text" name="nama_pemilik" class="form-control"
                        value="<?php echo set_value('nama_pemilik'); ?>">
                    <?php echo form_error('nama_pemilik', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" value="<?php echo set_value('nik'); ?>">
                    <?php echo form_error('nik', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo set_value('alamat'); ?>">
                    <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>No. Hp</label>
                    <input type="text" name="telp" class="form-control" value="<?php echo set_value('telp'); ?>">
                    <?php echo form_error('telp', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Nama Usaha</label>
                    <input type="text" name="nama_usaha" class="form-control"
                        value="<?php echo set_value('nama_usaha'); ?>">
                    <?php echo form_error('nama_usaha', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" class="form-control"
                        value="<?php echo set_value('jenis_usaha'); ?>">
                    <?php echo form_error('jenis_usaha', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Upload SKU</label>
                    <input type="file" name="upload_sku" class="form-control">
                    <?php echo form_error('upload_sku', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Upload Mesin/ Tempat Usaha</label>
                    <input type="file" name="up_mesin_tempat" class="form-control">
                    <?php echo form_error('up_mesin_tempat', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Upload Surat Pengajuan</label>
                    <input type="file" name="up_surat_pengajuan" class="form-control">
                    <?php echo form_error('up_surat_pengajuan', '<div class="text-small text-danger">', '</div>'); ?>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</body>

</html>