<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-text justify-content-center" style="padding-top: 300px; padding-bottom: 300px;">
                    <h1>Luxe A Luxury Hotel</h1>
                    <p>The best hotel in the area, offering best quality with low-priced hotel rooms.</p>
                    <a href="#about" class="primary-btn">Discover Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-1.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-2.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-3.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-4.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-5.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-6.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-7.jpg"></div>
        <div class="hs-item set-bg" data-setbg="<?= base_url() ?>assets/img/hero/hero-8.jpg"></div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="aboutus-section spad" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>Luxe <br />Hotel Bandung</h2>
                    </div>
                    <p class="f-para">Luxe Hotel Bandung is a premium affordable hotel with a lot of included facilities that you can enjoy.</p>
                    <p class="s-para">So when it comes to a perfect hotel for you to stay, we’ve got you covered.</p>
                    <a href="#" class="primary-btn about-btn">Read More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-pic">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= base_url() ?>assets/img/about/about-1.jpg" alt="">
                        </div>
                        <div class="col-sm-6">
                            <img src="<?= base_url() ?>assets/img/about/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Services Section End -->
<section class="services-section spad" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>What We Do</span>
                    <h2>Discover Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-033-dinner"></i>
                    <h4>Catering Service</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-024-towel"></i>
                    <h4>Laundry</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-012-cocktail"></i>
                    <h4>Bar & Drink</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Home Room Section Begin -->
<section class="hp-room-section" id="rooms">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">
                <?php foreach ($rooms as $room) { ?>
                    <div class="col-lg-3 col-md-6 mt-3">
                        <div class="hp-room-item set-bg" data-setbg="<?= base_url() ?>assets/img/room/<?= $room['gambar'] ?>">
                            <div class="hr-text">
                                <h3><?= $room['jenis_kamar'] ?></h3>
                                <h2>Rp<?= number_format($room['harga_kamar'], 0, ",", ".") ?><span> / Night</span></h2>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td><?= $room['ukuran_kamar'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>Max person <?= $room['kapasitas_kamar'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td><?= $room['jenis_ranjang'] ?></td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>Wifi, Television, Bathroom,...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Home Room Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad" id="ratings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Testimonials</span>
                    <h2>What Customers Say?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="testimonial-slider owl-carousel">
                    <div class="ts-item">
                        <p>After a construction project took longer than expected, my husband, my daughter and I
                            needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                            city, neighborhood and the types of housing options available and absolutely love our
                            vacation at Luxe Hotel.</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Alexander Vasquez</h5>
                        </div>
                        <img src="<?= base_url() ?>assets/img/testimonial-logo.png" alt="">
                    </div>
                    <div class="ts-item">
                        <p>After a construction project took longer than expected, my husband, my daughter and I
                            needed a place to stay for a few nights. As a Chicago resident, we know a lot about our
                            city, neighborhood and the types of housing options available and absolutely love our
                            vacation at Luxe Hotel.</p>
                        <div class="ti-author">
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5> - Alexander Vasquez</h5>
                        </div>
                        <img src="<?= base_url() ?>assets/img/testimonial-logo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->