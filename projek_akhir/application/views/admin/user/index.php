<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/faskes')?>">Home</a></li>
                        <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Kelola Daftar User</h3>

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
                <a class="btn btn-success" href="<?= base_url('index.php/admin/user/create')?>" role="button">Tambahkan User</a>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($list_user as $user) { ?>
                            <tr style="text-align: center;">
                                <td><?= $user->id ?></td>
                                <td><?= $user->username ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->status ?></td>
                                <td><?= $user->role ?></td>
                                <td>
                                    <a class='btn btn-success' href="<?=base_url('index.php/admin/user/view?id=').$user->id ?>">View</a>
                                    <a class='btn btn-primary' href="<?=base_url('index.php/admin/user/edit?id=').$user->id ?>">Edit</a>
                                    <a class='btn btn-danger' href="<?=base_url('index.php/admin/user/delete?id=').$user->id ?>" onclick="if(!confirm('Anda Yakin Ingin Menghapus User <?= $user->username ?>')) {return false}">Delete</a>
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