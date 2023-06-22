<style>
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;

        border-radius: 1rem;
    }

    .room-info a {
        color: black;
        text-decoration: underline;
    }

    .room-info a:hover {
        color: grey;
    }

    .back a {
        color: black;
        text-decoration: underline;
    }

    .back a:hover {
        color: grey;
    }
</style>

<div class="col-md-8 bg-white container mb-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-4 back"><a href="<?= base_url() ?>user/bookings"><i class="fa fa-arrow-left" aria-hidden="true"></a></i> Add Testimonial</h4>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="card-header font-weight-bold">Room Information</div>
                                <div class="card-body room-info">
                                    <div class="row">
                                        <div class="col-md-5 p-3">
                                            <img src="<?= base_url() ?>assets/img/details/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>/<?= $room['detail_1'] ?>" style=" width: 100% !important;" class="rounded" alt="...">
                                        </div>

                                        <div class="col-md-7">
                                            <h5 class="card-title"><?= $room['jenis_kamar'] ?></h5>
                                            <p class="card-text"><small>Max person <?= $room['kapasitas_kamar'] ?> | <?= $room['jenis_ranjang'] ?> | <?= $room['ukuran_kamar'] ?> m²</small></p>
                                            <p class="card-text">32sqmt, King, Spacious Work Space, Complimentary wired & wireless internet.</p>
                                            <p class="card-text"><a href="<?= base_url() ?>rooms/details/<?= $room['id_jenis_kamar'] ?>/<?= strtolower(str_replace(' ', '-', $room['jenis_kamar'])) ?>" class="btn-link" target="_blank">Room Details</a></p>
                                            <hr class="mt-4 mb-2">

                                            <div class="text-right">
                                                <h5 class="card-text font-weight-bold">Rp<?= number_format($room['harga_kamar'], 2, ",", ".") ?></h5>
                                                <p class="card-text">Per Night <br> <small class="font-weight-light">Excluding Taxes & Fees</small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="review-add">
                                <h4>Add Testimonial</h4>
                                <form action="<?= base_url() ?>user/addtestimonial/<?= $room['id_jenis_kamar'] ?>" method="post" class="ra-form">
                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="name" class="col-form-label">Name</label>
                                            <input type="text" id="name" class="form-control" name="name" value="<?= $user['name'] ?>" readonly>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input type="text" id="email" class="form-control" name="email" value="<?= $user['email'] ?>" readonly>
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="testimonial" class="col-form-label">Your Testimonial</label>
                                            <textarea placeholder="Your Testimonial" name="testimonial" required></textarea>
                                            <button type="submit">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div>
            </div>

        </div>
    </div>
</div>
</main>