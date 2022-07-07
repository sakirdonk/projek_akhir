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
                        <li class="breadcrumb-item active">Update</li>
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
                <h3 class="card-title">Update Data Faskes</h3>

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
                <?php
                $hidden = ['id' => $list_faskes->id];
                echo form_open(base_url('index.php/admin/faskes/save'), '', $hidden);
                ?>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="nama_faskes">Nama Faskes</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fas fa-building"></i>
                                </div>
                            </div>
                            <input id="nama_faskes" value="<?= $list_faskes->nama_faskes ?>" name="nama_faskes" type="text" class="form-control" required="required">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-4 col-form-label">Jenis Faskes</label>
                    <div class="col-8">
                        <select id="jenis_faskes" name="jenis_faskes" class="custom-select" required="required">
                            <?php foreach ($jenis_faskes as $jenis) { ?>
                                <option value="<?= $jenis->id ?>"><?= $jenis->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-4 col-form-label">Deskripsi Faskes</label>
                    <div class="col-8">
                        <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" required="required"><?= $list_faskes->deskripsi ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control" required="required"><?= $list_faskes->alamat ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-4 col-form-label">Koordinat Lokasi</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-map-marker"></i>
                                </div>
                            </div>
                            <input id="latlong" value="<?= $list_faskes->latlong ?>" name="latlong" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rating" class="col-4 col-form-label">Rating</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <input id="rating" value="<?= $list_faskes->skor_rating ?>" name="rating" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-4 col-form-label">Kecamatan</label>
                    <div class="col-8">
                        <select id="kecamatan" name="kecamatan" class="custom-select" required="required">
                            <?php foreach ($kecamatan as $kecamatan) { ?>
                                <option value="<?= $kecamatan->id ?>"><?= $kecamatan->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_dokter" class="col-4 col-form-label">Jumlah Dokter</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-user-md"></i>
                                </div>
                            </div>
                            <input id="jumlah_dokter" value="<?= $list_faskes->jumlah_dokter ?>" name="jumlah_dokter" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_pegawai" class="col-4 col-form-label">Jumlah Pegawai</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <input id="jumlah_pegawai" value="<?= $list_faskes->jumlah_pegawai ?>" name="jumlah_pegawai" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="website" class="col-4 col-form-label">Link Faskes</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-link"></i>
                                </div>
                            </div>
                            <input id="website" value="<?= $list_faskes->website ?>" name="website" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>

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