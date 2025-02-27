<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
<link rel="stylesheet" href="assets/css/swal-forms.css">
<style>
	.select-costum {
		padding-top: 3px;
		padding-bottom: 3px;
	}
	.ajax-loader {
		visibility: hidden;
		background-color: rgba(255,255,255,0.7);
		position: absolute;
		z-index: +100 !important;
		width: 100%;
		height:100%;
	}

	.ajax-loader img {
		position: relative;
		top:50%;
		left:50%;
	}
</style>
<!--begin::Wrapper-->
<div class="ajax-loader">
  <img src="assets/media/misc/Spinner@1x-1.0s-200px-200px.gif" class="img-responsive" />
</div>
<div class="app-wrapper d-flex" id="kt_app_wrapper">
	<!--begin::Sidebar-->
	<?php include 'sidebar.php';?>
	<!--end::Sidebar-->
	<!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content">
			<div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
					<!--begin::Toolbar wrapper-->
					<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
								Data Penerbit</h1>
							<!--end::Title-->
							<!--begin::Breadcrumb-->
							<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">
									<a href="index.php" class="text-muted text-hover-primary">Home</a>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<span class="bullet bg-gray-500 w-5px h-2px"></span>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">Monitoring Penerbit</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item">
									<span class="bullet bg-gray-500 w-5px h-2px"></span>
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="breadcrumb-item text-muted">Sudah verifikasi</li>
								<!--end::Item-->
							</ul>
							<!--end::Breadcrumb-->
						</div>
						<!--end::Page title-->
					</div>
					<!--end::Toolbar wrapper-->
				</div>
				<!--end::Toolbar container-->
			</div>
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::Products-->
					<div class="card card-flush">
						<!--begin::Card header-->
						<div class="card-header align-items-center py-5 gap-2 gap-md-5">
							<!--begin::Card title-->
							<div class="card-title">
								<!--begin::Search-->
								<div class="d-flex align-items-center position-relative my-1">
									<i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>
									<input type="text" data-example-filter="search" class="form-control form-control-solid w-400px ps-12" 
									placeholder="Search Nama, Email, etc" />
								</div>
												<!--end::Search-->
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
								<!--begin::unduh-->
								<span id="unduhExcel"></span>
								<!--end::unduh-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-0">
							<!--begin::Table-->
							<div class ="table-responsive">
							<table class="table table-row-dashed table-hover no-wrap fs-8 gy-5" id="example" style="width:100%">
								<thead>
									<tr class="text-start text-gray-500 fw-bold fs-8 text-uppercase gs-0">
										<th class="text-start min-w-60px pe-2">ID</th>
										<th class="min-w-200px">Nama Penerbit</th>
										<th class="min-w-200px">Email</th>
										<th class="min-w-200px">Tanggal Verifikasi</th>
										<th class="min-w-200px">Status</th>
										<th class="min-w-2000px">Berkas</th>
										
									</tr>
								</thead>

							</table>
							</div>
							<!--end::Table-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Products-->
				</div>
				<!--end::Content container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Content wrapper-->
		<!--begin::Footer-->
		<div id="kt_app_footer" class="app-footer">
			<!--begin::Footer container-->
			<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
				<!--begin::Copyright-->
				<div class="text-gray-900 order-2 order-md-1">
					<span class="text-muted fw-semibold me-1">2024&copy;</span>
					<a href="https://perpusnas.go.id" target="_blank"
						class="text-gray-800 text-hover-primary">Perpustakaan Nasional RI</a>
				</div>
				<!--end::Copyright-->
				<!--begin::Menu-->
				<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
					<li class="menu-item">
						<a href="faq.php" target="_blank" class="menu-link px-2">FAQ</a>
					</li>
					<li class="menu-item">
						<a href="template.php" target="_blank" class="menu-link px-2">Template Surat</a>
					</li>
					<li class="menu-item">
						<a href="berita.php" target="_blank" class="menu-link px-2">Berita</a>
					</li>
				</ul>
				<!--end::Menu-->
			</div>
			<!--end::Footer container-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end:::Main-->
	<?php include 'sidebar_aside.php';?>
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::App-->
<?php include 'log_aktifitas.php';?>
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-outline ki-arrow-up"></i>
</div>
<!--end::Scrolltop-->

<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/dataTables.fixedColumns.js"></script>
<script src="assets/js/swal-forms.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/randomtitle.js"></script>
<script src="assets/js/custom/randomname.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
<script>
	var getRandom = function (min, max) {
		return Math.floor(Math.random() * (max - min) + min);
	};
	var randomDate = function(start, end) {
		return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime())).toLocaleString();
	}
	
	var populateDataSet = function(numb){
		var dataSetPop = [];
		for( var i = 1; i<=numb; i++ ){
            let name = RandomName();
            let email = name.split(" ").join("") + '@mail.com';
			dataSetPop.push([
				i.toString(),
				name,
				email,
				Intl.DateTimeFormat('id', { month: 'short' }).format(new Date(getRandom(1,12).toString())) + " " + getRandom(2022,2024).toString(),
				'<select class="form-select fs-7 select-costum" id="changeStatus_'+(i-1)+'" onChange="changeStatus('+(i-1)+')"><option value"">--Pilih status--</option><option value="aktif">Aktif</option><option value="disable">Disable</option><option value="blokir">Blokir</option></select>', 
				'<a class="badge badge-info h-30px m-1" onclick="lihatPernyataan()">Surat Pernyataan</a><a class="badge badge-primary h-30px m-1" onClick="lihatSiup()">SIUP</a>'
			]);
		}
		return dataSetPop;
	}	
	var extractColumn = function(arr, column) {
		return arr.map(x => x[column]);
	}

	var changeStatus = function(selectId){
		if($('#changeStatus_' + selectId).val() == 'blokir'){
			let arrNomor = extractColumn(dataSet, 0);
			let position = arrNomor.indexOf((selectId+1).toString());
			r = dataSet[position][1];
			r = r.replace("d-flex ", "");
			Swal.fire({
                    html: "Anda yakin akan memblokir penerbit berikut? "+r,
					icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Ya, batalkan!",
                    cancelButtonText: "Tidak",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
				}).then(function(e){
					if(e.isConfirmed == true) {
						Swal.fire({
							title: 'Konfirmasi alasan pemblokiran',
							html: '<textarea id="alasan" cols="40" class="swal2-input" placeholder="Masukan alasan pemblokiran akun" style="height:150px"></textarea>',
							width:600,
							showCancelButton: true,
							confirmButtonColor: '#DD6B55',
							confirmButtonText: 'Simpan Alasan Blokir',
							preConfirm: () => {
								const alasan = $('#alasan').val();
								if (alasan.length < 150) {
									Swal.showValidationMessage('Alasan pemblokiran akun harus lebih dari 50 karakter!');
								}
								return { alasan }
							},
						}).then(
							function(e){
								if(e.isConfirmed == true){
									dataSet[selectId][5] = '<span class="badge badge-danger fs-5" tooltip="true" title="'+$('#alasan').val()+'">AKUN DIBLOKIR</span>';
									t.destroy();
									loadDataTable();
									Swal.fire({
										html: r + " <h1>TELAH DIBLOKIR</h1> <br/> <b>Alasan</b>: <span class='text-grey-400'>" + $('#alasan').val() + "</span>",
										width: 600,
										icon: "success",
										buttonsStyling: !1,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn fw-bold btn-primary"
										}
									});
								} else {
									Swal.fire({
										html: r + " tidak jadi diblokir.",
										icon: "error",
										buttonsStyling: !1,
										confirmButtonText: "Ok, got it!",
										customClass: {
											confirmButton: "btn fw-bold btn-primary"
										}
									});
								}
							}
						)
					} else {
						Swal.fire({
                            html: r + " tidak jadi diblokir.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        });
					}
				});
		} else {
			Swal.fire({
				html: "Berhasil mengubah status akun penerbit",
				icon: "success",
				timer: 1000,
				customClass: {
					confirmButton: "btn fw-bold btn-primary"
				},
				showCancelButton: false,
				showConfirmButton: false
			})	
		}		
	};
	
	const dataSet = populateDataSet(getRandom(500,1000));
	var t;
	var loadDataTable = function(){
		t = new DataTable('#example', {
			data: dataSet,
			scrollX: true,
			"searching": true,
			filter:true,
			fixedColumns: {
				start: 3,
				end: 0
			},
		});
	};
	loadDataTable();
	document.querySelector('[data-example-filter="search"]').addEventListener("keyup", (function(e) {
                t.search(e.target.value).draw()
            }));
	var exportButtons = () => {
		var myInt = Number(new Date()).toString();
        const documentTitle = 'Penerbit Report ' + myInt;
        var buttons = new $.fn.dataTable.Buttons(t, {
            buttons: [
                {
                    extend: 'excelHtml5',
                    title: documentTitle,
					text:'<i class="ki-outline ki-exit-up fs-2"></i>Export Data',
                },
            ]
        }).container().appendTo($('#unduhExcel'));
		const target = document.querySelector('#unduhExcel');
        target.click();
    }
	exportButtons();

</script>

</html>