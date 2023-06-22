<div class="col-md-8 container mb-5">

    <h3 class="mb-4">Display Testimonial</h3>
    <?= $this->session->flashdata('message'); ?>

    <table class="table table-striped table-responsive-lg">
        <thead>
            <tr>
                <th scope="col" style="width: 30%;">Customer Name</th>
                <th scope="col">Testimonials</th>
                <th scope="col" style="width: 10%;"></th>

            </tr>
        </thead>
        <tbody>
            <form action="<?= base_url() ?>admin/deletedisplaytestimonial" method="post">
                <?php foreach ($display_testimonials as $row) { ?>
                    <input type="hidden" name="id_display" value="<?= $row['id_display'] ?>">
                    <tr>
                        <td class="align-middle"><?= $row['name'] ?>
                        <td class="align-middle"><small><?= $row['testimonial'] ?></small></td>

                        <td class="align-middle"><button class="btn btn-danger" onclick="return confirm('Sure to delete?')">Delete</button></td>
                    </tr>
                <?php   } ?>
            </form>
        </tbody>
    </table>

    <h3 class="mb-4 mt-5">Testimonial List</h3>

    <table class="table table-striped table-responsive-lg">
        <thead>
            <tr>
                <th scope="col" style="width: 30%;">User</th>
                <th scope="col">Testimonials</th>
                <th scope="col" style="width: 10%;"></th>

            </tr>
        </thead>
        <tbody>
            <form action="<?= base_url() ?>admin/addtodisplaytestimonial" method="post">
                <?php foreach ($testimonials as $row) { ?>
                    <input type="hidden" value="<?= $row['id_testimonial'] ?>" name="id_testimonial">
                    <tr>
                        <td class="align-middle"><?= $row['name'] ?>
                            <br> <span style="color: gray;"><small>
                                    <?= $row['email'] ?>
                                </small></span>
                        </td>
                        <td class="align-middle"><small><?= $row['testimonial'] ?></small></td>

                        <td class="align-middle"><button class="btn btn-success" type="submit" onclick="return confirm('Sure to display?')">Display</button></td>
                    </tr>
                <?php   } ?>
            </form>
        </tbody>
    </table>

</div>

</div>
</div>

</main>