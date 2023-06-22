<style>
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;

        border-radius: 1rem;
    }

    .back a {
        color: black;
        text-decoration: underline;
    }

    .back a:hover {
        color: grey;
    }
</style>

<div class="col-md-8 bg-white container mb-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-4 back"><a href="<?= base_url() ?>admin/bookinglist"><i class="fa fa-arrow-left" aria-hidden="true"></a></i> Booking Details</h4>
                    <div class="card">
                        <div class="card-body">
                            <div class="invoice-title">
                                <h4 class="float-right font-size-15">Booking #B000<?= $booking['id_booking'] ?> <span class="badge bg-success font-size-12 ms-2 text-white">Paid</span></h4>
                                <div class="mb-4">
                                    <h2 class="mb-1 text-muted">Luxe Hotel</h2>
                                </div>
                                <div class="text-muted">
                                    <p class="mb-1">Bandung City, West Java, Indonesia</p>
                                    <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i> luxehotel@luxe.com</p>
                                    <p><i class="uil uil-phone me-1"></i> (+62) 812 345 678</p>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="row col-md-12">
                                <h5 class="mb-4">Booking Details</h5>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <div>
                                            <h5 class="font-size-15 mb-1">Check-in:</h5>
                                            <p><?= date("d F, Y", $booking['check_in']); ?></p>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="font-size-15 mb-1">Check-out:</h5>
                                            <p><?= date("d F, Y", $booking['check_out']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <div>
                                            <h5 class="font-size-15 mb-1">Guests:</h5>
                                            <p>1 Adult</p>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="font-size-15 mb-1">Unit:</h5>
                                            <p><?= $booking['jenis_kamar'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <hr class="my-4">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-muted">
                                        <h5 class="font-size-16 mb-3">Booked By</h5>
                                        <h5 class="font-size-15 mb-2"><?= $booking['name'] ?></h5>
                                        <p class="mb-1"><?= $booking['email'] ?></p>
                                        <p><?= $booking['phone'] ?></p>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    <div class="text-muted text-sm-end">
                                        <div>
                                            <h5 class="font-size-15 mb-1">Booking No:</h5>
                                            <p>#B000<?= $booking['id_booking'] ?></p>
                                        </div>
                                        <div class="mt-4">
                                            <h5 class="font-size-15 mb-1">Booking Date:</h5>
                                            <p><?= $booking['tanggal'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            <div class="py-2">
                                <h5 class="mb-3">Order Summary</h5>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Room</th>
                                                <th>Price/Night</th>
                                                <th>Nights</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead><!-- end thead -->
                                        <tbody>
                                            <tr>
                                                <td style="white-space: nowrap;"><?= date("d-M-Y", strtotime($booking['tanggal']))  ?></td>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14 mb-1"><?= $booking['jenis_kamar'] ?></h5>
                                                        <p class="text-muted mb-0">1 Adult</p>
                                                    </div>
                                                </td>
                                                <td>Rp<?= number_format(($booking['harga_kamar']), 2, ",", ".") ?></td>
                                                <td><?= $booking['jumlah_malam'] ?></td>
                                                <td class="text-end">Rp<?= number_format(($booking['harga_kamar'] * $booking['jumlah_malam']), 2, ",", ".") ?></td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <th scope="row" colspan="4" class="text-end">Sub Total</th>
                                                <td class="text-end">Rp<?= number_format(($booking['harga_kamar'] * $booking['jumlah_malam']), 2, ",", ".") ?></td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <th scope="row" colspan="4" class="border-0 text-end">
                                                    Service Charge</th>
                                                <td class="border-0 text-end">Rp<?= number_format(($booking['service']), 2, ",", ".") ?></td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <th scope="row" colspan="4" class="border-0 text-end">
                                                    Tax</th>
                                                <td class="border-0 text-end">Rp<?= number_format(($booking['pajak']), 2, ",", ".") ?></td>
                                            </tr>
                                            <!-- end tr -->
                                            <tr>
                                                <th scope="row" colspan="4" class="border-0 text-end">Total</th>
                                                <td class="border-0 text-end">
                                                    <h4 class="m-0 fw-semibold">Rp<?= number_format(($booking['total_harga']), 2, ",", ".") ?></h4>
                                                </td>
                                            </tr>
                                            <!-- end tr -->
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
                                <div class="d-print-none mt-4">
                                    <div class="float-right">
                                        <a href="javascript:window.print()" class="btn btn-success me-1"><i class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div><!-- end col -->
        </div>
    </div>

</div>
</div>
</div>
</main>