<style>
    .card-body a {
        color: black;
        text-decoration: underline;
    }

    .card-body a:hover {
        color: grey;
    }
</style>

<div class="col-md-8 bg-white padding-2 container mb-5">
    <div class="card">
        <div class="card-body">
            <h3 class="mb-4">Bookings</h3>

            <table class="table table-responsive-lg">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%;">No.</th>
                        <th scope="col" style="width: 35%;">Booking Infromation</th>
                        <th scope="col" style="width: 20%;"></th>
                        <th scope="col" style="width: 30%;"></th>
                        <th scope="col" style="width: 10%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="4">1</th>
                        <td rowspan="4"><img src="<?= base_url() ?>assets/img/room/room-2.jpg" width="200px" class="p-1" alt="..."></td>
                        <td>Room : </td>
                        <td><a href="">Deluxe Room</a></td>
                        <td rowspan="4" class="align-middle"><a href="<?= base_url() ?>user/booking_details"><button class="btn btn-secondary">Details</button></a></td>
                    </tr>
                    <tr>
                        <td>Check-in : </td>
                        <td>17/06/2023</td>
                    </tr>
                    <tr>
                        <td>Check-out : </td>
                        <td>18/06/2023</td>
                    </tr>
                    <tr>
                        <td>Booking date: </td>
                        <td>17/06/2023 11:26 PM</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
</div>
</main>