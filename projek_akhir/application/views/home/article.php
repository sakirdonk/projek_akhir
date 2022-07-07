<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(<?= base_url('assets/img/slide/slide-1.jpg') ?>)">
                    <div class="container">
                        <h2>Welcome to <span>Medicio</span></h2>
                        <p>Welcome to medicio, we provide a list of health facilities.</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(<?= base_url('assets/img/slide/slide-2.jpg') ?>)">
                    <div class="container">
                        <h2>Become our Membership</h2>
                        <p>Become our member and you will get more benefits.</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(<?= base_url('assets/img/slide/slide-3.jpg') ?>)">
                    <div class="container">
                        <h2>More Facilities for our Member</h2>
                        <p>We provide more facilities for our members.</p>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <?php
    if ($this->session->has_userdata('USERNAME')) { 
    ?>

    <!-- ======= Featured Services Section ======= -->
    <section id="profile" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Your Profile</h2>
                <!-- Looping User Information -->
            </div>

            <div class="row">

                <div class="col-lg-2">
                    <img style="border-radius: 100%; width:100%;" src="<?=base_url('assets/img/testimonials/person.png') ?>" alt="">
                </div>
                <div class="col-lg-10">
                    <table>
                        <tbody>
                            <tr>
                                <th style="padding-bottom:10px; padding-right:50px;">Username</th>
                                <td style="padding-bottom:10px;"><?=$this->session->userdata('USERNAME')?></td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:10px; padding-right:50px;">Email</th>
                                <td style="padding-bottom:10px;"><?=$this->session->userdata('EMAIL')?></td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:10px; padding-right:50px;">Created At</th>
                                <td style="padding-bottom:10px;"><?=$this->session->userdata('CREATED')?></td>
                            </tr>
                            <tr>
                                <th style="padding-bottom:47px;">Description</th>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde aliquam, rem perferendis, molestias nihil cumque, blanditiis illum obcaecati vel quos voluptatem odio totam quia labore libero magni deleniti sequi voluptates?</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section><!-- End Featured Services Section -->
    <?php 
    } 
    ?>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Service</h2>
                <p>List for our Service.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title"><a href="">1. Medical Facility List</a></h4>
                    <p class="description">We provide list of health facilities.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title"><a href="">2. Hospital is not the only one</a></h4>
                    <p class="description">Our list of facilities includes not only hospitals, but even pharmacies, health centers, clinics and others.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4 class="title"><a href="">3. More detailed information</a></h4>
                    <p class="description">We not only provide a list of health facilities, we also provide more detailed information about these health facilities.</p>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= List Rumah Sakit Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Medical Facility List</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <?php foreach ($jenis as $jenis) {
                    if($jenis->nama == 'Rumah Sakit'){
                        echo '<section id="rs"></section>';
                        echo '<br>';
                        echo '<h3>'.$jenis->nama.'</h3>';
                        foreach ($faskes_rs as $rs){ 
                        ?>
                        <a class="mt-5" href="<?=base_url('index.php/home/detail?id=').$rs->id?>">
                        <h4><?= $rs->nama_faskes?></h4>
                            <div class="row" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-lg-2">
                                    <?php
                                        if($rs->foto1 == NULL){
                                            echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                        }
                                        else{
                                            $filegambar = base_url('fotos/'.$rs->foto1);
                                            echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';

                                        }
                                    ?>
                                </div>
                                <div class="col-lg-10" data-aos="fade-left">
                                    <p style="color: black;">
                                    <?= $rs->deskripsi?><br><br>
                                    Alamat: <?= $rs->alamat?><br>
                                    Rating : <?= $rs->skor_rating?><br><br>
                                    <span style="color: blue;">Read More</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php }}
                    else if($jenis->nama == 'Klinik Gigi'){
                        echo '<section id="kg"></section>';
                        echo '<br>';
                        echo '<h3>'.$jenis->nama.'</h3>';
                        foreach ($faskes_kg as $kg){ 
                        ?>
                        <a class="mt-5" href="<?=base_url('index.php/home/detail?id=').$kg->id?>">
                        <h4><?= $kg->nama_faskes?></h4>
                            <div class="row" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-lg-2">
                                    <?php
                                        if($kg->foto1 == NULL){
                                            echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                        }
                                        else{
                                            $filegambar = base_url('fotos/'.$kg->foto1);
                                            echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';

                                        }
                                    ?>
                                </div>
                                <div class="col-lg-10" data-aos="fade-left">
                                    <p style="color: black;">
                                    <?= $kg->deskripsi?><br><br>
                                    Alamat: <?= $kg->alamat?><br>
                                    Rating : <?= $kg->skor_rating?><br><br>
                                    <span style="color: blue;">Read More</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php }}
                    else if($jenis->nama == 'Klinik Umum'){
                        echo '<section id="ku"></section>';
                        echo '<br>';
                        echo '<h3>'.$jenis->nama.'</h3>';
                        foreach ($faskes_ku as $ku){ 
                            ?>
                            <a class="mt-5" href="<?=base_url('index.php/home/detail?id=').$ku->id?>">
                            <h4><?= $ku->nama_faskes?></h4>
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <div class="col-lg-2">
                                        <?php
                                            if($ku->foto1 == NULL){
                                                echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                            }
                                            else{
                                                $filegambar = base_url('fotos/'.$ku->foto1);
                                                echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';
    
                                            }
                                        ?>
                                    </div>
                                    <div class="col-lg-10" data-aos="fade-left">
                                        <p style="color: black;">
                                        <?= $ku->deskripsi?><br><br>
                                        Alamat: <?= $ku->alamat?><br>
                                        Rating : <?= $ku->skor_rating?><br><br>
                                        <span style="color: blue;">Read More</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                    <?php }}
                    else if($jenis->nama == 'Puskesmas'){
                        echo '<section id="ps"></section>';
                        echo '<br>';
                        echo '<h3>'.$jenis->nama.'</h3>';
                        foreach ($faskes_ps as $ps){ 
                            ?>
                            <a class="mt-5" href="<?=base_url('index.php/home/detail?id=').$ps->id?>">
                            <h4><?= $ps->nama_faskes?></h4>
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <div class="col-lg-2">
                                        <?php
                                            if($ps->foto1 == NULL){
                                                echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                            }
                                            else{
                                                $filegambar = base_url('fotos/'.$ps->foto1);
                                                echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';
    
                                            }
                                        ?>
                                    </div>
                                    <div class="col-lg-10" data-aos="fade-left">
                                        <p style="color: black;">
                                        <?= $ps->deskripsi?><br><br>
                                        Alamat: <?= $ps->alamat?><br>
                                        Rating : <?= $ps->skor_rating?><br><br>
                                        <span style="color: blue;">Read More</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                    <?php }}
                    else{
                        echo '<section id="ap"></section>';
                        echo '<br>';
                        echo '<h3>'.$jenis->nama.'</h3>';
                        foreach ($faskes_ap as $ap){ 
                            ?>
                            <a class="mt-5" href="<?=base_url('index.php/home/detail?id=').$ap->id?>">
                            <h4><?= $ap->nama_faskes?></h4>
                                <div class="row" data-aos="fade-up" data-aos-delay="100">
                                    <div class="col-lg-2">
                                        <?php
                                            if($ap->foto1 == NULL){
                                                echo '<img src="'.base_url('/fotos/noimage.jpg').'" alt="foto" style="width:100%;"/>';
                                            }
                                            else{
                                                $filegambar = base_url('fotos/'.$ap->foto1);
                                                echo '<img src="'.$filegambar.'" alt="foto" style="width:100%;"/>';
    
                                            }
                                        ?>
                                    </div>
                                    <div class="col-lg-10" data-aos="fade-left">
                                        <p style="color: black;">
                                        <?= $ap->deskripsi?><br><br>
                                        Alamat: <?= $ap->alamat?><br>
                                        Rating : <?= $ap->skor_rating?><br><br>
                                        <span style="color: blue;">Read More</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                    <?php }}
                    ?>
                <?php } ?>
            </div>
        </div>
    </section><!-- End List Rumah Sakit Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About Us</h2>
                <p>This website is Created By Medicio, Redesigned by.</p>
            </div>

            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon d-flex justify-content-center">
                    <img style="border-radius: 100%; width:65%;" src="<?=base_url('assets/img/testimonials/person.png') ?>" alt="">
                    </div>
                    <h4 class="title d-flex justify-content-center"><a href="">Muhammad Raihan</a></h4>
                    <div class="d-flex justify-content-center"><p class="description">Ketua Kelompok</p></div>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon d-flex justify-content-center">
                    <img style="border-radius: 100%; width:65%;" src="<?=base_url('assets/img/testimonials/person.png') ?>" alt="">
                    </div>
                    <h4 class="title d-flex justify-content-center"><a href="">Muhammad Firdaus</a></h4>
                    <div class="d-flex justify-content-center"><p class="description">Anggota Kelompok</p></div>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon d-flex justify-content-center">
                    <img style="border-radius: 100%; width:65%;" src="<?=base_url('assets/img/testimonials/person.png') ?>" alt="">
                    </div>
                    <h4 class="title d-flex justify-content-center"><a href="">Afifah Pertiwi</a></h4>
                    <div class="d-flex justify-content-center"><p class="description">Anggota Kelompok</p></div>
                </div>
            </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Testimonials</h2>
                <p>Our Costumers Says after become our member.</p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                This website helps me to find the hospital I want.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="<?= base_url('assets/img/testimonials/testimonials-1.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                this website helps me to find the nearest hospital.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="<?= base_url('assets/img/testimonials/testimonials-2.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                This website helps me find a hospital with the desired facilities.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="<?= base_url('assets/img/testimonials/testimonials-3.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                One of the best websites I've ever visited with great service.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="<?= base_url('assets/img/testimonials/testimonials-4.jpg') ?>" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                This website helps my work in recording health facilities in a city.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="<?= base_url('assets/img/testimonials/testimonials-5.jpg') ?>" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=stt%20nf&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
        </div>

    </section><!-- End Contact Section -->

</main><!-- End #main -->