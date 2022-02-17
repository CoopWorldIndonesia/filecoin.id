<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-white my-home-title">BASECAMP</h1>

    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4"> -->
    <!-- <div class="card-body"> -->
    <!-- <div class="table-responsive"> -->

    <div class="row mb-5 px-3">
        <div class="logo-index col-lg-3 text-white my-home-card text-center">
            <div class="d-flex mb-2">
                <div class="mr-auto p-2 small">
                    Basecamp :
                </div>
                <div class="p-2 small">
                    <?= $user['basecamp']; ?>
                </div>
            </div>
        </div>
        <div class="logo-index col-lg-3 text-white my-home-card text-center">
            <div class="d-flex mb-2">
                <div class="mr-auto p-2 small">
                    Today Omset :
                </div>
                <div class="p-2 small">
                    <?= empty($today_omset_box['point']) ? '0' : $today_omset_box['point']; ?> BOX
                </div>
            </div>
        </div>
        <div class="logo-index col-lg-3 text-white my-home-card text-center">
            <div class="d-flex mb-2">
                <div class="mr-auto p-2 small">
                    Total Omset this Month :
                </div>
                <div class="p-2 small">
                    <?= empty($total_omset_box['point']) ? '0' : $total_omset_box['point']; ?> BOX
                </div>
            </div>
        </div>
        <div class="logo-index col-lg-3 text-white my-home-card text-center">
            <div class="d-flex mb-2">
                <div class="mr-auto p-2 small">
                    Total Omset :
                </div>
                <div class="p-2 small">
                    <?= empty($total_box) ? '0' : $total_box; ?> BOX
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Receive</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Collected</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Excess</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table class="text-center tb-custom" width="100%" cellspacing="0">
                <thead class="text-tb-head">
                    <tr>
                        <th colspan="3" class="text-right">Total: </th>
                        <th class="tb-column"><?= !empty($total_box) ? round($total_box, 10) . ' BOX' : '0'; ?> </th>
                        <th class="tb-column"><?= !empty($total) ? round($total, 10) . ' MTM' : '0'; ?> </th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Basecamp</th>
                        <th>User ID </th>
                        <th>Package</th>
                        <th>MTM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bonus as $row_bonus) {
                    ?>
                        <tr>
                            <td class="tb-column">
                                <?= date('d/m/Y', $row_bonus->update_date); ?>
                            </td>
                            <td class="tb-column">
                                <?= $row_bonus->bs_name; ?>
                            </td>
                            <td class="tb-column">
                                <?php
                                if ($row_bonus->cart_id != 0) {
                                    $userId = $userClass->usernameBasecamp($row_bonus->cart_id);
                                    echo $userId;
                                } else {
                                    echo 'Team ' . $row_bonus->team;
                                }
                                ?>
                            </td>
                            <td class="tb-column"><?= $row_bonus->name; ?></td>
                            <td class="tb-column">
                                <?= $row_bonus->mtm; ?> MTM
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <table class="text-center tb-custom" width="100%" cellspacing="0">
                <thead class="text-tb-head">
                    <tr>
                        <th colspan="3" class="text-right">Total: </th>
                        <th class="tb-column"><?= !empty($total_collected_box) ? round($total_collected_box, 10) . ' BOX' : '0'; ?> </th>
                        <th class="tb-column"><?= !empty($total_collected) ? round($total_collected, 10) . ' MTM' : '0'; ?> </th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Basecamp</th>
                        <th>User ID</th>
                        <th>Package</th>
                        <th>MTM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bonus_collected as $row_bonus_collected) {
                    ?>
                        <tr>
                            <td class="tb-column">
                                <?= date('d/m/Y', $row_bonus_collected->datecreate); ?>
                            </td>
                            <td class="tb-column">
                                <?= $row_bonus_collected->bs_name; ?>
                            </td>
                            <td class="tb-column">
                                <?php
                                if ($row_bonus_collected->cart_id != 0) {
                                    $userId = $userClass->usernameBasecamp($row_bonus_collected->cart_id);
                                    echo $userId;
                                } else {
                                    echo 'Team ' . $row_bonus_collected->team;
                                }
                                ?>
                            </td>
                            <td class="tb-column"><?= $row_bonus_collected->purchase; ?></td>
                            <td class="tb-column">
                                <?= $row_bonus_collected->mtm; ?> MTM
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <table class="text-center tb-custom" width="100%" cellspacing="0">
                <thead class="text-tb-head">
                    <tr>
                        <th colspan="4" class="text-right">Total: </th>
                        <th class="tb-column"><?= !empty($total_excess) ? round($total_excess, 10) . " MTM" : "0"; ?></th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Basecamp</th>
                        <th>User ID</th>
                        <th>Package</th>
                        <th>MTM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bonus_excess as $row_bonus_excess) {
                    ?>
                        <tr>
                            <td class="tb-column">
                                <?= date('d/m/Y', $row_bonus_excess->datecreate); ?>
                            </td>
                            <td class="tb-column">
                                <?= $row_bonus_excess->bs_name; ?>
                            </td>
                            <td class="tb-column">
                                <?php
                                if ($row_bonus_excess->cart_id != 0) {
                                    $userId = $userClass->usernameBasecamp($row_bonus_excess->cart_id);
                                    echo $userId;
                                } else {
                                    echo 'Team ' . $row_bonus_excess->team;
                                }
                                ?>
                            </td>
                            <td class="tb-column"><?= $row_bonus_excess->name; ?></td>
                            <td class="tb-column">
                                <?= $row_bonus_excess->mtm; ?> MTM
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->