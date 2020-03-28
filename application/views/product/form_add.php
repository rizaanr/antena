<section class="content-header">
     <h1>
        Users
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=site_url('dashboard')?>"><i class="fa fa-home"></i></a></li>
        <li>Tambah Data</li>
        <li class="active">Tambah Antena</li>
    </ol>
</section>

<section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tambah Anten</h3>
                <div class="pull-right">
                    <a href="<?=site_url('product')?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Back</a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">

                            <form action="" method="post">
                                <div class="form-group <?=form_error('nama')? 'has-error' : null?>">
                                    <label for="">Nama *</label>
                                    <input type="text" name="nama" value="<?=set_value('nama')?>" class="form-control">
                                    <?=form_error('nama')?>
                                </div>
                                <div class="form-group <?=form_error('tipe')? 'has-error' : null?>">
                                    <label for="">Type *</label>
                                    <input type="text" name="tipe" value="<?=set_value('tipe')?>" class="form-control">
                                    <?=form_error('tipe')?>
                                </div>
                                <div class="form-group <?=form_error('ip_add')? 'has-error' : null?>">
                                    <label for="">IP Add *</label>
                                    <input type="text" name="ip_add" value="<?=set_value('ip_add')?>" class="form-control">
                                    <?=form_error('ip_add')?>
                                </div>
                                <div class="form-group <?=form_error('freq')? 'has-error' : null?>">
                                    <label for="">Freq *</label>
                                    <input type="text" name="freq" value="<?=set_value('freq')?>" class="form-control">
                                    <?=form_error('freq')?>
                                </div>
                                <div class="form-group <?=form_error('cw')? 'has-error' : null?>">
                                    <label for="">CW *</label>
                                    <input type="text" name="cw" value="<?=set_value('cw')?>" class="form-control">
                                    <?=form_error('cw')?>
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

