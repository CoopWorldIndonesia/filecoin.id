<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-white my-home-title">GLOBAL</h1>

    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4"> -->
    <!-- <div class="card-body"> -->
    <!-- <div class="table-responsive"> -->
    <?php
    $fm = $cart['fm'] ?? null;
    $explode_fm = explode('M', $fm);

    $level = $explode_fm[1] ?? null;

    if($fm4 != 0)
    {
        $bonus_fm4  = ((($omset_fil * 2)/100)*4)/$fm4;
    }
    else
    {
        $bonus_fm4 = 0;
    }
    
    if($fm5 != 0)
    {
        $bonus_fm5  = ((($omset_fil * 1)/100)*4)/$fm5;
    }
    else
    {
        $bonus_fm5 = 0;
    }
    
    if($fm6 != 0)
    {
        $bonus_fm6  = ((($omset_fil * 0.5)/100)*4)/$fm6;
    }
    else
    {
        $bonus_fm6 = 0;
    }
    
    if($fm7 != 0)
    {
        $bonus_fm7  = ((($omset_fil * 0.4)/100)*4)/$fm7;
    }
    else
    {
        $bonus_fm7 = 0;
    }
    
    if($fm8 != 0)
    {
        $bonus_fm8  = ((($omset_fil * 0.3)/100)*4)/$fm8;

    }
    else
    {
        $bonus_fm8 = 0;
    }
    
    if($fm9 != 0)
    {
        $bonus_fm9  = ((($omset_fil * 0.2)/100)*4)/$fm9;
    }
    else
    {
        $bonus_fm9 = 0;
    }

    if($fm10 != 0)
    {
        $bonus_fm10 = ((($omset_fil * 0.1)/100)*4)/$fm10;
    }
    else
    {
        $bonus_fm10 = 0;
    }
    ?>
    <div class="row mb-3 px-3">
        <div class="logo-index col-lg-6 text-white my-home-card text-center">
            <div class="d-flex mb-2">
                <div class="mr-auto p-2 small">
                    Today Omset :
                </div>
                <div class="p-2 small">
                    <?= empty($today_omset) ? '0' : $today_omset; ?> MTM 
                </div>
            </div>
        </div>
        <div class="logo-index col-lg-6 text-white my-home-card text-center">
            <div class="d-flex mb-2">
                <div class="mr-auto p-2 small">
                    Total Omset this Month :
                </div>
                <div class="p-2 small">
                    <?= empty($current_omset) ? '0' : $current_omset; ?> MTM
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3 px-3">
        <table class="text-center tb-custom" width="100%" cellspacing="0">
            <thead class="text-tb-head">
                <tr>
                    <th>Level </th>
                    <th>Amount </th>
                    <th>Bonus </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        if($level >= 4)
                        {
                            ?>
                    <tr>
                        <th class="tb-column">FM4 (2%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM4');?>">
                                <?= $fm4 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm4) ? $bonus_fm4." MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }

                        if($level >= 5)
                        {
                    ?>
                    <tr>
                        <th class="tb-column">FM5 (1%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM5');?>">
                                <?= $fm5 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm5) ? $bonus_fm5. " MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }

                        if($level >= 6)
                        {
                    ?>
                    <tr>
                        <th class="tb-column">FM6 (0,5%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM6');?>">
                                <?= $fm6 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm6) ? $bonus_fm6. " MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }

                        if($level >= 7)
                        {
                    ?>
                    <tr>
                        <th class="tb-column">FM7 (0,4%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM7');?>">
                                <?= $fm7 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm7) ? $bonus_fm7. " MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }

                        if($level >= 8)
                        {
                    ?>
                    <tr>
                        <th class="tb-column">FM8 (0,3%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM8');?>">
                                <?= $fm8 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm8) ? $bonus_fm8. " MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }

                        if($level >= 9)
                        {
                    ?>
                    <tr>
                        <th class="tb-column">FM9 (0,2%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM9');?>">
                                <?= $fm9 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm9) ? $bonus_fm9. " MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }

                        if($level >= 10)
                        {
                    ?>
                    <tr>
                        <th class="tb-column">FM10 (0,1%)</th>
                        <td class="tb-column">
                            <a href="<?= base_url('user/detailLevelMonthNow/FM10');?>">
                                <?= $fm10 ?? 0; ?>
                            </a>
                        </td>
                        <td class="tb-column"><?= !empty($bonus_fm10) ? $bonus_fm10." MTM" : '0'; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
    <ul class="nav nav-tabs my-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Receive</a>
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
                        <th colspan="4" class="text-right">Total: </th>
                        <th class="tb-column"><?= round($total, 10); ?> MTM</th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Omset</th>
                        <th>Level</th>
                        <th>accumulation</th>
                        <th>MTM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($bonus as $row_bonus) 
                    {
                        $date = date('Y-m-d', $row_bonus->datecreate);
                        $date_omset = new DateTime($date);
                        $date_omset->modify('-1 days');
                        $dateNow = $date_omset->format('Y-m');
                        $level_fm = empty($row_bonus->level_fm) ? $row_bonus->note_level : $row_bonus->level_fm;
                    ?>

                        <tr>
                            <td class="tb-column">
                                <?= date('d/m/Y', $row_bonus->datecreate); ?>
                            </td>
                            <td class="tb-column"><?= $this->M_user->get_omset_global($dateNow)['total_fil'] * 4 + $this->M_user->get_omset_global($dateNow)['total_mtm'] + $this->M_user->get_omset_global($dateNow)['total_zenx'] / 3; ?> MTM</td>
                            <td class="tb-column"><?= empty($row_bonus->level_fm) ? $row_bonus->note_level : $row_bonus->level_fm ?></td>
                            <td class="tb-column"><?= $this->M_user->get_level_month($level_fm, $dateNow)['total'] + $this->M_user->get_level_month2($level_fm, $dateNow)['total'] ?></td>
                            <td class="tb-column">
                                <?= round($row_bonus->mtm, 10); ?> MTM
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
                        <th class="tb-column"><?= $total_excess; ?> MTM</th>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <th>Omset</th>
                        <th>Level</th>
                        <th>accumulation</th>
                        <th>MTM</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($excess_bonus as $row_excess) {
                        $date = date('Y-m-d', $row_excess->datecreate);
                        $date_omset = new DateTime($date);
                        $date_omset->modify('-1 days');
                        $dateNow = $date_omset->format('Y-m');
                        $level_fm = empty($row_excess->level_fm) ? $row_excess->note_level : $row_excess->level_fm;
                    ?>

                        <tr>
                            <td class="tb-column">
                                <?= date('d/m/Y', $row_excess->datecreate); ?>
                            </td>
                            <td class="tb-column"><?= $this->M_user->get_omset_global($dateNow)['total_fil'] * 4 + $this->M_user->get_omset_global($dateNow)['total_mtm'] + $this->M_user->get_omset_global($dateNow)['total_zenx'] / 3; ?> MTM</td>
                            <td class="tb-column"><?= empty($row_excess->level_fm) ? $row_excess->note_level : $row_excess->level_fm; ?></td>
                            <td class="tb-column"><?= $this->M_user->get_level_month($level_fm, $dateNow)['total'] + $this->M_user->get_level_month2($level_fm, $dateNow)['total'] ?></td>
                            <td class="tb-column">
                                <?= $row_excess->mtm; ?> MTM
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->