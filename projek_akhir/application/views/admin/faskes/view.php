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
                        <li class="breadcrumb-item"><a href="<?=base_url('index.php/admin/faskes')?>">Faskes</a></li>
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
                <a class='btn btn-success mb-3' href="<?=base_url('index.php/admin/faskes/index')?>">Kembali</a>
                <table class="table table-striped" width="100%">
                    <tbody>
                        <tr>
                            <td>Nama Faskes</td>
                            <td><?= $list_faskes->nama_faskes ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Faskes</td>
                            <td><?= $list_faskes->jenis_faskes ?></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Faskes</td>
                            <td><?= $list_faskes->deskripsi ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $list_faskes->alamat ?></td>
                        </tr>
                        <tr>
                            <td>Koordinat Lokasi</td>
                            <td><?= $list_faskes->latlong ?></td>
                        </tr>
                        <tr>
                            <td>Rating</td>
                            <td><?= $list_faskes->skor_rating ?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td><?= $list_faskes->kecamatan ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dokter</td>
                            <td><?= $list_faskes->jumlah_dokter ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Pegawai</td>
                            <td><?= $list_faskes->jumlah_pegawai ?></td>
                        </tr>
                        <tr>
                            <td>Link Website Faskes</td>
                            <td><?= $list_faskes->website ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Foto Faskes:</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-4">
                                        <?php
                                        if($list_faskes->foto1 == NULL){
                                            echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                        }
                                        else{
                                            $filegambar = base_url('fotos/'.$list_faskes->foto1);
                                            echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';

                                        }
                                        ?>
                                    </div>
                                    <div class="col-4"><?php 
                                        if($list_faskes->foto2 == NULL){
                                            echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                        }
                                        else{
                                            $filegambar = base_url('fotos/'.$list_faskes->foto2);
                                            echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';

                                        }
                                        ?>
                                    </div>
                                    <div class="col-4"><?php 
                                        if($list_faskes->foto3 == NULL){
                                            echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                        }
                                        else{
                                            $filegambar = base_url('fotos/'.$list_faskes->foto3);
                                            echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';

                                        }
                                        ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="col-4">
                                        <?php 
                                            echo form_open_multipart(base_url('index.php/admin/faskes/upload1'));
                                        ?>
                                        <input type="text" value="<?= $list_faskes->id?>" name="id" hidden>
                                            <input type="file" name="fotofaskes">
                                            <input type="submit" class="btn btn-success mt-2" value="Upload">
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-4">
                                        <?php  
                                            echo form_open_multipart(base_url('index.php/admin/faskes/upload2'));
                                        ?>
                                            <input type="text" value="<?= $list_faskes->id?>" name="id" hidden>
                                            <input type="file" name="fotofaskes">
                                            <input type="submit" class="btn btn-success mt-2" value="Upload">
                                        <?php echo form_close()?>
                                    </div>
                                    <div class="col-4">
                                        <?php 
                                            echo form_open_multipart(base_url('index.php/admin/faskes/upload3'));
                                        ?>
                                            <input type="text" value="<?= $list_faskes->id?>" name="id" hidden>
                                            <input type="file" name="fotofaskes">
                                            <input type="submit" class="btn btn-success mt-2" value="Upload">
                                        <?php echo form_close()?>
                                    </div>
                                </div>
                            </td>
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