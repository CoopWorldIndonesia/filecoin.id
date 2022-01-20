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
                <img src="<?= base_url('assets/photo/tour/gyeongbok-palace.jpg'); ?>" alt="Gyeongbok Palace" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">NGURAH RAI AIRPORT</h2>
                <p>Ngurah Rai International Airport adalah bandar udara internasional yang terletak di sebelah selatan Bali, tepatnya di daerah Kelurahan Tuban, Kecamatan Kuta, Kabupaten Badung, sekitar 13 km dari Denpasar.
                    Bandar Udara Internasional Ngurah Rai merupakan bandara tersibuk kedua di Indonesia, setelah Bandara Internasional Soekarno-Hatta.
                    Nama bandara ini diambil dari nama I Gusti Ngurah Rai, seorang pahlawan Indonesia dari Bali.</p>
                <p>Bandar Udara Ngurah Rai dibangun pada tahun 1930 oleh <i>Departement Voor Verkeer en Waterstaats</i> (semacam Departemen Pekerjaan Umum). Landas pacu berupa <i>airstrip</i> sepanjang 700 meter dari rumput di tengah ladang dan pekuburan di desa Tuban.
                    Karena lokasinya berada di Desa Tuban, masyarakat sekitar menamakan <i>airstrip</i> ini sebagai Pelabuhan udara Tuban.
                    Pada tahun 1942–1947, <i>airstrip</i> mengalami perubahan. Panjang landas pacu bertambah menjadi 1,2 km dari semula 700 meter.
                    Tahun 1949 dibangun gedung terminal dan menara pengawas penerbangan sederhana yang terbuat dari kayu. Komunikasi penerbangan menggunakan transceiver kode morse.</p>
                <p>Untuk meningkatkan kepariwisataan Bali, Pemerintah Indonesia kembali membangun gedung terminal internasional dan perpanjangan landas pacu ke arah barat yang semula 1,2 km menjadi 2,7 km dengan overrun 2×100 meter.
                    Proyek yang berlangsung tahun 1963–1969 diberi nama Proyek Bandara Tuban dan sekaligus sebagai persiapan internasionalisasi Pelabuhan Udara Tuban.<br>
                    Seiring selesainya <i>temporary terminal</i> dan <i>runway</i> pada Proyek Bandara Tuban, pemerintah meresmikan pelayanan penerbangan internasional di Pelabuhan Udara Tuban, tanggal 10 Agustus 1966.<br>
                    Penyelesaian Pengembangan Pelabuhan Udara Tuban ditandai dengan peresmian oleh Presiden Soeharto pada tanggal 1 Agustus 1969, yang sekaligus menjadi momen perubahan nama dari Pelabuhan Udara Tuban menjadi Pelabuhan Udara Internasional Ngurah Rai.
                </p>
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