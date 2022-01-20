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
                <p class="font-italic text-center mb-0" style="color:#c49a6c; font-size:40px; font-weight:800; margin-top:-75px; text-shadow: 4px 3px 10px black;">GOLD VVIP TOUR INTINERARY</p>
                <p class="text-center text-white mb-1" style="font-size:24px; font-weight:800;">VIP 6 DAY 5 NIGHT TOUR KOREA</p>
                <table border="1" cellpadding="4" class="tb-tour font-italic mx-auto w-100">
                    <tr>
                        <th class="text-center">DATE</th>
                        <th class="text-center">TIME</th>
                        <th class="text-center">DESTINATION</th>
                        <th class="text-center">ACTIVITY</th>
                    </tr>
                    <tr>
                        <th rowspan="2"></th>
                        <td class="text-center">01.00</td>
                        <td>INDONESIA TO KOREA</td>
                        <td>CHECK IN & TAKE OFF</td>
                    </tr>
                    <tr>
                        <td class="text-center">09.40</td>
                        <td><a href="<?= base_url('user/incheonAirport'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" data-title="INCHEON AIRPORT" data-text="Bandar Udara Internasional Incheon adalah bandar udara terbesar di Korea Selatan dan merupakan salah satu yang terbesar di Asia.">KOREA INCHEON AIRPORT</a></td>
                        <td>ARRIVE AT INCHEON AIRPORT</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="text-center">DAY 1</th>
                        <td class="text-center">10.00</td>
                        <td><a href="<?= base_url('user/seoulCity'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/seoul.jpg'); ?>" data-title="SEOUL CITY" data-text="Seoul adalah ibu kota Korea Selatan yang berusia lebih dari 600 tahun dan hingga 1945. Seoul terletak di barat laut negara, di bagian selatan DMZ Korea, di Sungai Han.">SEOUL CITY</a></td>
                        <td>HAVE LUNCH</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.00</td>
                        <td><a href="<?= base_url('user/gyeongbokPalace'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/gyeongbok-palace.jpg'); ?>" data-title="GYEONGBOK PALACE" data-text="Istana Gyeongbok adalah sebuah istana yang terletak di sebelah utara kota Seoul (Gangbuk), Korea Selatan. Istana ini termasuk dari lima istana besar dan merupakan yang terbesar yang dibangun oleh Dinasti Joseon">GYEONGBOK PALACE</a></td>
                        <td>TOUR</td>
                    </tr>
                    <tr>
                        <td class="text-center">18.00</td>
                        <td>HOTEL (*6)</td>
                        <td>DINNER</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="text-center">DAY 2</th>
                        <td class="text-center">10.00</td>
                        <td>HOTEL (*6)</td>
                        <td>BREAKFAST</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.00</td>
                        <td><a href="<?= base_url('user/insadong'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/insadong.jpg'); ?>" data-title="INSA DONG" data-text="Insadong adalah bagian dari permukiman di kota Seoul (dong) dari distrik Jongno-gu. Jalan utama di Insadong adalah Jalan Insadong (Insadong-gil) yang dihubungkan dengan banyak jalan-jalan kecil di dalam distrik Jongno.">INSA-DONG</a></td>
                        <td>TOUR</td>
                    </tr>
                    <tr>
                        <td class="text-center">18.00</td>
                        <td><a href="<?= base_url('user/namsanTower'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/namsan-tower.jpg'); ?>" data-title="NAMSAN TOWER" data-text="Namsan Seoul Tower adalah sebuah menara yang menjulang di tengah kota Seoul. Tinggi menara ini adalah sekitar 480 meter diatas permukaan laut, menjadikannya salah satu menara tertinggi yang dimiliki Korea Selatan.">NAMSAN TOWER</a></td>
                        <td>TOUR & DINNER </td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="text-center">DAY 3</th>
                        <td class="text-center">10.00</td>
                        <td>HOTEL (*6)</td>
                        <td>BREAKFAST</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.00</td>
                        <td><a href="<?= base_url('user/yonginMinsokchon'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/yongin-minsokchon.jpg'); ?>" data-title="YONGIN MINSOKCHON" data-text="Yongin Minsokchon atau Korean Folk Village merupakan rekonstruksi dan relokasi dari desa-desa Dinasti Joseon yang tersebar di beberapa wilayah Korea Selatan.">YONGIN MINSOKCHON</a></td>
                        <td>TOUR</td>
                    </tr>
                    <tr>
                        <td class="text-center">18.00</td>
                        <td><a href="<?= base_url('user/myeongdongStreet'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/myeongdong.jpg'); ?>" data-title="MYEONGDONG STREET" data-text="Myeongdong Street berada di Jang-gu Seoul, Korea Selatan. Tempat ini merupakan salah satu distrik perbelanjaan tersibuk di Korea Selatan. Hal ini tidak lain karena sebagian besar wilayah di sekitarnya merupakan distrik bisnis dan komersil.">MYEONGDONG STREET</a></td>
                        <td>TOUR & DINNER</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="text-center">DAY 4</th>
                        <td class="text-center">10.00</td>
                        <td>HOTEL (*6)</td>
                        <td>BREAKFAST</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.00</td>
                        <td><a href="<?= base_url('user/lotteTower'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/lotte-tower.jpg'); ?>" data-title="LOTTE TOWER" data-text="Lotte World Tower adalah sebuah gedung pencakar langit 123 lantai dengan ketinggian 555,7 meter (1.823 kaki) yang terletak di Seoul, Korea Selatan. Saat ini Lotte Tower merupakan gedung tertinggi di Korea Selatan dan tertinggi kelima di dunia.">LOTTE TOWER</a></td>
                        <td>TOUR</td>
                    </tr>
                    <tr>
                        <td class="text-center">18.00</td>
                        <td><a href="<?= base_url('user/observatoriumLotteTower'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/observatorium.jpg'); ?>" data-title="OBSERVATORIUM LOTTE TOWER" data-text="Di Lotte World Tower ini terdapat observatorium yang terletak di lantai 118, observatorium tersebut diyakini akan menarik perhatian wisatawan asing. Dari observatorium itu, turis bisa menyaksikan keindahan berbagai sisi Kota Seoul dari ketinggian.">OBSERVATORIUM LOTTE TOWER</a></td>
                        <td>TOUR & DINNER</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="text-center">DAY 5</th>
                        <td class="text-center">10.00</td>
                        <td>HOTEL (*6)</td>
                        <td>BREAKFAST</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.00</td>
                        <td>HOSPITAL KOREA</td>
                        <td>CHECK UP / MEDICAL / PLASTIC SURGERY</td>
                    </tr>
                    <tr>
                        <td class="text-center">18.00</td>
                        <td><a href="<?= base_url('user/namiIsland'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/nami-island.jpg'); ?>" data-title="NAMI ISLAND" data-text="Nami Island, atau Pulau Nami ini tentu sudah sangat akrab di telinga, terutama bagi pencinta drama Korea. Nami, pulau dengan pohon-pohonnya yang khas memang terlihat sangat indah dan romantis pada musim salju, terletak di area Bendungan Cheongpyeong, di wilayah Chuncheon-si, Gangwon-do.">NAMI ISLAND</a></td>
                        <td>TOUR & DINNER</td>
                    </tr>
                    <tr>
                        <th rowspan="3" class="text-center">DAY 6</th>
                        <td class="text-center">10.00</td>
                        <td>HOTEL (*6)</td>
                        <td>BREAKFAST</td>
                    </tr>
                    <tr>
                        <td class="text-center">13.00</td>
                        <td><a href="<?= base_url('user/lotteWorld'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/lotte-world.jpg'); ?>" data-title="LOTTE WORLD" data-text="Lotte World merupakan destinasi yang wajib anda kunjungi ketika berada di Seoul, dikenal sebagai salah satu taman hiburan terbesar di dunia, Lotte World memiliki fasilitas terbaik yang terdiri dari ruangan indoor dan outdoor, masing-masing disebut sebagai Adventure Park dan Magic Island.">LOTTE WORLD</a></td>
                        <td>TOUR</td>
                    </tr>
                    <tr>
                        <td class="text-center">18.00</td>
                        <td>KOREA TO INDONESIA</td>
                        <td>CHECK IN & TAKE OFF</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="my-4 mx-auto w-50">
        <a href="<?= base_url() . 'user/tour/3' ?>" class="btn btn-bonus btn-block font-italic">Buy</a>
    </div>



    <!-- /.content -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="card-priview">
    <img src="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
    </div>
</div>