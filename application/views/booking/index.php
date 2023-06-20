<style>
    .card-body a {
        color: black;
        text-decoration: underline;
    }

    .card-body a:hover {
        color: grey;
    }

    .modal-body a {
        text-decoration: underline;
    }

    .modal-body a:hover {
        color: grey;
    }

    .nav-link {
        background: none;
        border: 0;
        border-radius: 0.25rem;
    }

    .nav-link.active,
    .show>.nav-link {
        color: white;
        background-color: #dfa974;
    }

    .book-btn {
        display: inline-block;
        font-size: 13px;
        font-weight: 700;
        padding: 14px 25px 13px;
        background: #dfa974;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 2px;
        border: none;
    }
</style>

<main class="mt-4">
    <div class="container">
        <h4 class="mb-4">Select a Room</h4>
        <div class="row mb-5">
            <div class="col-md-4">
                <div class="booking-form bg-dark">
                    <form action="<?= base_url() ?>booking/checkavailability" method="post">
                        <div class="check-date">
                            <label for="date-in" class="text-white">Check In:</label>
                            <input type="text" class="date-input" id="date-in" name="ci" value="<?= date("d F, Y", $ci); ?>">
                            <i class=" icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out" class="text-white">Check Out:</label>
                            <input type="text" class="date-input" id="date-out" name="co" value="<?= date("d F, Y", $co); ?>">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest" class="text-white">Guests:</label>
                            <select id="guest">
                                <option value="">2 Adults</option>
                                <option value="">3 Adults</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room" class="text-white">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                                <option value="">2 Room</option>
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                </div>
            </div>

            <div class="col-md-8 bg-white padding-2 container">
                <?php foreach ($rooms as $room) { ?>
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5 p-3">
                                            <img src="<?= base_url() ?>assets/img/room/<?= $room['gambar'] ?>" style=" width: 100% !important;" class="rounded" alt="...">
                                        </div>

                                        <div class="col-md-7">
                                            <h5 class="card-title"><?= $room['jenis_kamar'] ?></h5>
                                            <p class="card-text"><small>Max person <?= $room['kapasitas_kamar'] ?> | <?= $room['jenis_ranjang'] ?> | <?= $room['ukuran_kamar'] ?> m²</small></p>
                                            <p class="card-text">32sqmt, King, Spacious Work Space, Complimentary wired & wireless internet.</p>
                                            <p class="card-text"><a href="<?= base_url() ?>rooms/details" class="btn-link">Room Details</a></p>
                                            <hr class="mt-4 mb-2">

                                            <div class="text-right">
                                                <h5 class="card-text font-weight-bold">Rp<?= number_format($room['harga_kamar'], 2, ",", ".") ?></h5>
                                                <p class="card-text">Per Night</p>
                                                <?php if ($this->session->userdata('email')) { ?>
                                                    <a href="<?= base_url() ?>booking/details/<?= $room['id_jenis_kamar'] ?>/<?= $ci ?>/<?= $co ?>"><button class="btn book-btn">Book Now</button></a>
                                                <?php } else { ?>
                                                    <button type="button" class="btn book-btn" data-toggle="modal" data-target="#login">Book Now</button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                To make a hotel room reservation, you must login to your account. If you don't have an account yet, please <a href="<?= base_url() ?>auth/registration">click here</a> to create one.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url() ?>auth"><button type="button" class="btn btn-primary">Login Page</button></a>
            </div>
        </div>
    </div>
</div>