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
                <img src="<?= base_url('assets/photo/tour/seoul.jpg'); ?>" alt="Yongin Minsokchon" class="mb-4 img-placetour">
                <h2 class="font-italic font-weight-bold">SEOUL CITY</h2>
                <p>Seoul adalah ibu kota Korea Selatan yang berusia lebih dari 600 tahun dan hingga 1945, ibu kota dari seluruh Korea. Kota ini merupakan Kota Khusus Korea.
                    Sejak berdirinya Korea Selatan—pada tahun 1948, dia menjadi ibu kota negara, kecuali beberapa waktu pada masa Perang Korea.</p>
                <p>Seoul terletak di barat laut negara, di bagian selatan DMZ Korea, di Sungai Han. Kota ini adalah pusat politik, budaya, sosial dan ekonomi di Korea Selatan dan Asia Timur.
                    Dia juga pusat bisnis, keuangan, perusahaan multinasional, dan organisasi global. Sampai sekarang, Seoul dianggap sebagai sinar dari ekonomi Asia Timur, simbol dari keajaiban ekonomi Korea.</p>
                <p>Sebanyak lebih dari 17,5 juta turis internasional menyambangi Ibu Kota Korea Selatan di tahun 2019 silam. Sayangnya, pandemi global Covid-19 yang tengah berlangsung telah membuat gelombang pariwisata tersebut terhenti.
                    Namun ternyata, pandemi justru mampu menghasilkan paparan pop culture Korea Selatan yang jauh lebih hebat lagi, di mana gaya hidup trendi nan apik dari Negeri Ginseng tersebut kerap diserap lewat berbagai media digital dan platform hiburan sehari-hari.
                    Di tengah keterbatasan hiburan, pop culture Korea Selatan menemukan jalan untuk menginvasi dan menanamkan obsesi. Sebab itu, gelombang pariwisata menuju Seoul pun diperkirakan akan melonjak dahsyat ketika pandemi berakhir kelak, atau saat perbatasan negara kembali dibuka.</p>
                <p>Berpopulasi lebih dari 10 juta jiwa, Seoul merupakan salah satu kota paling maju di dunia yang juga berdedikasi dalam melestarikan ratusan tahun tradisinya untuk tetap hidup. Aspek modern dan kuno hidup berdampingan secara kontras namun harmonis.
                    Kota futuristis ini mempertahankan keanggunannya dari peninggalan dinasti kuno yang dulu pernah berkuasa. Maka lumrah halnya bila Anda kerap menemukan butik desainer high-brand melebur bersama lekuk-lekuk atap istana berarsitektur Goryeo dan Joseon.
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