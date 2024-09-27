<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2><?= $room['jenis_kamar'] ?></h2>
                    <div class="bt-option">
                        <a href="<?= base_url() ?>home">Home</a>
                        <a href="<?= base_url() ?>rooms">Rooms</a>
                        <span><?= $room['jenis_kamar'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Room Details Section Begin -->
<section class="kamar-section mt-2 mb-5">
    <div class="container">
        <div class="col-lg-12 mx-auto">
            <div class="kamar-slider owl-carousel">
                <div class="ts-item">
                    <img src="<?= base_url() ?>assets/img/details/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>/<?= $room['detail_1'] ?>" alt="">
                </div>
                <div class="ts-item">
                    <img src="<?= base_url() ?>assets/img/details/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>/<?= $room['detail_2'] ?>" alt="">
                </div>
                <?php if ($room['detail_3']) { ?>
                    <div class="ts-item">
                        <img src="<?= base_url() ?>assets/img/details/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>/<?= $room['detail_3'] ?>" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="room-details-section spad">
    <div class="container pl-4 pr-4">
        <div class="row">
            <div class="col-lg-8">
                <div class="room-details-item">
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3><?= $room['jenis_kamar'] ?></h3>
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <a href="<?= base_url() ?>booking/index/<?= time(); ?>/<?= time() + 86400 ?>">Booking Now</a>
                            </div>
                        </div>
                        <h2>Rp<?= number_format(($room['harga_kamar']), 2, ",", ".") ?><span>/Night</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td><?= $room['ukuran_kamar'] ?>-sqm</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>Max persion <?= $room['kapasitas_kamar'] ?></td>
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
                        <p class="f-para">Combining comfort and style, Deluxe Rooms offer guests a tranquil space overlooking either the greenery of the valley or the hotel pool. Complemented by a range of luxurious amenities, all rooms feature contemporary bathrooms with shower, king-sized beds, plush linens, work desk and 32-inch LCD TV, as well as a safety deposit box large enough for a laptop. A baby cot or extra bed is available on request.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Room Details Section End -->