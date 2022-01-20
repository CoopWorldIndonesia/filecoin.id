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
                <img src="<?= base_url('assets/photo/tour/ubud-monkey-forest.jpg'); ?>" alt="Ubud Monkey Forest" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">UBUD MONKEY FOREST</h2>
                <p>Monkey Forest Ubud menjadi destinasi wisata yang sangat populer di Pulau Bali. Berlokasi di Ubud, tempat wisata yang satu ini pun jadi lokasi yang banyak dikunjungi oleh wisatawan. Baik wisatawan asing ataupun domestik, kerap menyempatkan waktunya untuk datang ke tempat ini.</p>
                <p>Monkey Forest Ubud merupakan sebuah tempat cagar alam dan kompleks candi yang terletak di desa Padangtegal Ubud, Bali. Seperti namanya, tempat ini merupakan habitat yang secara khusus dibuat untuk tempat tinggal para monyet. Bahkan total terdapat kurang lebih 749 ekor monyet yang tinggal di hutan ini.
                    Ada enam kelompok monyet yang menempati wilayah berbeda di hutan ini, monyet yang tinggal di sini termasuk adalah monyet ekor panjang yang mempunyai nama latin Macaca fascicularis. Tak hanya itu, Ubud Monkey Foerest ini juga merupakan rumah untuk setidaknya 186 spesies pohon yang berbeda.</p>
                <p>Memasuki areal monkey forest Ubud Bali, sejumlah pedagang buah pisang menawarkan buah kepada anda, tentunya bukan untuk anda makan, tetapi untuk monyet-monyet hutan, karena mereka doyan dengan buah pisang, sehingga anda bisa berinteraksi dengan kera atau monyet yang di destinasi wisata di Ubud ini.
                    Jika ingin mendapatkan pengalaman lebih seru di monkey forest Ubud, anda bisa berphoto ria dengan monyet-monyet penghuni hutan, dengan pancingan makanan buah pisang yang anda bawa, dibantu oleh pemandu setempat, sehingga anda merasa nyaman. Tour dengan tujuan objek wisata monkey forest ini memang menjadi tujuan yang ideal tidak hanya untuk orang dewasa saja tetapi juga anak-anak
                </p>
                <p>Selain aktifitas memberi makan kera dan berphoto, anda bisa duduk bersantai di tengah hutan yang rindang, menyaksikan kelucuan dan kelincahan monyet-monyet di sini, bermain dengan pasangannya ataupun anak-anaknya, anda bisa berada lebih dekat dengan mereka.
                    Monyet-monyet penghuni hutan jinak dan yang terpenting anda tidak mengganggu mereka, sehingga anda bisa mengabadikannya lewat jepretan kamera dan foto selfie dengan bantuan petugas setempat.
                </p>
                <p>Walaupun monyet-monyet penghuni hutan di monkey forest Ubud tidak begitu agresif, anda lebih disarankan untuk mengamankan barang-barang berharga dan aksesoris seperti anting-anting, gelang, jam tangan,
                    kacamata dan juga handphone dalam tas anda, dalam situasi tertentu, mereka bisa saja nakal dan berbuat ulah, karena barang-barang yang mereka pikir aneh akan menarik minatnya.</p>
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