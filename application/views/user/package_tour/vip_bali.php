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
                <p class="text-center text-white mb-1" style="font-size:24px; font-weight:800;">VIP 4 DAY 3 NIGHT TOUR BALI</p>
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
                            <th rowspan="6" class="text-center">DAY 2 JIMBARAN TOUR</th>
                            <td class="text-center">10.00</td>
                            <td><a href="<?= base_url('user/gwk'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/gwk.jpg'); ?>" data-title="GWK PARK" data-text="Taman Budaya Garuda Wisnu Kencana (GWK) adalah sebuah kompleks taman budaya seluas ± 60 ha dengan patung Garuda dan Wisnu sebagai objek utamanya yang memiliki tinggi jika sudah jadi sekitar 120 meter dengan bentang sayap Garuda sekitar 60 meter serta akan menjadikannya sebagai patung terbesar di dunia.">GWK PARK</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">12.00</td>
                            <td>RESTAURANT</td>
                            <td>LUNCH</td>
                        </tr>
                        <tr>
                            <td class="text-center">13.30</td>
                            <td><a href="<?= base_url('user/padangpadangBeach'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/padang-padang_beach.jpg'); ?>" data-title="PADANG-PADANG BEACH" data-text="Pantai Padang Padang merupakan salah satu surga bahari dimiliki Pulau Dewata. Wisatawan lokal maupun mancanegara memilih pantai ini sebagai tempat berlibur mereka.">PADANG-PADANG BEACH</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">15.15</td>
                            <td><a href="<?= base_url('user/singleFin'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/single-fin.jpg'); ?>" data-title="SINGLE FIN" data-text="Kafe Single Fin Uluwatu ini memang memiliki lokasi yang sangat tepat untuk sarana menyaksikan pemandangan sunset. Kafe ini berada di pinggir tebing.">SINGLE FIN</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">16.30</td>
                            <td>ULUWATU TOUR</td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">16.30</td>
                            <td>HOTEL DROP</td>
                            <td>DINNER</td>
                        </tr>
                        <tr>
                            <th rowspan="8" class="text-center">DAY 3 UBUD TOUR</th>
                            <td class="text-center">09.00</td>
                            <td><a href="<?= base_url('user/ubudMonkeyForest'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/ubud-monkey-forest.jpg'); ?>" data-title="UBUD MONKEY FOREST" data-text="Monkey Forest Ubud menjadi destinasi wisata yang sangat populer di Pulau Bali. Berlokasi di Ubud, tempat wisata yang satu ini pun jadi lokasi yang banyak dikunjungi oleh wisatawan.">UBUD MONKEY FOREST</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">12.00</td>
                            <td>RESTAURANT</td>
                            <td>LUNCH UBUD</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="text-center">13.20</td>
                            <td><a href="<?= base_url('user/ubudPalace'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/ubud-palace.jpg'); ?>" data-title="UBUD PALACE" data-text="Ubud Palace atau dikenal dengan nama Puri Saren Agung, yang merupakan sebuah istana sebagai pusat pemerintahan kerajaan yang berkuasa pada masanya.">UBUD PALACE</a></td>
                            <td rowspan="3">TOUR</td>
                        </tr>
                        <tr>
                            <td><a href="<?= base_url('user/saraswatiTemple'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" data-title="SARASWATI TEMPLE" data-text="Saraswati Temple atau Pura Taman Saraswati terletak di pusat pariwisata Ubud, kabupaten Gianyar Bali. Pura ini tergolong cukup populer bagi wisatawan, sehingga menjadikannya sebagai tujuan tour ketika liburan dan wisata ke kawasan pariwisata Ubud.">SARASWATI TEMPLE</a></td>
                        </tr>
                        <tr>
                            <td><a href="<?= base_url('user/ubudMarket'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/ubud-art-market.jpg'); ?>" data-title="UBUD MARKET" data-text="Ubud Traditional Art Market terletak di kawasan pariwisata Ubud Bali, seperti Monkey Forest Ubud dan Sawah Terasering Tegalalang Ubud. Banyak wisatawan berkunjung untuk mampir membeli cinderamata sebelum pulang.">UBUD MARKET</a></td>
                        </tr>
                        <tr>
                            <td class="text-center">15.30</td>
                            <td><a href="<?= base_url('user/tegalalangRiceTerrace'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/tegalalang-rice.jpg'); ?>" data-title="TEGALALANG RICE TERRACE" data-text="Tegalalang Rice Terraces yakni sawah Tegalalang di Ubud yang terkenal dengan pemandangan sawah yang indah dan sistem irigasi inovatif yang dibuat oleh penduduk setempat.">TEGALALANG RICE TERRACE</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">16.30</td>
                            <td><a href="<?= base_url('user/tegenunganWaterfall'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" data-title="TEGENUNGAN WATERFALL" data-text="Air terjun di Bali sekarang ini menjadi salah satu destinasi wisata yang wajib dikunjungi. Salah satu wisata Air terjun yang ada di Gianyar bernama Air Terjun Tegenungan">TEGENUNGAN WATERFALL</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">19.00</td>
                            <td>HOTEL DROP</td>
                            <td>DINNER</td>
                        </tr>
                        <tr>
                            <th rowspan="6" class="text-center">DAY 4 SEMINYAK TOUR</th>
                            <td class="text-center">12.30</td>
                            <td>RESTAURANT</td>
                            <td>LUNCH</td>
                        </tr>
                        <tr>
                            <td class="text-center">14.00</td>
                            <td><a href="<?= base_url('user/bajraSandhi'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" data-title="BAJRA SANDHI" data-text="Monumen Bajra Sandhi, dibangun untuk menghormati perjuangan rakyat dengan rasa patriotisme pejuang menegakkan hak bangsa terutama Bali dalam mengusir penjajahan.">BAJRA SANDHI</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">15.30</td>
                            <td><a href="<?= base_url('user/kutaCity'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" data-title="KUTA CITY TOUR" data-text="">KUTA CITY TOUR</a></td>
                            <td>TOUR</td>
                        </tr>
                        <tr>
                            <td class="text-center">18.00</td>
                            <td>RESTAURANT</td>
                            <td>DINNER</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="text-center">19.00</td>
                            <td>SEMINYAK TOUR</td>
                            <td>MASSAGE</td>
                        </tr>
                        <tr>
                            <td><a href="<?= base_url('user/ngurahRaiAirport'); ?>" onmouseover=" showLinkPreview()" onmouseleave="hideLinkPreview()" class="link-with-preview text-dark pt-2" data-image="<?= base_url('assets/photo/tour/incheon-airport.jpg'); ?>" data-title="NGURAH RAI AIRPORT" data-text="Ngurah Rai International Airport adalah bandar udara internasional yang terletak di sebelah selatan Bali, tepatnya di daerah Kelurahan Tuban, Kecamatan Kuta, Kabupaten Badung, sekitar 13 km dari Denpasar.">NGURAH RAI AIRPORT</a></td>
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

<div class="card-priview">
    <img src="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"></p>
    </div>
</div>