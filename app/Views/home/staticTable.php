<?= $this->extend('layouts/index_view') ?>
<script src="<?= base_url() ?>/script.js"></script>

<?= $this->section('content') ?>
<h4 class="text-center" style="color: #ffbf00">Publikasi Tabel Statis BPS Kabupaten Semarang</h4>
<div id="main-content">

  <section class="section">
    <div class="card">
      <div class="row">
        <div class="col mx-auto"> <!-- Tambahkan class mx-auto di sini -->
        <table class="table table-bordered">
		<thead>
			<tr>
				<td style="font-weight: bold; text-align: center;">Tabel Statis</td>
				<td style="font-weight: bold; text-align: center;">Tanggal Rilis</td>
			</tr>
		</thead>
		<tbody id="list"></tbody>
		</table>
		<div id="pagination"></div>
		<hr>
		<div id="detail"></div>
			<!-- load jQuery -->
			<!-- Pilih salah satu, ingin loading jQuery secara online atau offline (local) -->
			<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --> 
        </div>
      </div>
    <hr>  
  </section>
</div>

<script type="text/javascript">
		
		function list_static(page){
	// var bps = [];
    $.ajax({
		url: '<?= base_url() ?>/getBps?action=static&page=' + page,
       success:function(result){
               //list brs
               $('#list').empty(); //kosongkan div list
			//   console.log(result);
			result = JSON.parse(result);
               var count = result["data"][0].count;
               for(i = 0; i < count; i++){
                   // Pengulangan untuk membuat list static di halaman tersebut
                   var static = result["data"][1][i];
                   html = "<tr>";
                   html += "<td onclick='return detail_static("+static["table_id"]+");'><a href='#'>"+static["title"]+"</a></td>";
				   html += "<td style='font-size: smaller;'>" + static["updt_date"] + "</td>";
                   html += "<tr>";
                   $('#list').append(html);
               }

            //list brs
               $('#pagination').empty(); //kosongkan div pagination
               var totalpage = result["data"][0]["pages"];
               for(i = 1; i <= totalpage; i++){
                   $('#pagination').append('<a href="#" onclick="return list_static('+i+');">[ '+i+' ]</a>');
               }

       }
   });
}

function detail_static(id){
			var detail_static = [];
			$.ajax({
	           url : '<?= base_url() ?>/getBps?action=detail_static&id='+id, 
	           success:function(result){
	           	//menampilkan detail
				   console.log(result);
				   result = JSON.parse(result);
	           	$('#detail').empty(); //kosongkan div detail
	           	var static = result["data"];
				html = "<h5 style='text-align: center;'>" + static["title"] + "</h5>";
	           	// html += "<hr>tabel<br>";
	           	html += $("<div/>").html(static["table"]).text();
	           	html += "<a href='"+static["excel"]+"' target='_blank'> <button>download ("+static["size"]+")</button></a>";
	           	$('#detail').append(html);

	           }
	       });
		}
		list_static(1);
	</script>


<?= $this->endSection() ?>
