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
            <div class="col-md-12 p-5 text-white mx-auto justify-content-center text-justify">
                <img src="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" alt="Incheon Airport" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">INCHEON AIRPORT</h2>
                <p>Bandar Udara Internasional Incheon adalah bandar udara terbesar di Korea Selatan dan merupakan salah satu yang terbesar di Asia.
                    Bandara ini menggantikan Bandar Udara Internasional Gimpo yang sekarang distatuskan sebagai bandara domestik kecuali penerbangan international ke Bandar Udara Internasional Haneda di Tokyo, Jepang dan Bandar Udara Internasional Hongqiao di Shanghai, Tiongkok.
                    Dikutip dari Visit Korea, bandara yang dibuka pada tahun 2001 ini ditetapkan sebagai ‘Best Airport Service Quality’
                    atau bandara dengan kualitas pelayanan terbaik pada tahun 2005 sampai 2014 secara berturut-turut oleh Airport Council International. Tidak hanya itu, sebagai salah satu bandara tersibuk didunia. Incheon International Airport juga ditetapkan sebagai Bandara Terbaik di Dunia oleh Global Traveler selama 4 tahun berturut-turut.</p>
                <p>Dengan prestasi sebanyak itu, rupanya bandara yang satu ini punya rahasia dibaliknya. Berdasarkan penumpang pesawat yang pernah datang ke bandara ini, salah satu hal menganggumkan di Incheon International Airport adalah pelayannya.</p>
                <p>Bandara Incheon juga memiliki fasilitas lengkap. Beberapa di antaranya yaitu terdapat tempat spa, ice skating ring, golf, casino, taman indoor, game center sampai Museum Korea.
                    Dari Bandara Incheon menuju ke Kota Seoul, Ibu Kota Korea Selatan, berjarak sekitar 48 kilometer. Ragam transportasi tersedia, seperti kereta api bawah tanah, Airport Railroad Express (AREX), bus bandara, dan taksi. </p>
                <p>Sedikit sejarah, Pada dekade 1990-an lalu lintas udara menuju Korea Selatan meningkat, hal itu semakin jelas bahwa Bandar Udara Internasional Gimpo tidak mampu mengatasi peningkatan lalu lintas udara. Untuk mengurangi beban Bandara Internasional Gimpo, pembangunan Bandara Internasional Incheon dimulai pada bulan November 1992.
                    Dibangun di atas tanah reklamasi antara Pulau Yeongjong dan Pulau Youngyu, memakan waktu 8 tahun untuk pembagunan, dengan tambahan 6 bulan untuk pengujian. Bandara Incheon secara resmi dibuka pada bulan Maret 2001.
                    Awalnya, ada banyak masalah, terutama yang melibatkan handling bagasi, yang memerlukan sistem yang dapat dioperasikan semi-otomatis. Sebagian besar masalah yang tetap dalam waktu 1 bulan, dan bandara mulai beroperasi secara normal.</p>
            </div>
        </div>
    </div>
    <div class="my-4 mx-auto w-50">
        <a onclick="window.history.back()" class="btn btn-cancel btn-block">BACK</a>
    </div>

    <!-- /.content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->