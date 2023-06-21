 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-section">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="breadcrumb-text">
                     <h2>Our Rooms</h2>
                     <div class="bt-option">
                         <a href="<?= base_url() ?>home">Home</a>
                         <span>Rooms</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Breadcrumb Section End -->

 <!-- Rooms Section Begin -->
 <section class="rooms-section spad">
     <div class="container">
         <div class="row">
             <?php foreach ($rooms as $room) { ?>
                 <div class="col-lg-4 col-md-6 mx-auto">
                     <div class="room-item">
                         <img src="<?= base_url() ?>assets/img/details/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>/<?= $room['detail_1'] ?>" alt="">
                         <div class="ri-text">
                             <h4><?= $room['jenis_kamar'] ?></h4>
                             <h3>Rp<?= number_format(($room['harga_kamar']), 2, ",", ".") ?><span>/Night</span></h3>
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
                             <a href="<?= base_url() ?>rooms/details/<?= $room['id_jenis_kamar'] ?>/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>" class="primary-btn">More Details</a>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
 </section>
 <!-- Rooms Section End -->