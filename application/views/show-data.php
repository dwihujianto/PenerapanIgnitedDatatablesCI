<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title>Penerapan Datatables</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
</head>
<body>

	<table id="anggota" class="table table-bordered">
	  <thead class="active">
	    <tr>  
	    	<th>Nama</th>
	      	<th>Kota</th>
	    	<th>Tanggal lahir</th>
	    	<th>Aksi</th>
	    </tr>  
	  </thead>
	  <tbody>
	    <tr>
	     <td colspan="5" class="dataTables_empty">Memuat data dari server</td>
	    </tr>
	  </tbody>

	</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {

	$('#anggota').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [[ 2, "desc" ]],
		"ajax": {
			"url": "<?php echo site_url('api/get') ?>",
			"type": "POST"
		},
		"columns": [
			{ "data": "nama" },
	        { "data": "kota" },
	        { "data": "tgl_lahir" },
	        { "data": "action" },  
		],
		"aoColumnDefs": [ //Iki cek column action e gak isok disorting ambek disearching goblook
      		{ "bSearchable": false, "aTargets": [ 3 ] },
      		{ "aDataSort": [ 0, 1 ,2 ], "aTargets": [ 3 ] }
    	],
		 "language": {
            "lengthMenu": "Menampilkan _MENU_ data per halaman",
            "zeroRecords": "Data tidak ditemukan",
            "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
            "infoEmpty": "Data tidak ditemukan",
            "infoFiltered": "(Penyaringan dari _MAX_ data)",
            "loadingRecords": "Memuat data dari server",
            "processing":     "Memuat data data",
    		"search":         "Pencarian:",
    		"paginate": {
		        "first":      "Awal",
		        "last":       "Terakhir",
		        "next":       "Selanjutnya",
		        "previous":   "Kembali"
		    },
        }
	});
});
</script>
</body>
</html>