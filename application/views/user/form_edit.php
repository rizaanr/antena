<section class="content-header">
     <h1>
        Users
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-home"></i></a></li>
        <li>User</li>
        <li class="active">Edit Usern</li>
    </ol>
</section>

<section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit User</h3>
                <div class="pull-right">
                    <a href="<?=site_url('product')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                            <form action="" method="post">
                                <div class="form-group <?=form_error('id_pelanggan')? 'has-error' : null?>">
                                    <label for="">ID Pelanggan *</label>
                                    <input type="hidden" name="id" value="<?=$row->id?>">
                                    <input type="text" name="id_pelanggan" value="<?=$this->input->post('id_pelanggan') ?? $row->id_pelanggan ?>" class="form-control">
                                    <?=form_error('id_pelanggan')?>
                                </div>
                                <div class="form-group <?=form_error('nama')? 'has-error' : null?>">
                                    <label for="">Nama *</label>
                                    <input type="text" name="nama" value="<?=$this->input->post('nama') ?? $row->nama ?>" class="form-control">
                                    <?=form_error('nama')?>
                                </div>
                                <div class="form-group <?=form_error('ip_add')? 'has-error' : null?>">
                                    <label for="">IP Add *</label>
                                    <input type="text" name="ip_add" value="<?=$this->input->post('ip_add') ?? $row->ip_add ?>" class="form-control">
                                    <?=form_error('ip_add')?>
                                </div>
                                <div class="form-group <?=form_error('koneksi')? 'has-error' : null?>">
                                    <label for="">Koneksi *</label>
                                    <input type="text" name="koneksi" value="<?=$this->input->post('koneksi') ?? $row->koneksi ?>" class="form-control">
                                    <?=form_error('koneksi')?>
                                </div>
                                <div class="form-group <?=form_error('bdwth')? 'has-error' : null?>">
                                    <label for="">Bdwth *</label>
                                    <input type="text" name="bdwth" value="<?=$this->input->post('bdwth') ?? $row->bdwth ?>" class="form-control">
                                    <?=form_error('bdwth')?>
                                </div>
                                <div class="form-group <?=form_error('tgl_pasang')? 'has-error' : null?>">
                                    <label for="">Tanggal Pasang *</label>
                                    <input type="date" name="tgl_pasang" value="<?=$this->input->post('tgl_pasang') ?? $row->tgl_pasang ?>" class="form-control">
                                    <?=form_error('tgl_pasang')?>
                                </div>
                                <div class="form-group <?=form_error('alamat')? 'has-error' : null?>">
                                    <label for="">Alamat *</label>
                                    <input type="text" name="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat ?>" class="form-control">
                                    <?=form_error('alamat')?>
                                </div>
                                <div class="form-group <?=form_error('no_wa')? 'has-error' : null?>">
                                    <label for="">No. WhatsApp *</label>
                                    <input type="text" name="no_wa" value="<?=$this->input->post('no_wa') ?? $row->no_wa ?>" class="form-control">
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

