<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br>
<div class="container pt-5">

    <div class="row working">
        <div class="col-6 text-center">
            <img src="ringkasan.png" alt="working" width="300" class="img-fluid  img-thumbnail">
        </div>

        <div class="col-6">
            <h3 hover-zoom>DATA SUMMARY</h3>
            <p>Data - data agregrat di Kabupaten Semarang dari berbagai produsen data dan dari BPS Kabupaten Semarang</p>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <br>
            <h3 hover-zoom class="text-center">Data Summary Kabupaten Semarang</h3>
            <br>
            <table class="table table-bordered mt-5" id="example">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">NO</th>
                        <th scope="col" class="text-center">Variabel</th>
                        <th scope="col" class="text-center">Satuan</th>
                        <th scope="col" class="text-center">Tahun 2022</th>

                    </tr>
                </thead>
                <?php $i = 1; ?>
                <tbody>
                    <?php foreach ($data as $entity) : ?>
                        <tr>
                            <td class="text-center"><?= $i++; ?></td>
                            <td><?= $entity['variabel']; ?></td>
                            <td class="text-center"><?= $entity['satuan']; ?></td>
                            <td><?= $entity['tahun_2022']; ?></td>

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