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
        <h4 class="mb-4">Administrator</h4>
        <div class="row">

            <div class="col-md-3 mb-5">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light menu-wrapper shadow">
                    <div class="menu-wrapper">
                        <div class="main-menu">
                            <ul class="nav flex-column mb-auto menu-wrapper">
                                <li>
                                    <a href="<?= base_url() ?>admin" class="nav-link <?= $judul == ('Dashboard') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-tachometer"></i>
                                        &nbsp; Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/customerlist" class="nav-link <?= $judul == ('Customer List') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-pencil-square" aria-hidden="true"></i>
                                        &nbsp; Customer List
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/bookinglist" class="nav-link <?= $judul == ('Booking List') || $judul == ('Booking Details') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-money" aria-hidden="true"></i>
                                        &nbsp; Booking List
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>admin/testimoniallist" class="nav-link <?= $judul == ('Testimonial List') ? 'active' : '' ?>">
                                        <i class="fa fa-fw fa-comments" aria-hidden="true"></i>
                                        &nbsp; Testimonial List
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>