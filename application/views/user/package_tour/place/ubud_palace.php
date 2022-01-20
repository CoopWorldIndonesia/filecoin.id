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
                <img src="<?= base_url('assets/photo/tour/ubud-palace.jpg'); ?>" alt="Ubud Palace" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">UBUD PALACE</h2>
                <p>Ubud Palace atau dikenal dengan nama Puri Saren Agung, yang merupakan sebuah istana sebagai pusat pemerintahan kerajaan yang berkuasa pada masanya.
                    Dari sinilah sejarah perkembangan pariwisata di kawasan Ubud dimulai, mulai dari jaman kerajaan, kolonial Belanda dan sampai saat ini.</p>
                <p>Destinasi wisata Puri Saren Agung, memang menjadi salah satu tujuan tour yang hits dan populer di kawasan pusat pariwisata Ubud,
                    setiap harinya selalu ramai pengunjung, apalagi saat malam harinya.</p>
                <p>Bangunan puri ini menyimpan banyak cerita sejarah dari masa Bali kuno jaman tempo dulu, sekarang masih terjaga dengan baik,
                    walaupun ada restorasi di beberapa tempat, namun masih mempertahankan bentuk aslinya, menggambarkan istana kerajaan yang megah di jamannya.
                    Keberadaan Puri Ubud tertata dan terjaga dengan baik seperti bentuk aslinya, menjaga desain dan tata ruang tradisional Bali,
                    serta ciri khas bangunan tradisional yang masih anda jumpai berdiri kokoh, dipenuhi ornamen ukiran Bali dengan kealamiannya.</p>
                <p>Rumah-rumah tradisional masih menghiasi pekarangan istana. Sehingga jika anda ingin menikmati pesona rumah adat tradisional Bali dalam balutan suasana istana,
                    maka Puri Ubud bisa menjadi tujuan tour anda berikutnya, di istana inilah anda bisa menemukan budaya dan kearifan lokal.
                    Identitas Bali memang tampil begitu sempurna di Puri Ubud, sehingga mengingatkan pengunjung ke masa feodalisme atau masa tempo dulu pada jaman Bali kuno.
                    Tempat seperti ini memang sangat jarang bisa kita temui sekarang ini. Apalagi puri ini sebagai tempat wadah dan pementasan seni tari tradisional yang banyak diminati wisatawan.
                    Sehingga tidak mengherankan Puri Saren Agung adalah salah satu tempat atau destinasi wisata puri yang sangat populer di pulau Dewata.</p>
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