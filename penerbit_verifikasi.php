<?php include 'header.php';?>
<!--begin::Wrapper-->
<div class="app-wrapper d-flex" id="kt_app_wrapper">
	<!--begin::Sidebar-->
	<?php include 'sidebar.php';?>
	<!--end::Sidebar-->
	<!--begin::Main-->
	<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
		<!--begin::Content wrapper-->
		<div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
				<!--begin::Toolbar container-->
				<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
					<!--begin::Toolbar wrapper-->
					<div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
						<!--begin::Page title-->
						<div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
							<!--begin::Title-->
							<h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
								Verifikasi Data Penerbit</h1>
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
								<li class="breadcrumb-item text-muted">Verifikasi</li>
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
			<!--begin::Content-->
			<div id="kt_app_content" class="app-content">
				<!--begin::Content container-->
				<div id="kt_app_content_container" class="app-container container-fluid">
					<!--begin::details View-->
					<div class="row mb-5 mb-xl-10" id="kt_profile_details_view">
						<div class="mb-xl-10 col-lg-12 col-md-12">
							<div class="flex flex-col gap-5 lg:gap-7.5">
								<div class="card min-w-full">
									<div class="card-header">
										<h3 class="card-title">
											General Info
										</h3>
									</div>
									<!--begin::Content-->
										<div id="kt_account_settings_profile_details" class="collapse show">
											<!--begin::Form-->
											<form id="kt_account_profile_details_form" class="form">
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label required fw-semibold fs-6">Nama Penerbit</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-9">
															<input type="text" name="title" class="form-control form-control-lg form-control-solid" placeholder="Nama Penerbit" value="Pt. Gramedia Pustaka utama" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
												
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">Jenis dan Organisasi Penerbit</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-6 fv-row">
                                                            <select name="jenisPenerbit" class="select2 form-select">
                                                                <option>Pemerintah</option>
                                                                <option>Swasta</option>
                                                            </select>
														</div>
														<!--end::Col-->
                                                        <!--begin::Col-->
														<div class="col-lg-3 fv-row">
															<select name="organisasi" class="select2 form-select">
																	<option>IKAPI</option>
																	<option>SPSS</option>
                                                            </select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">
															<span class="required">Provinsi</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Provinsi">
																<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-9 fv-row">
															<select id="select2-provinsi" name="provinsi" aria-label="Select a Country" data-control="select2" data-placeholder="Pilih provinsi..." class="form-select form-select-solid form-select-lg fw-semibold">
																<option value="">Pilih Provinsi...</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">
															<span class="required">Kabupaten / Kota</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Kabupaten/Kota">
																<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-9 fv-row">
															<select id="select2-kabupaten" name="kabkot" aria-label="Pilih Kabupaten/kota" data-control="select2" data-placeholder="Pilih kabupaten/kota..." class="form-select form-select-solid form-select-lg fw-semibold">
																<option value="">Pilih Kabupaten/Kota...</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">
															<span class="required">Kecamatan</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Kecamatan">
																<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-9 fv-row">
															<select id="select2-kecamatan" name="kecamatan" aria-label="Pilih kecamatan" data-control="select2" data-placeholder="Pilih kecamatan" class="form-select form-select-solid form-select-lg fw-semibold">
																<option value="">Pilih Kecamatan...</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">
															<span class="required">Kelurahan</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Kelurahan">
																<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-9 fv-row">
															<select id="select2-kelurahan" name="kelurahan" aria-label="Pilih kelurahan" data-control="select2" data-placeholder="Pilih Kelurahan..." class="form-select form-select-solid form-select-lg fw-semibold">
																<option value="">Pilih Kelurahan...</option>
															</select>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">SIUP</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-9 d-flex align-items-center">
															
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-0">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">Surat Pernyataan</label>
														<!--begin::Label-->
														<!--begin::Label-->
														<div class="col-lg-9 d-flex align-items-center">
															
														</div>
														<!--begin::Label-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-8">
														<!--begin::Col-->
														<div class="col-xl-3">
															<div class="fs-6 fw-semibold mt-2 mb-3"><span class="required">Verifikasi Permohonan ISBN </span>
																<span class="ms-1" data-bs-toggle="tooltip" title="Pilih status verifikasi ISBN">
																<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
															</span></div>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-xl-9">
															<!--begin::Row-->
															<div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]" data-kt-initialized="1">
																<!--begin::Col-->
																<div class="col-md-6 col-lg-12 col-xxl-6">
																	<label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
																		<!--begin::Radio button-->
																		<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																			<input class="form-check-input" type="radio" name="status" value="terima">
																		</span>
																		<!--end::Radio button-->
																		<span class="ms-5">
																			<span class="fs-4 fw-bold mb-1 d-block">Diterima</span>
																			<span class="fw-semibold fs-7 text-gray-600">Penerbit akan mendapatkan notifikasi verifikasi akun</span>
																		</span>
																	</label>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 col-lg-12 col-xxl-6">
																	<label class="btn btn-outline btn-outline-dashed btn-active-light-danger d-flex text-start p-6" data-kt-button="true">
																		<!--begin::Radio button-->
																		<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																			<input class="form-check-input" type="radio" name="status" value="masalah">
																		</span>
																		<!--end::Radio button-->
																		<span class="ms-5">
																			<span class="fs-4 fw-bold mb-1 d-block">Bermasalah</span>
																			<span class="fw-semibold fs-7 text-gray-600">Anda wajib memasukan alasan permohonan akun bermasalah</span>
																		</span>
																	</label>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Row-->
														</div>
														<!--end::Col-->
													</div>
													<!--begin::Input group-->
													<div class="row mb-6" style="display:none" id="divMasalah">
														<!--begin::Label-->
														<label class="col-lg-3 col-form-label fw-semibold fs-6">
															<span class="required">Deskripsi Masalah</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Isi deskripsi masalah untuk menolak pendaftaran Akun penerbit">
																<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
															</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-9 fv-row">
                                                            <textarea  row="5" type="text" name="problem" class="form-control form-control-lg form-control-solid" placeholder="Isi deskripsi masalah pendaftaran akun penerbit"></textarea>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Card body-->
												<!--begin::Actions-->
												<div class="card-footer d-flex justify-content-end py-6 px-9">
													<button type="reset" class="btn btn-light btn-active-light-primary me-2">Reset</button>
													<button type="submit" class="btn btn-primary" id="btnSave">Simpan</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
								</div>
							</div>
						</div>
					</div>
					<!--end::details View-->
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
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/custom/account/settings/signin-methods.js"></script>
		<script src="assets/js/custom/pages/user-profile/general.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>

		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
<script>
		var urlProvinsi = "https://ibnux.github.io/data-indonesia/provinsi.json";
		var urlKabupaten = "https://ibnux.github.io/data-indonesia/kabupaten/";

		function clearOptions(id) {
			console.log("on clearOptions :" + id);
			//$('#' + id).val(null);
			$('#' + id).empty().trigger('change');
		}

		console.log('Load Provinsi...');
		$.getJSON(urlProvinsi, function (res) {

		res = $.map(res, function (obj) {
			obj.text = obj.nama
			return obj;
		});

		data = [{
			id: "",
			nama: "- Pilih Provinsi -",
			text: "- Pilih Provinsi -"
		}].concat(res);

		//implemen data ke select provinsi
		$("#select2-provinsi").select2({
			dropdownAutoWidth: true,
			width: '100%',
			data: data
		})
		});
		var selectProv = $('#select2-provinsi');
        $(selectProv).change(function () {
            var value = $(selectProv).val();
            clearOptions('select2-kabupaten');

            if (value) {
                console.log("on change selectProv");

                var text = $('#select2-provinsi :selected').text();
                console.log("value = " + value + " / " + "text = " + text);

                console.log('Load Kabupaten di '+text+'...')
                $.getJSON(urlKabupaten + value + ".json", function(res) {

                    res = $.map(res, function (obj) {
                        obj.text = obj.nama
                        return obj;
                    });

                    data = [{
                        id: "",
                        nama: "- Pilih Kabupaten -",
                        text: "- Pilih Kabupaten -"
                    }].concat(res);

                    //implemen data ke select provinsi
                    $("#select2-kabupaten").select2({
                        dropdownAutoWidth: true,
                        width: '100%',
                        data: data
                    })
                })
            }
        });

        var selectKab = $('#select2-kabupaten');   
		$(selectKab).change(function () {
            var value = $(selectKab).val();
            clearOptions('select2-kecamatan');

            if (value) {
                console.log("on change selectKab");

                var text = $('#select2-kabupaten :selected').text();
                console.log("value = " + value + " / " + "text = " + text);

                console.log('Load Kecamatan di '+text+'...')
                $.getJSON(urlKecamatan + value + ".json", function(res) {

                    res = $.map(res, function (obj) {
                        obj.text = obj.nama
                        return obj;
                    });

                    data = [{
                        id: "",
                        nama: "- Pilih Kecamatan -",
                        text: "- Pilih Kecamatan -"
                    }].concat(res);

                    //implemen data ke select provinsi
                    $("#select2-kecamatan").select2({
                        dropdownAutoWidth: true,
                        width: '100%',
                        data: data
                    })
                })
            }
        });
		var selectKec = $('#select2-kecamatan');
        $(selectKec).change(function () {
            var value = $(selectKec).val();
            clearOptions('select2-kelurahan');

            if (value) {
                console.log("on change selectKec");

                var text = $('#select2-kecamatan :selected').text();
                console.log("value = " + value + " / " + "text = " + text);

                console.log('Load Kelurahan di '+text+'...')
                $.getJSON(urlKelurahan + value + ".json", function(res) {

                    res = $.map(res, function (obj) {
                        obj.text = obj.nama
                        return obj;
                    });

                    data = [{
                        id: "",
                        nama: "- Pilih Kelurahan -",
                        text: "- Pilih Kelurahan -"
                    }].concat(res);

                    //implemen data ke select provinsi
                    $("#select2-kelurahan").select2({
                        dropdownAutoWidth: true,
                        width: '100%',
                        data: data
                    })
                })
            }
        });

        var selectKel = $('#select2-kelurahan');
        $(selectKel).change(function () {
            var value = $(selectKel).val();

            if (value) {
                console.log("on change selectKel");

                var text = $('#select2-kelurahan :selected').text();
                console.log("value = " + value + " / " + "text = " + text);
            }
        });     
		$('input[type=radio][name="status"]').on("change", function(){
			if($(this).val() == "masalah"){
				$('#divMasalah').css('display','');
			} else {
				$('#divMasalah').css('display','none');
				$('textarea[name="problem"]').val('');
			}
		});
</script>

</html>