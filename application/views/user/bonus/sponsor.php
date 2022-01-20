
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-white my-home-title">SPONSOR</h1>

                    <!-- DataTales Example -->
                    <!-- <div class="card shadow mb-4"> -->
                        <!-- <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div> -->
                        <!-- <div class="card-body">
                            <div class="table-responsive"> -->
                                <table class="text-center tb-custom" width="100%" cellspacing="0">
                                    <thead class="text-tb-head">
                                        <tr>
                                            <th colspan="2" class="text-right">Total: </th>
                                            <th class="tb-column"><?= $total_fil; ?> FIL</th>
                                            <th class="tb-column"><?= $total_mtm; ?> MTM</th>
                                        </tr>
                                        <tr>
                                            <th>Date</th>
                                            <th>User ID</th>
                                            <th>Filecoin</th>
                                            <th>MTM</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($bonus as $row_bonus)
                                            {
                                        ?>
                                        <tr>
                                            <td class="tb-column"><?= date('d/m/Y', $row_bonus->datecreate); ?></td>
                                            <td class="tb-column"><?= $row_bonus->username; ?></td>
                                            <td class="tb-column"><?= $row_bonus->filecoin; ?> FIL</td>
                                            <td class="tb-column"><?= $row_bonus->mtm; ?> MTM</td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            <!-- </div>
                        </div> -->
                    <!-- </div> -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->