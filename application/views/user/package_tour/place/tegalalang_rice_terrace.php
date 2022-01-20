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
                <img src="<?= base_url('assets/photo/tour/tegalalang-rice.jpg'); ?>" alt="Gyeongbok Palace" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">TEGALALANG RICE TERRACE</h2>
                <p>Tegalalang Rice Terraces yakni sawah Tegalalang di Ubud yang terkenal dengan pemandangan sawah yang indah dan sistem irigasi inovatif yang dibuat oleh penduduk setempat.
                    Dikenal sebagai subak, yakni sistem irigasi koperasi tradisional Bali yang diturunkan oleh leluhur yang dihormati bernama Rsi Markandeya pada abad ke-8.
                    Pemandangan sawah berundak Tegalalang ini terletak di desa Ceking, sehingga dikenal juga dengan nama Ceking Rice Terrace,
                    tempat ini memang terkenal karena memiliki panorama sawah terasering atau sawah berundak berpenampilan indah dan asri,
                    serta latar belakang pohon nyiur terlihat serasi berpadu indah.
                    Dengan pemandangan yang indah dan mudah dijangkau, Tegalalang Rice Terraces menawarkan tempat berfoto para pengguna instagram.
                    Selain itu Anda bisa bersantai sambil menikmati minuman kelapa hijau yang segar.</p>
                <p>Terdapat aktivitas seru yang tidak boleh Anda lewatkan, yakni Tegalalang Rice Terraces Swing biasa disebut dengan Bali Swing.
                    Menikmati keindahan Tegalalang Rice Terraces dengan swing adalah cara terbaik untuk mengisi liburan Anda selama di Bali.</p>
                <p>Agar bisa lebih maksimal lagi menikmati keindahan objek wisata Tegalalang, anda bisa makan siang di restoran pinggir sawah sambil menikmati pemandangan sawah berteras indah.
                    Hamparan alam hijau terpampang menghibur mata atau menyaksikan para petani mulai panen atau menyabit rumput untuk pakan ternaknya,
                    siapa menyangka Bali sebuah pulau kecil memiliki pemandangan sawah berundak yang spektakuler, di sini juga bisa menyaksikan tata cara pengairan yang disebut dengan subak,
                    suasana seperti ini akan terasa mengesankan selama liburan dan tour di Bali.</p>
                <p>Selanjutnya saat para petani melakukan aktifitasnya menggarap areal persawahan, bahkan ada sedang menyabit rumput untuk ternak mereka,
                    wisatawan asing menyaksikan kegiatan petani tradisional tentu adalah hal unik, yang tak pernah ditemukan di negara mereka,
                    tidak jarang pak tani dijadikan model, diambil gambarnya untuk dijadikan kenangan saat kembali pulang ke negaranya.</p>
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