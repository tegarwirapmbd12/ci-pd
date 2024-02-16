<?= $this->extend('layouts/index_view') ?>
<?= $this->section('content') ?>

<style>
    .dataTables_wrapper .dt-buttons {
        font-size: 12px;
        /* Atur ukuran font sesuai yang Anda inginkan */
        padding: 4px 8px;
        /* Atur padding sesuai kebutuhan Anda */
    }

    .dataTables_wrapper .dt-buttons button {
        border-radius: 20%;
        /* Membuat tombol menjadi bulat */
    }
</style>
<div id="main-content">
    <section class="section">
        <div class="card" style="background-color:  #B22222;">
            <div class="card-body">
                <div class="container">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="display-4 " style=" font-weight: bold; margin-left: 20px; color:white;">KABUPATEN SEMARANG </h3>
                            <h2><b>BERDIKARI</b></h2>
                            <p class="lead my-4 " style=" font-weight: bold; margin-left: 20px; color:white;">Bersatu, Berdaulat, Berkepribadian, Sejahtera dan Mandiri</p>
                            <!-- <a class="btn btn-warning" style=" color : #FFFFFF; font-weight: bold; margin-left: 20px;" href="https://data.semarangkab.go.id/ckan" target="_blank">CARI DATA</a> -->


                            <form class="form-inline" id="search-form">
                                <input class="form-control mr-sm-2" type="search" placeholder="cari dataset disini" aria-label="Search" id="search-input" target="_blank">
                                <button id="search-button" class="btn btn-primary my-2 my-sm-2" type="submit" target="_blank">SEARCH</button>
                            </form>

                        </div>
                        <img src="<?= base_url(); ?>/picture/maskot_baru.png" alt="satu data" width="450" class="img-fluid  d-none d-sm-block rounded-circle img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="card-title text-center" style="color: #FFBF00;"><strong> INFORMASI UMUM</strong></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-1"> </div>
                    <div class="col-4">
                        <h6 class="text-center">Jumlah Penduduk Berdasarkan Jenis Kelamin tahun 2022</h6>
                        <div>
                            <canvas id="jenisKelamin"></canvas>
                            <script>
                                const labels2 = [
                                    'Laki-laki', 'Perempuan',
                                ];
                                const data2 = {
                                    labels: labels2,
                                    datasets: [{
                                        label: 'Jumlah Penduduk Berdasarkan Jenis Kelamin',
                                        backgroundColor: [
                                            '#00BFFF',
                                            '#8B0000'
                                        ],
                                        borderColor: '#666600',
                                        data: [532529, 535963],
                                    }]
                                };
                                const config2 = {
                                    type: 'doughnut',
                                    data: data2,
                                    options: {}
                                };
                            </script>
                        </div>
                    </div>

                    <div class="col-6">
                        <h6 class="text-center">Jumlah Desa di Kabupaten Semarang <br>
                            Tahun 2022</h6>
                        <div>
                            <canvas id="jumlahDesa"></canvas>
                            <script>
                                const labelsDesa = [
                                    'Getasan', 'Tengaran', 'Susukan', 'Kaliwungu', 'Suruh', 'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu', 'Sumowono', 'Ambarawa', 'Bandungan', 'Bawen', 'Bringin', 'Bancak', 'Pringapus', 'Bergas', 'Ungaran Barat', 'Ungaran Timur',
                                ];
                                const dataDesa = {
                                    labels: labelsDesa,
                                    datasets: [{
                                        label: 'Jumlah Desa Per Kecamatan',
                                        backgroundColor: '#1e90ff',
                                        borderColor: 'rgb(255, 99, 132)',
                                        data: [13, 15, 13, 11, 17, 17, 16, 10, 10, 16, 10, 10, 9, 16, 9, 9, 13, 11, 10],
                                    }]
                                };
                                const configDesa = {
                                    type: 'bar',
                                    data: dataDesa,
                                    options: {}
                                };
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-6">
                    <h6 class="text-center">Luas Wilayah Per Kecamatan Tahun 2022</h6>
                    <div>
                        <canvas id="luasWilayah"></canvas>
                        <script>
                            const labels = [
                                'Getasan', 'Tengaran', 'Susukan', 'Kaliwungu', 'Suruh', 'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu', 'Sumowono', 'Ambarawa', 'Bandungan', 'Bawen', 'Bringin', 'Bancak', 'Pringapus', 'Bergas', 'Ungaran Barat', 'Ungaran Timur',
                            ];
                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Luas Wilayah Per Kecamatan',
                                    backgroundColor: '#1e90ff',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [68.03, 49.95, 50.31, 31.08, 66.21, 51.86, 61.18, 51.85, 52.06, 58.86, 29.79, 47.41, 46.99, 68.19, 45.51, 84.27, 45.81, 48.79, 61.12],
                                }]
                            };
                            const config = {
                                type: 'bar',
                                data: data,
                                options: {}
                            };
                        </script>
                    </div>
                </div>
                <div class="col-6">
                    <h6 class="text-center">Jumlah Penduduk Per Kecamatan Tahun 2022</h6>
                    <div>
                        <canvas id="jumlahPenduduk"></canvas>
                        <script>
                            const labels1 = [
                                'Getasan', 'Tengaran', 'Susukan', 'Kaliwungu', 'Suruh', 'Pabelan', 'Tuntang', 'Banyubiru', 'Jambu', 'Sumowono', 'Ambarawa', 'Bandungan', 'Bawen', 'Bringin', 'Bancak', 'Pringapus', 'Bergas', 'Ungaran Barat', 'Ungaran Timur',
                            ];
                            const data1 = {
                                labels: labels1,
                                datasets: [{
                                    label: 'Jumlah penduduk per Kecamatan',
                                    backgroundColor: '#BDB76B ',
                                    borderColor: 'rgb(255, 99, 132)',
                                    data: [53445, 72893, 50414, 30859, 71631, 45570, 69771, 44704, 41094, 34537, 64255, 59549, 60327, 47132, 24529, 57785, 76815, 81727, 81455],
                                }]
                            };
                            const config1 = {
                                type: 'bar',
                                data: data1,
                                options: {}
                            };
                        </script>
                    </div>
                </div>
            </div>

        </div>
        <div class="card">


            <div class="row">
                <div class="col">
                    <h2 class="mt-8 pt-5 text-center" style="color: #FFBF00;"><strong>NAMA-NAMA DESA</strong></h2><br>

                    <table class="table table-bordered mt-5" id="desa">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">NO</th>
                                <th scope="col" class="text-center">Nama Kecamatan</th>
                                <th scope="col" class="text-center">Nama Desa</th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <tbody>
                            <?php foreach ($data['desa'] as $entity) : ?>
                                <tr>
                                    <td class="text-center"><?= $i++; ?></td>
                                    <td><?= $entity['nama_kecamatan']; ?></td>
                                    <td class="text-center"><?= $entity['nama_desa']; ?></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

        <div class="card">

            <div class="row">
                <div class="col">
                    <h2 class="mt-8 pt-5 text-center" style="color: #FFBF00;"><strong>DATA SUMMARY </strong></h2>
                    <h4 class=" text-center" style="color: #FFBF00;">KABUPATEN SEMARANG</h4>
                    <table class="table table-bordered mt-5" id="ringkasan">
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
                            <?php foreach ($data['ringkasan'] as $entity) : ?>
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

    </section>
</div>


<script>
    // === include 'setup' then 'config' above ===

    var myChart = new Chart(
        document.getElementById('luasWilayah'),
        config
    );

    var myChart = new Chart(
        document.getElementById('jumlahPenduduk'),
        config1
    );

    var myChart = new Chart(
        document.getElementById('jenisKelamin'),
        config2
    );
    var myChart = new Chart(
        document.getElementById('jumlahDesa'),
        configDesa
    );
</script>
<!-- akhir Dashboard -->
<script src=" https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
    $(document).ready(function() {
        $('#desa').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
        });
        $('#kebakaran').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
        $('#ringkasan').DataTable({
            dom: 'Blfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });

    });
</script>
<script>
    // Fungsi untuk menghandle pencarian
    function handleSearch() {
        const searchTerm = document.getElementById("search-input").value;
        const ckanURL = "https://data.semarangkab.go.id/ckan";

        // Membuka halaman pencarian CKAN dalam tab baru
        window.open(ckanURL + "/dataset?q=" + searchTerm);
    }

    // Menambahkan event listener untuk menghandle klik pada tombol "SEARCH"
    document.getElementById("search-button").addEventListener("click", function(event) {
        event.preventDefault();
        handleSearch();
    });

    // Menambahkan event listener untuk menghandle tombol Enter
    document.getElementById("search-input").addEventListener("keydown", function(event) {

        if (event.key === "Enter") {
            event.preventDefault();
            handleSearch();
        }
    });
</script>

</div>
<?= $this->endSection() ?>