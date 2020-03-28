<section class="content-header">
     <h1>
        Users
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-home"></i></a></li>
        <li>Tambah Data</li>
        <li class="active">Tambah Pelanggan</li>
    </ol>
</section>

<section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Pelanggan</h3>
                <div class="pull-right">
                    <a href="<?=site_url('product')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                            <form action="" method="post">
                                <div class="form-group <?=form_error('id_pelanggan')? 'has-error' : null?>">
                                    <label for="">Nama *</label>
                                    <input type="text" name="id_pelanggan" value="<?=set_value('id_pelanggan')?>" class="form-control">
                                    <?=form_error('id_pelanggan')?>
                                </div>
                                <div class="form-group <?=form_error('nama')? 'has-error' : null?>">
                                    <label for="">Nama *</label>
                                    <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control">
                                    <?=form_error('nama')?>
                                </div>
                                <div class="form-group <?=form_error('ip_add')? 'has-error' : null?>">
                                    <label for="">IP Add *</label>
                                    <input type="text" name="ip_add" value="<?=set_value('ip_add')?>" class="form-control">
                                    <?=form_error('ip_add')?>
                                </div>
                                <div class="form-group <?=form_error('koneksi')? 'has-error' : null?>">
                                    <label for="">Koneksi *</label>
                                    <input type="text" name="koneksi" value="<?=set_value('koneksi')?>" class="form-control">
                                    <?=form_error('koneksi')?>
                                </div>
                                <div class="form-group <?=form_error('bdwth')? 'has-error' : null?>">
                                    <label for="">Bdwth *</label>
                                    <input type="text" name="bdwth" value="<?=set_value('bdwth')?>" class="form-control">
                                    <?=form_error('bdwth')?>
                                </div>
                                <div class="form-group <?=form_error('tgl_pasang')? 'has-error' : null?>">
                                    <label for="">Tanggal Pasang *</label>
                                    <input type="date" name="tgl_pasang" value="<?=set_value('tgl_pasang')?>" class="form-control">
                                    <?=form_error('tgl_pasang')?>
                                </div>
                                <div class="form-group <?=form_error('alamat')? 'has-error' : null?>">
                                    <label for="">Alamat *</label>
                                    <input type="text" name="alamat" value="<?=set_value('alamat')?>" class="form-control">
                                    <?=form_error('alamat')?>
                                </div>
                                <div class="form-group <?=form_error('no_wa')? 'has-error' : null?>">
                                    <label for="">No. WhatsApp *</label>
                                    <input type="text" name="no_wa" value="<?=set_value('no_wa')?>" class="form-control">
                                    <?=form_error('no_wa')?>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i> Save</button>
                                    <button type="reset" class="btn btn-flat">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

