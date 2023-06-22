<div class="col-md-8 container mb-5">

    <h3 class="mb-4">Booking List</h3>
    <!-- tabel customer -->
    <table class="table table-striped table-responsive-lg">
        <thead>
            <tr>
                <th scope="col">Booking ID</th>
                <th scope="col">User</th>
                <th scope="col">Date</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($booking as $row) { ?>
                <tr>
                    <th class="align-middle" scope="row">#B000<?= $row['id_booking'] ?></th>
                    <td class="align-middle"><?= $row['name'] ?>
                        <br> <span style="color: gray;"><small>
                                <?= $row['email'] ?>
                            </small></span>
                    </td>
                    <td class="align-middle"><small><?= $row['tanggal'] ?></small></td>

                    <td class="align-middle"><a href="<?= base_url() ?>admin/booking_details/<?= $row['id_booking'] ?>"><button class="btn btn-secondary">View</button></a></td>
                </tr>
                <?php $i++ ?>
            <?php   } ?>

        </tbody>
    </table>

</div>

</div>
</div>

</main>