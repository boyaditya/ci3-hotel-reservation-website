<div class="col-md-8 container mb-5">

    <h3 class="mb-4">Invoice List</h3>
    <!-- tabel customer -->
    <table class="table table-striped table-responsive-lg">
        <thead>
            <tr>
                <th scope="col">Payment ID</th>
                <th scope="col">User</th>
                <th scope="col">Date</th>
                <th scope="col">Amount</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($customers as $row) { ?>
                <tr>
                    <th class="align-middle" scope="row"><?= $i ?></th>
                    <td class="align-middle"><?= $row['name'] ?>
                        <br> <span style="color: gray;"><small>
                                <?= $row['email'] ?>
                            </small></span>
                    </td>
                    <td class="align-middle"><small><?= date("d-m-Y", $row['date_created']) ?></small></td>
                    <td class="align-middle">Rp<?= number_format($row['phone'], 0, ",", ".") ?></td>
                    <td class="align-middle"><a href=""><button class="btn btn-primary">View</button></a></td>
                </tr>
                <?php $i++ ?>
            <?php   } ?>

        </tbody>
    </table>

</div>

</div>
</div>

</main>