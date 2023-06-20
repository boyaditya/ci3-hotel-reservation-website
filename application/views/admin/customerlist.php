<div class="col-md-8 container mb-5">

    <h3 class="mb-4">Customer List</h3>
    <!-- tabel customer -->
    <table class="table table-striped table-responsive-lg">
        <thead>
            <tr>
                <th scope="col">No. </th>
                <th scope="col">User</th>
                <th scope="col"></th>
                <th scope="col">Phone</th>
                <th scope="col">Member Since</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($customers as $row) { ?>
                <tr>
                    <th class="align-middle" scope="row"><?= $i ?></th>
                    <td class="align-middle"><img src="<?= base_url() ?>assets/img/profile/<?= $row['image'] ?>" width="70px" class="rounded"></td>
                    <td class="align-middle"><?= $row['title'] ?> <?= $row['name'] ?>
                        <br> <span style="color: gray;"><small>
                                <?= $row['email'] ?>
                            </small></span>
                    </td>
                    <td class="align-middle"><?= $row['phone'] ?></td>
                    <td class="align-middle"><?= date("d F Y", $row['date_created']) ?></td>
                </tr>
                <?php $i++ ?>
            <?php   } ?>

        </tbody>
    </table>

</div>

</div>
</div>

</main>