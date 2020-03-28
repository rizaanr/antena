<section class="content-header">
      <h1>
        Data Antena
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data User</h3>
                    <div class="pull-right">
                </div>
                    <div class="col-md-12 table-responsive" style="margin-top: 20px;">
                        <table id="tables" class="table table-striped table-bordered" cellspasing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th>ID Pelanggan</th>
                                    <th>Nama</th>
                                    <th>IP Address</th>
                                    <th>Koneksi</th>
                                    <th>bdwth</th>
                                    <th>Tanggal Pasang</th>
                                    <th>Alamat</th>
                                    <th>No. WhatsApp</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($row->result() as $nama => $data) {
                                ?>
                            <tr>
                                <td><?= $no++;?></td>
                                <td><?= $data->id_pelanggan;?></td>
                                <td><?= $data->nama;?></td>
                                <td><?= $data->ip_add;?></td>
                                <td><?= $data->koneksi ?></td>
                                <td><?= $data->bdwth ?></td>
                                <td><?= $data->tgl_pasang ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->no_wa ?></td>
                                <td class="text-center" width="160px">
                                    <form action="<?=site_url('user/del')?>" method="post">
            
                                    <a href="<?=site_url('user/edit/'.$data->id)?>" class="btn btn-primary btn-xs">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>

                                        <input type="hidden" name="id" value="<?=$data->id?>">
                                        <button class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>