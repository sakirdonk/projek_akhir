<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Komentar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/faskes')?>">Home</a></li>
                        <li class="breadcrumb-item active">Komentar</li>
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
                <h3 class="card-title">Kelola Daftar Komentar</h3>

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
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Nama Faskes</th>
                            <th>Rating</th>
                            <th>Total Komentar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor =1;
                        foreach ($list_komentar as $komentar) { ?>
                            <tr style="text-align: center;">
                                <td><?= $nomor?></td>
                                <td><?= $komentar->nama_faskes ?></td>
                                <td><?= $komentar->rating ?></td>
                                <td><?= $komentar->total_komentar ?></td>
                                <td>
                                    <a class='btn btn-success' href="<?=base_url('index.php/admin/komentar/view?id=').$komentar->nama_faskes ?>">View</a>
                                </td>
                            </tr>
                        <?php
                        $nomor++;
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