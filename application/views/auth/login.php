<section style="background-image: url(<?= base_url() ?>assets/img/hero/hero-3.jpg);">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-xl-6 mt-5 mb-5">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="post" action="<?= base_url() ?>auth">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <div class="logo">
                                            <a href="<?= base_url() ?>home">
                                                <img src="<?= base_url() ?>assets/img/logo.png" width="60px" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                    <?= $this->session->flashdata('message'); ?>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="text" id="email" class="form-control form-control-lg" name="email" value="<?= set_value('email') ?>" />
                                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" name="password" />
                                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                    </div>

                                    <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="<?= base_url() ?>auth/registration" style="color: #1818fe;">Register here</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>