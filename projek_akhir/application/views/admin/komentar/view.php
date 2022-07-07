<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Komentar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/faskes')?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/komentar')?>">Komentar</a></li>
                        <li class="breadcrumb-item active">View</li>
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
                <h3 class="card-title">View Data Komentar</h3>

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
                <a class='btn btn-success' href="<?= base_url('index.php/admin/komentar/index') ?>">Kembali</a>
                <br>
                <br>
                <?php 
                    $id = $this->input->get('id');
                    echo $id;
                ?>
                <br>
                <br>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User</th>
                            <th>Isi Komentar</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $nomor = 1;
                        foreach($list_komentar as $komentar) { ?>
                        <tr>
                            <td><?= $nomor ?></td>
                            <td><?= $komentar->nama_user ?></td>
                            <td><?= $komentar->isi ?></td>
                            <td><?= $komentar->rating ?></td>                            
                            <td><a class='btn btn-danger' href="<?=base_url('index.php/admin/komentar/delete?id=').$komentar->id ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus Komentar <?= $komentar->nama_user ?>')) {return false}">Delete</a></td>
                        </tr>
                        <?php 
                $nomor++;    
                }
                    ?>
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