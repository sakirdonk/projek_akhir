<main id="main">

  <!-- ======= About Us Section ======= -->
  <section class="about mt-5 pt-5">
    <div class="container mt-5" data-aos="fade-up">

      <div class="section-title">
        <h2>Details</h2>
      </div>

      <div class="row">
        <h3><?= $data_faskes->nama_faskes ?></h3>
        <div class="d-flex justify-content-between">
          <img style="width:30%;" src="<?= base_url('assets/img/about.jpg') ?>" class="img-fluid" alt="">
          <img style="width:30%;" src="<?= base_url('assets/img/about.jpg') ?>" class="img-fluid" alt="">
          <img style="width:30%;" src="<?= base_url('assets/img/about.jpg') ?>" class="img-fluid" alt="">
        </div>

        <div class="col-lg-8 mt-4 pt-4 pt-lg-0 content" data-aos="fade-left">
          <p>
            <?= $data_faskes->deskripsi ?><br>
          </p>
          <table class="table table-hover mt-5">
            <tr>
              <td style="padding-left:0px; width:20%;">Alamat</td>
              <td style="padding-left:0px;"><?= $data_faskes->alamat ?><br></td>
            </tr>
            <tr>
              <td style="padding-left:0px;">Link Website</td>
              <td style="padding-left:0px;"><?= $data_faskes->website ?><br></td>
            </tr>
            <tr>
              <td style="padding-left:0px;">Jumlah Dokter</td>
              <td style="padding-left:0px;"><?= $data_faskes->jumlah_dokter ?><br></td>
            </tr>
            <tr>
              <td style="padding-left:0px;">Jumlah Pegawai</td>
              <td style="padding-left:0px;"><?= $data_faskes->jumlah_pegawai ?><br></td>
            </tr>
            <tr>
              <td style="padding-left:0px;">Skor Rating</td>
              <td style="padding-left:0px;"><?= $data_faskes->skor_rating ?></td>
            </tr>
          </table>
        </div>
        <div class="col-lg-4 mt-4" data-aos="fade-right">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps?q=<?= $data_faskes->latlong ?>&output=svembed" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-8 d-flex justify-content-center" style="background-color: #808B96; border: 1px solid black; border-radius:10px;">
          <div class="row">
            <div class="col-lg-12 mt-4 pt-4 pt-lg-0 content">
              <div class="row mb-3" style="border-bottom: 1px black solid;">
                <div class="col-2">
                  <label for="komentar" class="col-form-label">Username</label>
                </div>
                <div class="col-8">
                  <label for="komentar" class="col-form-label">Comment</label>
                </div>
                <div class="col-2">
                  <label for="komentar" class="col-form-label">Rating</label>
                </div>
              </div>
              <?= form_open(base_url('index.php/home/create?id=') . $data_faskes->id) ?>
                  <input value="<?=$this->session->userdata('ID')?>" type="text" id="username" name="username" hidden>
              <div class="row">
                <div class="col-2">
                  <label for="komentar" class="col-form-label">Komentar</label>
                </div>
                <div class="col-8">
                  <textarea id="komentar" name="komentar" cols="40" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-2">
                  <select id="nilai_rating" name="nilai_rating" class="custom-select">
                    <?php foreach ($rating as $rating) { ?>
                      <option value="<?= $rating->id ?>"><?= $rating->nama ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="row mb-3" style="border-bottom: 1px black solid;">
                <div class="offset-2 col-8 mt-2 pb-3">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <?php form_close();
              $id = $this->input->get('id');
              $k_id = $this->input->get('k_id');
              $hidden = ['k_id' => $k_id];
              ?>
              <?php foreach ($list_komentar as $komentar) {
              if($k_id == $komentar->id){
                echo form_open(base_url('index.php/home/create?id=').$id, '', $hidden) ?>
                  <input value="<?=$this->session->userdata('ID')?>" type="text" id="username" name="username" hidden>
                  <div class="row">
                    <div class="col-2">
                    <img style="border-radius: 100%; width:65%;" src="<?=base_url('assets/img/testimonials/person.png') ?>" alt="">
                    <label for="komentar" class="col-form-label"><?=$this->session->userdata('USERNAME')?></label>
                    </div>
                    <div class="col-8">
                    <textarea id="komentar" name="komentar" cols="10" rows="3" class="form-control"><?=$edit_komentar->isi?></textarea>
                    </div>
                    <div class="col-2">
                        <select id="nilai_rating" name="nilai_rating" class="custom-select">
                        <?php foreach ($data_rating as $nilai_rating) { ?>
                        <option value="<?= $nilai_rating->id ?>" <?php if($rating->id == $edit_komentar->id_rating){echo 'selected';}else{}?>><?= $nilai_rating->nama ?></option>
                        <?php } ?>
                        </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="offset-2 col-8 mt-2 pb-3">
                    <button name="submit" type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
              <?php form_close();
              }
              else{
              ?>
                <div class="row">
                  <div class="col-2">
                  <img style="border-radius: 100%; width:65%;" src="<?=base_url('assets/img/testimonials/person.png') ?>" alt="">
                    <label for="komentar" class="col-form-label"><?= $komentar->nama_user ?></label>
                  </div>
                  <div class="col-8 pb-3">
                    <label for="komentar" id="komentar" name="komentar" class="col-form-label"><?= $komentar->isi ?></label>
                  </div>
                  <div class="col-2"><?= $komentar->rating ?></div>
                </div>
                <?php if($this->session->userdata('USERNAME') == $komentar->nama_user) { ?>
                  <div class="row">
                    <div class="offset-2 col-8 mt-2 pb-3">
                      <a href="<?=base_url('index.php/home/edit?id=').$id.'&k_id='.$komentar->id?>" style="color: orange;">Edit</a>|
                      <a href="<?=base_url('index.php/home/delete?id=').$komentar->id?>" style="color: orange;">Delete</a>
                    </div>
                  </div>
                <?php } else {
                } ?>
              <?php } } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2"></div>
    </div>

    </div>
  </section><!-- End About Us Section -->

</main>