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
                <img src="<?= base_url('assets/photo/tour/myeongdong.jpg'); ?>" alt="Myeongdong Street" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">MYEONGDONG STREET</h2>
                <p>Myeongdong Street berada di Jang-gu Seoul, Korea Selatan. Tempat ini merupakan salah satu distrik perbelanjaan tersibuk di Korea Selatan. Hal ini tidak lain karena sebagian besar wilayah di sekitarnya merupakan distrik bisnis dan komersil.
                    Dengan demikian, Myeongdong menjadi salah satu pusat perbelanjaan terbesar dan juga salah satu tempat wisata utama di Kota Seoul.</p>
                <p>Sedikit sejarah mengenai Myeongdong Street, Kawasan ini disebut sebagai Myeongryebang pada masa Dinasti Joseon. Dulunya, ebagian besar area di wilayah ini merupakan perumahan sebelum datangnya era Jepang. Sejak saat itu, nama wilayah ini diganti menjadi Myeongchijeong dan menjadi distrik komersil.
                    Hal ini berkat pengaruh dari meningkatnya perdagangan di Chungmuro. Myeongdong sendiri baru resmi menjadi distrik setelah kemerdekaan, yaitu pada tahun 1946.</p>
                <p>Memasuki periode 1960-an, ekonomi Korea Selatan berkembang dan turut berimbas pada perekonomian di Myeongdong. Di sini berdiri berbagai department store, restoran, dan toko-toko lain seperti butik. Pada tahun 1970-an, Myeongdong telah menjadi kiblat bagi kaum muda Korea.</p>
                <p>Kawasan Myeongdong disebut-sebut menjadi salah satu pusat belanja paling mahal di dunia. Selain toko-toko, di kawasan ini juga berdiri hotel, restoran, bioskop, hingga situs bersejarah. Ini melengkapi Myeongdong sebagai salah satu kawasan wisata utama di Korea Selatan.</p>
                <p>Bagi wisatawan yang gemar berbelanja, Myeongdong menawarkan beragam produk seperti skincare hingga fesyen dan kuliner. Sebagai pusat perbelanjaan, tentu banyak hal yang dapat ditemukan di kawasan yang menjadi favorit wisatawan lokal maupun asing ini.
                    Merek yang ditawarkan beragam, mulai dari lokal hingga internasional. Sebut saja H&M, GAP, Uniqlo, hingga Zara. Toko-toko besar juga tersedia di kawasan ini seperti M Plaza, Lotte Department Store, Shinsegae Department Store, hingga Migliore.
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