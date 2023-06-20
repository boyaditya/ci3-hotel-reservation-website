<div class="col-md-8 bg-white padding-2 container mb-5">
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url() ?>user/edit" method="post" enctype="multipart/form-data">
                <div class="col-md">
                    <h3 class="mb-4">Edit Profile</h3>

                    <!-- title -->
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <select id="title" name="title">
                                <?php foreach ($title as $t) { ?>
                                    <?php if ($t == $user['title']) { ?>
                                        <option value="<?= $t ?>" selected><?= $t ?></option>
                                    <?php } else { ?>
                                        <option value="<?= $t ?>"><?= $t ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                            <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <!-- email -->
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                        </div>
                    </div>

                    <!-- phone -->
                    <div class=" form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="phone" name="phone" value="<?= $user['phone'] ?>">
                            <?= form_error('phone', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <!-- picture -->
                    <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Picture</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url() ?>assets/img/profile/<?= $user['image'] ?>" class="img-img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="form-group row float-right">
                        <div class="col-sm mt-3 ">
                            <button type="submit" class="btn btn-secondary">Edit Profile</button>
                        </div>
                    </div>

                </div>


            </form>
        </div>
    </div>

</div>
</div>
</div>

</main>