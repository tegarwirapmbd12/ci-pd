<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- JumboTron -->
<section class=" text-white p-5 p-lg-0 pt-lg-5 text-center text-sm-start" style="background-color: #c80913">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1 class="display-4">KABUPATEN SEMARANG <b>BERDIKARI</b></h1>
                <p class="lead my-4">Bersatu, Berdaulat, Berkepribadian, Sejahtera dan Mandiri</p>
                <a class="btn btn-light" href="<?= base_url('#dashboard'); ?>">DASHBOARD</a>
            </div>
            <img src="datadata.png" alt="satu data" width="450" class="img-fluid  d-none d-sm-block rounded-circle img-thumbnail">
        </div>
    </div>

</section>
<section>
    <div class="container-fluid ps-0 pe-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#c80913" fill-opacity="1" d="M0,160L40,170.7C80,181,160,203,240,176C320,149,400,75,480,64C560,53,640,107,720,154.7C800,203,880,245,960,224C1040,203,1120,117,1200,90.7C1280,64,1360,96,1400,112L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
        </svg>
</section>
</div>




<!-- Akhir Jumbotron -->

<!-- DASHBOARD -->
<section id="dashboard">
    <!-- <div class="container">
        <div class="row">
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Kabupaten+Semarang,+Central+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
        </div>
    </div> -->
    </br>
    <!-- <div class="container ">
        <div class="row text-center" style="color: #FFBF00;"><div class="col"><h2>INFORMASI UMUM</h2></div></div><br>
        <div class="row text-center">
            
            <div class="col-4">
                <h6>Jumlah Penduduk Berdasarkan Jenis Kelamin tahun 2022</h6>
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
            <div class="col-2"></div>
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
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-8 pt-5 text-center" style="color: #FFBF00;">NAMA-NAMA DESA</h2><br>

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
            <!-- <div class="col-6">
                <h4 class="mt-8 pt-5 text-center" style="color: #FFBF00;">KEJADIAN KEBAKARAN</h4>

                <table class="table table-bordered mt-5" id="kebakaran">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">NO</th>
                            <th scope="col" class="text-center">Kecamatan</th>
                            <th scope="col" class="text-center">2021</th>
                            <th scope="col" class="text-center">2022</th>
                            <th scope="col" class="text-center">2023 Semester 1</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <tbody>
                        <?php foreach ($data['kebakaran'] as $entity) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?></td>
                                <td><?= $entity['kecamatan']; ?></td>
                                <td class="text-center"><?= $entity['tahun_2021']; ?></td>
                                <td class="text-center"><?= $entity['Tahun_2022']; ?></td>
                                <td class="text-center"><?= $entity['semester1_2023']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div> -->
    </div>
    </div> -->
</section>
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
    });
</script>

<?= $this->endSection(); ?>