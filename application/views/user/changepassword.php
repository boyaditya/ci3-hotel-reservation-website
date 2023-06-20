<div class="col-md-8 bg-white padding-2 container mb-5">
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url() ?>user/changepassword" method="post">
                <div class="col-md">
                    <h3 class="mb-4">Change Password</h3>
                    <?= $this->session->flashdata('message'); ?>

                    <div class="form-group row">
                        <label for="current_password" class="col-sm-4 col-form-label">Current Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="current_password" name="current_password">
                            <?= form_error('current_password', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password1" class="col-sm-4 col-form-label">New Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="new_password1" name="new_password1">
                            <?= form_error('new_password1', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="new_password2" class="col-sm-4 col-form-label">Confirm New Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="new_password2" name="new_password2">
                            <?= form_error('new_password2', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>


                    <!-- button -->
                    <div class="form-group row">
                        <div class="col-sm mt-3">
                            <button type="submit" class="btn btn-secondary">Change Password</button>
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