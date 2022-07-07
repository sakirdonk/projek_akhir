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
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/user')?>">User</a></li>
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
                <h3 class="card-title">View Data Faskes</h3>

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
                <a class='btn btn-success' href="<?=base_url('index.php/admin/user/index')?>">Kembali</a>
                <table class="table table-striped" width="100%">
                    <tbody>
                        <tr>
                            <td>Nama User</td>
                            <td><?= $list_user->username ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $list_user->email ?></td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td><?= $list_user->created_at ?></td>
                        </tr>
                        <tr>
                            <td>Last Login</td>
                            <td><?= $list_user->last_login ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= $list_user->status ?></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td><?= $list_user->role ?></td>
                        </tr>
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