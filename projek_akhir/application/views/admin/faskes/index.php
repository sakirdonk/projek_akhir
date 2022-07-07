<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Faskes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/faskes')?>">Home</a></li>
                        <li class="breadcrumb-item active">Faskes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Kelola Daftar Faskes</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <a class="btn btn-success" href="<?= base_url('index.php/admin/faskes/create')?>" role="button">Tambahkan Faskes</a>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th style="width: 15%;">Nama Faskes</th>
                            <th>Alamat</th>
                            <th>Rating</th>
                            <th>Kecamatan</th>
                            <th>Jumlah Dokter</th>
                            <th>Jumlah Pegawai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_faskes as $faskes) { ?>
                            <tr>
                                <td><?= $faskes->id ?></td>
                                <td><?= $faskes->nama_faskes ?></td>
                                <td><?= $faskes->alamat ?></td>
                                <td style="text-align: center;"><?= $faskes->skor_rating ?></td>
                                <td style="text-align: center;"><?= $faskes->kecamatan ?></td>
                                <td style="text-align: center;"><?= $faskes->jumlah_dokter ?></td>
                                <td style="text-align: center;"><?= $faskes->jumlah_pegawai ?></td>
                                <td style="width:22%;";>
                                    <a class='btn btn-success' href="<?=base_url('index.php/admin/faskes/view?id=').$faskes->id ?>">View</a>
                                    <a class='btn btn-primary' href="<?=base_url('index.php/admin/faskes/edit?id=').$faskes->id ?>">Edit</a>
                                    <a class='btn btn-danger' href="<?=base_url('index.php/admin/faskes/delete?id=').$faskes->id ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Data Rumah Sakit <?= $faskes->nama_faskes ?>')) {return false}">Delete</a>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>