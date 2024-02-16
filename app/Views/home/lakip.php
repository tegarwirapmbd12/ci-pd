<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>



<div class="container">
    <!-- working -->
    <div class="row working mt-5">
        <div class="col-5">
            <img src="lakip.png" alt="working" width="300" class="img-fluid">
        </div>
        <div class="col-7">
            <h3 hover-zoom>LKIP</h3>
            <p>Laporan Kinerja Instansi Pemerintah (LKIP) merupakan perwujudan pertanggungjawaban atas kinerja pencapaian sasaran strategis atas pelaksanaan program dan kegiatan yang dibiayai APBN/APBD.
                Laporan Kinerja ini berfungsi, antara lain sebagai alat penilaian
                kinerja, alat kendali, dan alat pemacu peningkatan kinerja setiap unit
                organisasi di lingkungan Pemerintah Kabupaten Semarang. Kinerja Pemerintah Kabupaten Semarang
                diukur atas dasar penilaian Indikator Kinerja Utama (IKU) yang merupakan
                indikator keberhasilan pencapaian sasaran strategis sebagaimana telah
                ditetapkan dalam Perjanjian Kinerja.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h4 class="mt-4 pb-4 mb-3 text-center">Hasil Pencapaian Kinerja</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>