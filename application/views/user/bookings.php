<style>
    .card-body a {
        color: black;
        text-decoration: underline;
    }

    .card-body a:hover {
        color: grey;
    }
</style>

<div class="col-md-8 bg-white padding-2 container mb-5">
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">Booking History</h3>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">No.</th>
                        <th scope="col" style="width: 30%;">Booking Infromation</th>
                        <th scope="col" style="width: 20%;"></th>
                        <th scope="col" style="width: 25%;"></th>
                        <th scope="col" style="width: 20%;"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($bookings as $booking) { ?>
                        <tr>
                            <th scope="row" rowspan="5"><?= $i ?></th>
                            <td rowspan="5" class="align-middle"><img src="<?= base_url() ?>assets/img/details/<?= strtolower(str_replace(' ', '-', $booking['jenis_kamar'])) ?>/<?= $booking['detail_1'] ?>" width="200px" class="p-1" alt="..."></td>
                            <td>Room : </td>
                            <td><a href="<?= base_url() ?>rooms/details/<?= $booking['id_jenis_kamar'] ?>/<?= strtolower(str_replace(' ', '-', $booking['jenis_kamar'])) ?>"><?= $booking['jenis_kamar'] ?></a></td>
                            <td rowspan="4" class="align-middle">
                                <a href="<?= base_url() ?>user/booking_details/<?= $booking['id_booking'] ?>"><button class="btn btn-secondary">Details</button></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Check-in : </td>
                            <td><?= date("d F, Y", $booking['check_in']); ?></td>
                        </tr>
                        <tr>
                            <td>Check-out : </td>
                            <td><?= date("d F, Y", $booking['check_out']); ?></td>
                        </tr>
                        <tr>
                            <td>Booking date: </td>
                            <td><?= $booking['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><a href="<?= base_url() ?>user/testimonial/<?= $booking['id_kamar'] ?>"><small>Add testimonial</small></a></td>
                        </tr>
                        <?php $i++ ?>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
</div>
</main>