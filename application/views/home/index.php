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
                    <p class="f-para">Inspired by West Java Cultural Heritage, Luxe hotel bandung offers a comfortable and luxurious place for you to stay. We provides guests luxury, privacy and convenience at its finest. Luxe Hotel Bandung has 380 well-appointed guest rooms and suites with incredible views of Bandung City. Each room is remarkably spacious, complete with premium amenities that are essential to both business and leisure travelers.</p>
                    <p class="s-para">Luxe Hotel Bandung Invites you to come and enjoy the beauty of Bandung City.</p>
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
                    <p>Luxe Hotel Bandung provides a catering services for your daily. Breakfast, Lunch, and dinner. Opens Everyday at 7AM - 11PM.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-024-towel"></i>
                    <h4>Laundry</h4>
                    <p>Luxe Hotel Bandung offers professional laundry services for guests and general public, including regular washing, dry cleaning, and ironing service.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <i class="flaticon-012-cocktail"></i>
                    <h4>Bar & Drink</h4>
                    <p>Explore our beverages such as hand-picked wine, cocktails and soft drink in a good ambience at our bar. OPEN 7PM.</p>
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
                                <a href="<?= base_url() ?>rooms/details/<?= $room['id_jenis_kamar'] ?>/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>" class="primary-btn">More Details</a>
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
                    <?php foreach ($testimonials as $testimonial) { ?>
                        <div class="ts-item">
                            <p>"<?= $testimonial['testimonial'] ?>"</p>
                            <div class="ti-author">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5> - <?= $testimonial['name'] ?></h5>
                            </div>
                            <img src="<?= base_url() ?>assets/img/testimonial-logo.png" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->