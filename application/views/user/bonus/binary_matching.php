<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-white my-home-title">PAIRING MATCHING</h1>

    <!-- DataTales Example -->
    <!-- <div class="card shadow mb-4"> -->
    <!-- <div class="card-body"> -->
    <!-- <div class="table-responsive"> -->
    <table class="text-center tb-custom" width="100%" cellspacing="0">
        <thead class="text-tb-head">
            <tr>
                <th colspan="3" class="text-right">Total: </th>
                <th class="tb-column"><?= $total; ?> MTM</th>
            </tr>
            <tr>
                <th>Date</th>
                <th>User ID</th>
                <th>Generation</th>
                <th>MTM</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($bonus as $row_bonus) {
            ?>
                <tr>
                    <td class="tb-column">
                        <?= date('d/m/Y', $row_bonus->datecreate); ?>
                    </td>
                    <td class="tb-column">
                        <?= $row_bonus->username; ?>
                    </td>
                    <td class="tb-column">
                        <?= $row_bonus->generation; ?>
                    </td>
                    <td class="tb-column">
                        <?= $row_bonus->mtm; ?> MTM
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div> -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->