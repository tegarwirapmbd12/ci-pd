<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container pt-5">
    <!-- working -->
    <div class="row working">
        <div class="col-6 text-center">
            <img src="rpjmd.png" alt="working" width="300" class="img-fluid  img-thumbnail">
        </div>

        <div class="col-6">
            <h3 hover-zoom>RPJMD</h3>
            <p>Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kabupaten Semarang merupakan dokumen perencanaan pembangunan daerah sebagai landasan dan pedoman bagi Pemerintah Daerah dalam melaksanakan pembangunan 5 (lima) tahun.</p>
        </div>

    </div>

    <div class="row">
        <div class="col">
            <h5 class="mt-8 pt-5 text-center" style="color: #FFBF00;">PENGUKURAN CAPAIAN KINERJA RPJMD</h5>
            <br>
            <table class="table table-bordered mt-5" id="example">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col" class="text-center">Indikator</th>
                        <th scope="col" class="text-center">Capaian Tahun 2022</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <tbody>
                    <?php foreach ($data as $entity) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td><?= $entity['indikator_kinerja']; ?></td>
                            <td class="text-center"><?= $entity['capaian_tahun_2022']; ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>

    <?= $this->endSection(); ?>