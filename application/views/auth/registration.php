<section style="background-image: url(<?= base_url() ?>assets/img/hero/hero-3.jpg);">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-7 mt-5 mb-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-lg-12 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post" action="<?= base_url() ?>auth/registration">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <div class="logo">
                                            <a href="<?= base_url() ?>home">
                                                <img src="<?= base_url() ?>assets/img/logo.png" width="60px" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign up now</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <label for="title">Title <span style="color:red"> *</span></label>
                                            <div class="form-outline">
                                                <select name="title">
                                                    <?php foreach ($title as $t) { ?>
                                                        <option value="<?= $t ?>"><?= $t ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Full Name <span style="color:red"> *</span></label>
                                        <input type="text" id="name" class="form-control form-control-lg" name="name" value="<?= set_value('name') ?>" />
                                        <?= form_error('name', '<small class="text-danger">', '</small>') ?>

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email Address <span style="color:red"> *</span></label>
                                        <input type="text" id="email" class="form-control form-control-lg" name="email" value="<?= set_value('email') ?>" />
                                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="phone">Phone<span style="color:red"> *</span></label>
                                        <input type="tel" id="phone" class="form-control form-control-lg" name="phone" value="<?= set_value('phone') ?>" />
                                        <?= form_error('phone', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password1">Password <span style="color:red"> *</span></label>
                                        <input type="password" id="password1" class="form-control form-control-lg" name="password1" />
                                        <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password2">Confirm Password <span style="color:red"> *</span></label>
                                        <input type="password" id="password2" class="form-control form-control-lg" name="password2" />
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account? <a href="<?= base_url() ?>auth" style="color: #1818fe;">Login here</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>