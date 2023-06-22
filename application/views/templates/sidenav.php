<style>
    li>a {
        color: black;
    }

    li>a:hover {
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

<hr class="mt-2 mb-4">
<main class="mt-4">
    <div class="container mb-5">
        <h4 class="mb-4">Account</h4>
        <div class="row">

            <div class="col-md-3 mb-5">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light menu-wrapper shadow">
                    <div class="menu-wrapper">
                        <div class="main-menu">
                            <ul class="nav flex-column mb-auto menu-wrapper">
                                <li>
                                    <a href="<?= base_url() ?>user" class="nav-link <?= $judul == ('My Profile') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-user"></i>
                                        &nbsp; My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>user/edit" class="nav-link <?= $judul == ('Edit Profile') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-pencil-square" aria-hidden="true"></i>
                                        &nbsp; Edit Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>user/bookings" class="nav-link <?= $judul == ('My Bookings') || $judul == ('Booking Details') || $judul == ('Testimonial') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-list-alt" aria-hidden="true"></i>
                                        &nbsp; My Bookings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>user/changepassword" class="nav-link <?= $judul == ('Change Password') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-key" aria-hidden="true"></i>
                                        &nbsp; Change Password
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>