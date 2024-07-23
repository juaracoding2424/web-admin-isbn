<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/5.0.1/css/fixedColumns.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.dataTables.css">
<style>
    .select-costum {
        padding-top: 3px;
        padding-bottom: 3px;
    }
</style>
<!--begin::Wrapper-->
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
                                <h1
                                    class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                                    Book In Print</h1>
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
                                    <li class="breadcrumb-item text-muted">Book In Print</li>
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
                                    <input type="text" data-example-filter="search"
                                        class="form-control form-control-solid w-400px ps-12"
                                        placeholder="Search judul, deskripsi, dll" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_bip"
                                    class="btn btn-primary fw-bold fs-8 fs-lg-base" onclick="newbip()">Buat BIP</a>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <div class="table-responsive">
                                <table class="table table-row-dashed table-hover no-wrap fs-8 gy-5" id="example"
                                    style="width:100%">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-8 text-uppercase gs-0">
                                            <th class="min-w-75px">No</th>
                                            <th class="min-w-200px">Judul BIP</th>
                                            <th class="min-w-225px">Deskripsi</th>
                                            <th class="min-w-100px">Attachment</th>
                                            <th class="min-w-200px">Status</th>
                                            <th class="text-inline min-w-250px">Aksi</th>
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
<!--begin::Modal - Buat Surat-->
<div class="modal fade" id="modal_surat" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Buat BIP Surat</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-500 fw-semibold fs-5">Daftar BIP akan ditampilkan pada halaman web ISBN</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Judul BIP</span>
                            <span class="ms-2" data-bs-toggle="tooltip" title="Tuliskan judul BIP">
                                <i class="ki-outline ki-information fs-7"></i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan judul BIP"
                            name="title" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="fs-6 fw-semibold mb-2">Deskripsi</label>
                        <textarea class="form-control form-control-solid" rows="4" name="description"
                            placeholder="Masukan deskripsi singkat dokumen"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <label class="fs-6 fw-semibold mb-2">Attachments</label>
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="attachments">
                            <!--begin::Message-->
                            <div class="dz-message needsclick align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Masukan attachment</h3>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Status</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih status surat" name="status">
                                <option value="">Pilih status...</option>
                                <option value="publish">Publish</option>
                                <option value="hide">Hide / Draft</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="button_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="button_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <input type="hidden" name="dataID" />
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Support Center - Create Ticket-->
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.1/js/dataTables.fixedColumns.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.dataTables.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
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
    var populateDataSet = function (numb) {
        var dataSetPop = [];
        for( var i = 1; i<=numb; i++ ){
            dataSetPop.push([
                '<span id="dataID_'+(i-1)+'">' + (i).toString() +"</span>",
                '<span id="title_'+(i-1)+'"> BIP '+ i.toString() + '</span>',
                '<span id="description_'+(i-1)+'">' + Intl.DateTimeFormat('id', { month: 'short' }).format(new Date(getRandom(6,12).toString())) + " " + getRandom(2024,2025).toString() + '</span>',
                '<a id="attachment_'+(i-1)+'" href=""> BIP '+ i.toString() + '.pdf </span>',
                '<select class="form-select fs-7 select-costum" id="changeStatus_' + (i-1) + '" onChange="changeStatus(' + (i-1)  + ')"><option value"">--Pilih status--</option><option value="publish">Publish</option><option value="hide">Hide / Draft</option></select>',
                '<a class="badge badge-info h-30px m-1" onclick="edit(' + (i-1)  + ')" href="#" data-bs-toggle="modal" data-bs-target="#modal_surat">Ubah</a> <a class="badge badge-danger h-30px m-1" onclick="hapus(' + (i-1)  + ')" data-id="'+(i-1)+'" href="#">Hapus</a>',
            ]);
            i += 1;
        };
        return dataSetPop;
    };

    const dataSet = populateDataSet(10); var table;
    var loadDataTable = function () {
        table = new DataTable('#example', {
            data: dataSet,
            scrollX: true,
            "searching": true,
            filter: true,
            columnDefs: [{ orderable: false, targets: [1, 2, 3, 4, 5] }],
            rowReorder: true,
            /*rowReorder: {
                dataSrc: dataSet[0],
            },*/
        });
    }
    document.querySelector('[data-example-filter="search"]').addEventListener("keyup", (function (e) {
        table.search(e.target.value).draw()
    }))
    loadDataTable();
    var edit = function (index) {
        let i = document.querySelector("#form");
        $(i.querySelector('[name="title"]')).val($('#title_' + index).text());
        $(i.querySelector('[name="description"]')).val($('#description_' + index).text());
        $(i.querySelector('[name="status"]')).val($('#changeStatus_' +index).val()).trigger('change');
        $(i.querySelector('[name="dataID"]')).val(index);
    }
    var newFaq = function () {
        let i = document.querySelector("#form");
        $(i.querySelector('[name="title"]')).val('');
        $(i.querySelector('[name="description"]')).val('');
        $(i.querySelector('[name="status"]')).val('');
        $(i.querySelector('[name="dataID"]')).val('');
    }
    var hapus = function (index) {
        r = $('#title_' + index).text();
        Swal.fire({
            html: "Anda yakin akan menghapus dokumen: <span class='badge badge-info'> " + r + "</span>",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Tidak",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        }).then(function (e) {
            if (e.isConfirmed == true) { //kalau ok
                Swal.fire({
                    html: "Anda menghapus dokumen: <span class='badge badge-info'>" + r + "</span>!.",
                    icon: "success",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary"
                    }
                })
                //dataSet.splice(position, 1); //AJAX hapus data server side
                table.destroy();
                loadDataTable();
            } else {
                Swal.fire({
                    html: "<span class='badge badge-info'>" + r + "</span> tidak jadi dibatalkan.",
                    icon: "error",
                    buttonsStyling: !1,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary"
                    }
                });
            }
        });
    }
    var changeStatus = function (selectId) {
        let val = $('#changeStatus_' + selectId + ' :selected').text();
        // 
        // AJAX change status FAQ disini
        //
        Swal.fire({
            html: "Berhasil mengubah status dokumen menjadi " + val,
            icon: "success",
            timer: 1000,
            customClass: {
                confirmButton: "btn fw-bold btn-primary"
            },
            showCancelButton: false,
            showConfirmButton: false
        })
    };
    var suratInit = function () {
        var t, e, n, i, o, a;
        return {
            init: function () {
                (a = document.querySelector("#modal_surat")) && (o = new bootstrap.Modal(a),
                    i = document.querySelector("#form"),
                    t = document.getElementById("button_submit"),
                    e = document.getElementById("button_cancel"), new Dropzone("#surat_attachments", {
                        url: "https://keenthemes.com/scripts/void.php",
                        paramName: "file",
                        maxFiles: 1,
                        maxFilesize: 10,
                        addRemoveLinks: !0,
                        accept: function (t, e) {
                            "justinbieber.jpg" == t.name ? e("Naha, you don't.") : e()
                        }
                    }), $(i.querySelector('[name="title"]')).on("change", (function () {
                        n.revalidateField("title")
                    })), $(i.querySelector('[name="description"]')).on("change", (function () {
                        n.revalidateField("description")
                    })), $(i.querySelector('[name="status"]')).on("change", (function () {
                        n.revalidateField("status")
                    })), n = FormValidation.formValidation(i, {
                        fields: {
                            title: {
                                validators: {
                                    notEmpty: {
                                        message: "Judul dokumen tidak boleh kosong!"
                                    }
                                }
                            },
                            description: {
                                validators: {
                                    notEmpty: {
                                        message: "Deskripsi dokumen tidak boleh kosong!"
                                    }
                                }
                            },
                            status: {
                                validators: {
                                    notEmpty: {
                                        message: "Pilih status dokumen!"
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), t.addEventListener("click", (function (e) {
                        e.preventDefault(), n && n.validate().then((function (e) {
                            console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function () {
                                if ($(i.querySelector('[name="dataID"]')).val() == "") {
                                    let lastIdx = dataSet.length - 1;
                                    dataSet.push([
                                        '<span id="dataID_'+(i-1)+'">' +  (lastIdx + 1).toString() +"</span>",
                                        '<span id="title_'+(i-1)+'">'+$(i.querySelector('[name="title"]')).val()+'</span>',
                                        '<span id="description_'+(i-1)+'">' + $(i.querySelector('[name="description"]')).val()+ '</span>',
                                        '<select class="form-select fs-7 select-costum" id="changeStatus_' + lastIdx + '" onChange="changeStatus(' + lastIdx + ')"><option value"">--Pilih status--</option><option value="publish">Publish</option><option value="hide">Hide</option></select>',
                                        '<a class="badge badge-info h-30px m-1" onclick="edit(' + lastIdx + ')" href="#" data-bs-toggle="modal" data-bs-target="#modal_faq">Ubah</a> <a class="badge badge-danger h-30px m-1" onclick="hapus(' + lastIdx + ')" href="#">Hapus</a>',
                                    ]);
                                    var text = "Surat telah ditambahkan!";
                                    table.destroy();
                                    loadDataTable();
                                } else {
                                    let idx = parseInt($(i.querySelector('[name="dataID"]')).val());
                                    $('#title_' + idx).text($(i.querySelector('[name="title"]')).val());
                                    $('#description_' + idx).text($(i.querySelector('[name="description"]')).val());
                                    $('#changeStatus_' + idx).val($(i.querySelector('[name="status"]')).val());
                                    var text = "Syrat berhasil diubah!";
                                }
                                t.removeAttribute("data-kt-indicator"), t.disabled = !1, Swal.fire({
                                    text: text,
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then((function (t) {
                                    t.isConfirmed && o.hide()
                                }))
                            }), 1e3)) : Swal.fire({
                                text: "Maaf sepertinya ada error, silahkan coba kembali.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        }))
                    })), e.addEventListener("click", (function (t) {
                        t.preventDefault(), Swal.fire({
                            text: "Apa anda yakin membatalkan tambah/edit surat?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Ya, Batal!",
                            cancelButtonText: "Tidak, kembali ke form surat",
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: "btn btn-active-light"
                            }
                        }).then((function (t) {
                            t.value ? (i.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                                text: "Pembatalan surat tidak jadi dilakukan.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        }))
                    })))
            }
        }
    }();
    suratInit.init()
</script>

</html>