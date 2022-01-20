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
                <img src="<?= base_url('assets/photo/tour/ubud-art-market.jpg'); ?>" alt="Ubud Art Market" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">UBUD MARKET</h2>
                <p>Ubud Traditional Art Market terletak di kawasan pariwisata Ubud Bali, seperti Monkey Forest Ubud dan Sawah Terasering Tegalalang Ubud.
                    Oleh karena itu banyak wisatawan lokal maupun mancanegara yang berkunjung ke sini untuk mampir membeli cinderamata sebelum pulang.
                    Lokasi pasar Ubud juga terbilang strategis karena berada di depan istana raja ubud yang bernama Puri Saren Ubud.
                    Hal unik lain yang menambah daya tarik pasar tradisional Ubud yaitu pasar ini pernah dijadikan lokasi syuting film Hollywood dari Julia Roberts yang berjudul Eat Pray Love.</p>
                <p>Pasar Ubud Bali dibagi menjadi dua area yaitu blok barat dan blok timur. Blok barat merupakan pasar seni Ubud utama sedangkan blok timur
                    merupakan pasar tradisional yang melayani kebutuhan sehari-hari. Hal ini menjadikan pasar Ubud menjadi tujuan yang tepat untuk berbelanja. </p>
                <p>Pasar seni Ubud Bali menjual berbagai macam barang cinderamata maupun oleh-oleh khas Bali. Mulai dari topeng, patung, lukisan, beraneka gerabah,
                    syal sutra yang indah, kemeja santai, layang - layang, keranjang, topi dan pernak-pernik hasil kerajinan lainnya tersedia di Ubud Art Market Bali.
                    Namun, ada juga barang-barang antik khas Pasar Seni Ubud mulai dari rok bohemian satin berwarna empat kali lipat, lampu minyak gaya Maroko, kamisol batik yang dijahit quilt dan patung-patung Budha kuningan.
                    Bagi penyuka kerajinan anyaman, Ubud Traditional Art Market merupakan solusi yang tepat untuk memburunya.
                    Berbagai macam bentuk kerajinan hasil anyaman tangan dapat dipilih sebagai koleksi pribadi maupun cinderamata.
                    Jika suasana sedang tidak terlalu ramai pengunjung juga bisa meminta izin kepada penjual untuk ber-swafoto di pasar seni Ubud.</p>
                <p>Perlu diketahui bahwa hampir semua kios yang ada di pasar tradisional Ubud tidak mencantumkan harga pada barang-barang yang dijual.
                    Oleh karena itu, pengunjung harus menyiapkan skill menawar agar dapat memperoleh harga yang sesuai dengan keinginan.
                    Selain itu, rencanakan daftar barang yang akan anda beli untuk mempersingkat waktu belanja, mengingat pasar seni Ubud selalu ramai dengan pengunjung.</p>
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