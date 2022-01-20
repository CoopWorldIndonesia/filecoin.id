<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-white my-home-title">PACKAGE PURCHASE</h1>
    <?= $this->session->flashdata('message'); ?>

    <!-- content -->
    <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="filecoin-tab" data-toggle="tab" href="#filecoin" role="tab" aria-controls="filecoin" aria-selected="true">
                                Filecoin Mining
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mtm-tab" data-toggle="tab" href="#mtm" role="tab" aria-controls="mtm" aria-selected="false">
                                MTM Coin Mining
                            </a>
                        </li>
                    </ul> -->
    <!-- <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="filecoin" role="tabpanel" aria-labelledby="filecoin-tab">
                            <div class="row">
                                <?php foreach ($package_filecoin as $row_filecoin) { ?>
                                <div class="col-xl-4 col-md-12 my-3">
                                    <div class="card border-left-info shadow h-100 py-2 purchase">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="mb-3">
                                                    <h2><?= $row_filecoin->name; ?></h2>
                                                </div>
                                                <div class="mb-3">
                                                    <img src="<?= base_url('assets/img/filecoin-img.png'); ?>" alt="gambar" width="100">
                                                </div>
                                                <div class="mb-3">
                                                    <a href="<?= base_url() . 'user/fil/' . $row_filecoin->id; ?>" class="btn btn-primary btn-block"><?= $row_filecoin->fil; ?> FIL</a>
                                                    <a href="#" class="btn btn-primary btn-block"><?= $row_filecoin->usdt; ?> USDT</a>
                                                    <a href="#" class="btn btn-primary btn-block"><?= $row_filecoin->mtm; ?> MTM/+100 Day</a>
                                                </div>
                                                <div class="mb-3">
                                                    <p><?= $row_filecoin->daysmining; ?> Days of Mining</p>
                                                    <p>Start After <?= $row_filecoin->startafter; ?> Days</p>
                                                    <p>Hashrate : <?= $row_filecoin->hashrate; ?> Gib</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mtm" role="tabpanel" aria-labelledby="mtm-tab">
                            <div class="row">

                                <?php foreach ($package_mtmcoin as $row_mtmcoin) { ?>
                                <div class="col-xl-4 col-md-12 my-3">
                                    <div class="card border-left-info shadow h-100 py-2 purchase">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <div class="mb-3">
                                                    <h2><?= $row_mtmcoin->name; ?></h2>
                                                </div>
                                                <div class="mb-3">
                                                    <img src="<?= base_url('assets/img/mtmcoin-img.png'); ?>" alt="gambar" width="100">
                                                </div>
                                                <div class="mb-3">
                                                    <a href="<?= base_url() . 'user/fil/' . $row_mtmcoin->id; ?>" class="btn btn-primary btn-block"><?= $row_mtmcoin->fil; ?> FIL</a>
                                                    <a href="#" class="btn btn-primary btn-block"><?= $row_mtmcoin->usdt; ?> USDT</a>
                                                    <a href="#" class="btn btn-primary btn-block"><?= $row_mtmcoin->mtm; ?> MTM/+100 Day</a>
                                                </div>
                                                <div class="mb-3">
                                                    <p><?= $row_mtmcoin->daysmining; ?> Days of Mining</p>
                                                    <p>Start After <?= $row_mtmcoin->startafter; ?> Days</p>
                                                    <p>Hashrate : <?= $row_mtmcoin->hashrate; ?> Gib</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div> -->

    <!-- new design -->
    <div class="row text-center navlink-package">
        <div class="col-lg-4 col-md-4 my-2">
            <a class="text-white text-decoration-none" href="<?= base_url('user/package'); ?>">
                <div class="link-package">MINING FIL</div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 my-2">
            <a class="text-white text-decoration-none" href="<?= base_url('user/packageTour'); ?>">
                <div class="link-package active">TOUR</div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 my-2">
            <a class="text-white text-decoration-none" href="#">
                <div class="link-package">MARKETPLACE</div>
            </a>
        </div>
    </div>

    <div class="bg-custom mt-5">
        <div class="row">
            <div class="col-md-12 p-5 mx-auto justify-content-center text-justify">
                <p class="font-italic text-center mb-0" style="color:#44c2cb; font-size:40px; font-weight:800; margin-top:-75px;   text-shadow: 4px 3px 10px black;">VIP TOUR INTINERARY</p>
                <p class="text-center text-white mb-1" style="font-size:24px; font-weight:800;">VIP 5 DAY 4 NIGHT TOUR BALI + NYEPI</p>
                <table border="1" cellpadding="4" class="tb-tour font-italic mx-auto w-100">
                    <thead>
                        <tr>
                            <th class="text-center">DATE</th>
                            <th class="text-center">TIME</th>
                            <th class="text-center">DESTINATION</th>
                            <th class="text-center">ACTIVITY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th rowspan="2" class="text-center">Day 1</th>
                            <td rowspan="2"></td>
                            <td rowspan="2">KOREA TO BALI</td>
                            <td>AIRPORT PICKUP</td>
                        </tr>
                        <tr>
                            <td>HOTEL CHECK IN</td>
                        </tr>
                        <tr>
                            <th rowspan="9" class="text-center">DAY 2 JIMBARAN TOUR</th>
                            <td class="text-center">09.30</td>
                            <td>ULUWATU TOUR</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">12.00</td>
                            <td>RESTAURANT</td>
                            <td>LUNCH</td>
                        </tr>
                        <tr>
                            <td class="text-center">13.00</td>
                            <td>SINGLE FIN</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">14.00</td>
                            <td>PADANG-PADANG BEACH</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">15.30</td>
                            <td>JOIN AT OGOH-OGOH FESTIVAL</td>
                            <td>FESTIVAL</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="text-center">16.00</td>
                            <td>OGOH-OGOH FESTIVAL</td>
                            <td rowspan="3">FREE TIME</td>
                        </tr>
                        <tr>
                            <td>DINNER INDONESIA</td>
                        </tr>
                        <tr>
                            <td>SEAFOOD DINNER</td>
                        </tr>
                        <tr>
                            <td class="text-center">21.00</td>
                            <td>HOTEL</td>
                            <td>REST</td>
                        </tr>
                        <tr>
                            <th class="text-center">DAY 3</th>
                            <td></td>
                            <td>ALL ACTIVITIES AT HOTEL</td>
                            <td>NYEPI DAY</td>
                        </tr>
                        <tr>
                            <th rowspan="4" class="text-center">DAY 4 KUTA TOUR</th>
                            <td class="text-center">12.00</td>
                            <td>RESTAURANT</td>
                            <td>LUNCH</td>
                        </tr>
                        <tr>
                            <td class="text-center">13.30</td>
                            <td>KUTA CITY TOUR</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">16.00</td>
                            <td>SEMINYAK TOUR</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">17.30</td>
                            <td>HOTEL</td>
                            <td>HIP HOP PERFORMANCE</td>
                        </tr>
                        <tr>
                            <th rowspan="8" class="text-center">DAY 5</th>
                            <td class="text-center">09.00</td>
                            <td>UBUD MONKEY FOREST</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">12.00</td>
                            <td>RESTAURANT</td>
                            <td>LUNCH</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="text-center">13.20</td>
                            <td>UBUD PALACE</td>
                            <td rowspan="3">FREE TOUR</td>
                        </tr>
                        <tr>
                            <td>SARASWATI TEMPLE</td>
                        </tr>
                        <tr>
                            <td>UBUD MARKET</td>
                        </tr>
                        <tr>
                            <td class="text-center">15.30</td>
                            <td>HOTEL</td>
                            <td>CHECK OUT</td>
                        </tr>
                        <tr>
                            <td class="text-center">18.30</td>
                            <td>HOTEL</td>
                            <td>ZPOP & DINNER</td>
                        </tr>
                        <tr>
                            <td class="text-center">22.00</td>
                            <td>NGURAH RAI AIRPORT</td>
                            <td>CHECK OUT</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="my-4 mx-auto w-50">
        <a href="<?= base_url() . 'user/tour/4' ?>" class="btn btn-bonus btn-block font-italic">Buy</a>
    </div>


    <!-- /.content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->