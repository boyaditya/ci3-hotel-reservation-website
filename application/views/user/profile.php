<div class="col-md-8 bg-white padding-2 container mb-5">
    <div class="card">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col-md-12 mb-3">
                    <h3 class="mb-4">Contact Info</h3>

                    <!-- prefix -->
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="prefix">Prefix <span style="color:red"> *</span></label>
                            <div class="form-group">
                                <select id="prefix">
                                    <?php foreach ($prefix as $p) { ?>
                                        <option value="<?= $p ?>"><?= $p ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fname" class="form-label">First Name <span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="fname" name="fname" required autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lname" class="form-label">Last Name <span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="lname" name="lname" required autocomplete="off">
                        </div>
                    </div>

                    <!-- phone and email -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email <span style="color:red"> *</span></label>
                            <input type="email" class="form-control" id="email" name="email" required autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone <span style="color:red"> *</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required autocomplete="off">
                        </div>
                    </div>

                    <!-- change info button -->
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <a href="<?= base_url() ?>user/profile">
                                <button type="button" class="btn btn-secondary"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Save</button>
                            </a>
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