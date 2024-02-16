<?= $this->extend('layouts/index_view') ?>
<script src="<?= base_url() ?>script.js"></script>

<?= $this->section('content') ?>

<div id="main-content">
  <section class="section">
    <div class="card">
      <div class="row">
        <div class="col-md-8 mx-auto"> <!-- Tambahkan class mx-auto di sini -->
          <h2 class="text-center" style="color: #ffbf00">PENCARIAN DATA</h2>
        
          <div class="input-group mb-3">
            <input
              type="text"
              class="form-control"
              id="search-input"
              placeholder="masukkan pencarian"/>
            <button
              class="btn btn-dark"
              type="button"
              id="search-button">
              Cari
            </button>
          </div>
         
        </div>
      </div>
          <hr>

          
  </section>
</div>

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


<?= $this->endSection() ?>
