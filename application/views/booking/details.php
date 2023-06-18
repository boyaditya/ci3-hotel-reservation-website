<style>
    .card-body a {
        color: black;
        text-decoration: underline;
    }

    .card-body a:hover {
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
</style>


<main class="mt-4">
    <div class="container">

        <h4 class="mb-4">Guest Details</h4>
        <div class="row mb-5">

            <div class="col-md-4 mb-5">
                <div class="d-flex flex-column flex-shrink-0">
                    <div class="card bg-light mb-3">
                        <div class="card-header font-weight-bold">Your Stay</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text font-weight-bold">Check-in</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text font-weight-bold">Check-out</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text">After 3:00 PM</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text">Before 12:00 PM</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <p class="card-text">Sun, Jun 18, 2023 - Mon, Jun 19, 2023</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="card-text">1 Adult</p>
                                </div>
                            </div>
                            <hr class="mt-4 mb-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="card-text font-weight-bold">TOTAL : </p>
                                </div>
                                <div class="col-md-8">
                                    <p class="card-text font-weight-bold float-right">Rp. 1.250.000,00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8 bg-white padding-2 container">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-12 mb-3">
                                <h3 class="mb-4">Contact Info</h3>

                                <!-- prefix -->
                                <div class="row">
                                    <div class="col-md-2
                                     mb-3">
                                        <label for="fname" class="form-label">Prefix</label>
                                        <input type="text" class="form-control" id="fname" name="fname" required autocomplete="off" readonly>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" required autocomplete="off" readonly>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" required autocomplete="off" readonly>
                                    </div>
                                </div>

                                <!-- Name -->
                                <!-- <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" required autocomplete="off" readonly>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" required autocomplete="off" readonly>
                                    </div>
                                </div> -->

                                <!-- phone and email -->
                                <div class="row">
                                    <div class="col-md-7 mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required autocomplete="off" readonly>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required autocomplete="off" readonly>
                                    </div>
                                </div>

                                <!-- change info button -->
                                <div class="row mt-3">
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">To change contact info, click the button below</label>
                                        <a href="<?= base_url() ?>user/profile">
                                            <button type="button" class="btn btn-secondary"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp; Change Contact Info</button>
                                        </a>
                                    </div>
                                </div>

                                <hr class="mt-4 mb-4">
                                <h3 class="mb-4">Payment Information</h3>
                                <!-- card number -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cardnumber" class="form-label">Card Number</label>
                                        <input type="text" class="form-control" id="cardnumber" name="cardnumber" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="row">
                                            <!-- exp -->
                                            <div class="col-md-8">
                                                <label for="exp" class="form-label">Expration Date (MM/YY)</label>
                                                <input type="text" class="form-control" id="exp" name="exp" required>
                                            </div>
                                            <!-- cvv -->
                                            <div class="col-md-4">
                                                <label for="cvv" class="form-label">CVV</label>
                                                <input type="text" class="form-control" id="cvv" name="cvv" required maxlength="3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="nameoncard" class="form-label">Name on Card</label>
                                        <input type="text" class="form-control" id="nameoncard" name="nameoncard" required autocomplete="off">
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