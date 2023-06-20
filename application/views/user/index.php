<div class="col-md-8 container mb-5">

    <h3 class="mb-4">My Profile</h3>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card mb-3 shadow-sm" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url() ?>assets/img/profile/<?= $user['image'] ?>" class="p-2" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><small><?= $user['title'] ?></small> <?= $user['name'] ?></h5>
                    <p class="card-text"><?= $user['email'] ?></p>
                    <p class="card-text"><?= $user['phone'] ?></p>
                    <p class="card-text"><small class="text-muted">Member since <?= date("d F Y", $user['date_created']) ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
</div>

</main>