<script type="text/javascript">
function list_brs(page){
    var url = "https://webapi.bps.go.id/v1/api/list/model/pressrelease/lang/ind/domain/3322/year/2022/key/2f456222b4c631bcc834296e2aad3fa3/page/"+page;
    $.ajax({
       url : url, 
       success:function(result){
               //list brs
               $('#list').empty(); //kosongkan div list
               var count = result["data"][0]["count"];
               for(i = 0; i < count; i++){
                   // Pengulangan untuk membuat list BRS di halaman tersebut
                   var brs = result["data"][1][i];
                   html = "<tr>";
                   html += "<td onclick='return detail_brs("+brs["brs_id"]+");'><a href='#'>"+brs["title"]+"</a></td>";
                   html += "<td>"+brs["rl_date"]+"</td>";
                   html += "<tr>";
                   $('#list').append(html);
               }

            //list brs
               $('#pagination').empty(); //kosongkan div pagination
               var totalpage = result["data"][0]["pages"];
               for(i = 1; i <= totalpage; i++){
                   $('#pagination').append('<a href="#" onclick="return list_brs('+i+');">[ '+i+' ]</a>');
               }

       }
   });
}

function detail_brs(id){
    var url = "https://webapi.bps.go.id/v1/api/list/model/pressrelease/lang/ind/domain/3322/year/2022/key/2f456222b4c631bcc834296e2aad3fa3/id/"+id;
    $.ajax({
       url : url, 
       success:function(result){
           //menampilkan detail
           $('#detail').empty(); //kosongkan div detail
           var brs = result["data"];
           html = "<h1>"+brs["title"]+"</h1>";
           html += "<hr>Abstraksi<br>";
           html += $("<div/>").html(brs["abstract"]).text();
           html += "<a href='"+brs["pdf"]+"' target='_blank'> <button>download ("+brs["size"]+")</button></a>";
           $('#detail').append(html);

       }
   });
}
list_brs(1);
</script>