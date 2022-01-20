<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-white">Package Purchase</h1>

    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Total Level <?= $month; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>FM 4</th>
                            <th>FM 5</th>
                            <th>FM 6</th>
                            <th>FM 7</th>
                            <th>FM 8</th>
                            <th>FM 9</th>
                            <th>FM 10</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $fm4 ?? 0; ?></td>
                            <td><?= $fm5 ?? 0; ?></td>
                            <td><?= $fm6 ?? 0; ?></td>
                            <td><?= $fm7 ?? 0; ?></td>
                            <td><?= $fm8 ?? 0; ?></td>
                            <td><?= $fm9 ?? 0; ?></td>
                            <td><?= $fm10 ?? 0; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Purchase <?= $month; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>User</th>
                            <th>Package</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list_purchase as $row) : ?>
                            <tr>
                                <td><?= date('Y-m-d', $row->update_date); ?></td>
                                <td><?= $row->username; ?></td>
                                <td><?= $row->name; ?></td>
                                <td>
                                    <?php
                                    if ($row->fill != 0) {
                                        echo $row->fill . " FIL";
                                    } elseif ($row->mtm != 0) {
                                        echo $row->mtm . " MTM";
                                    } elseif ($row->zenx != 0) {
                                        echo $row->zenx . " ZENX";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->