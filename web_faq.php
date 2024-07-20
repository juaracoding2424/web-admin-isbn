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
                                    FAQ</h1>
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
                                    <li class="breadcrumb-item text-muted">Monitoring Web</li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item">
                                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                                    </li>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <li class="breadcrumb-item text-muted">FAQ</li>
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
                                        placeholder="Search Kategori, Pertanyaan, Jawaban" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#modal_faq"
                                    class="btn btn-primary fw-bold fs-8 fs-lg-base" onclick="newFaq()">Buat FAQ</a>
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
                                            <th class="text-start min-w-60px pe-2">Urutan</th>
                                            <th class="min-w-120px">Kategori</th>
                                            <th class="min-w-200px">Pertanyaan</th>
                                            <th class="min-w-300px">Jawaban</th>
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
<!--begin::Modal - Buat FAQ-->
<div class="modal fade" id="modal_faq" tabindex="-1" aria-hidden="true">
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
                <form id="form_faq" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Buat FAQ</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-500 fw-semibold fs-5">Daftar pertanyaan dan jawaban yang sering diajukan
                            tentang topik tertentu</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Kategori</span>
                            <span class="ms-2" data-bs-toggle="tooltip" title="Tuliskan kategori untuk FAQ">
                                <i class="ki-outline ki-information fs-7"></i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Masukan kategori FAQ"
                            name="category" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Pertanyaan</span>
                            <span class="ms-2" data-bs-toggle="tooltip" title="Tuliskan pertanyaan untuk FAQ">
                                <i class="ki-outline ki-information fs-7"></i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Masukan pertanyaan untuk FAQ" name="question" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="fs-6 fw-semibold mb-2">Jawaban</label>
                        <textarea class="form-control form-control-solid" rows="4" name="answer"
                            placeholder="Masukan jawaban dari FAQ"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <label class="fs-6 fw-semibold mb-2">Attachments</label>
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="faq_attachments">
                            <!--begin::Message-->
                            <div class="dz-message needsclick align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-outline ki-file-up fs-3hx text-primary"></i>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Masukan attachment (jika ada)</h3>
                                    <span class="fw-semibold fs-7 text-gray-500">Upload up to 10 files</span>
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
                                data-placeholder="Pilih status FAQ" name="status">
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
                        <button type="reset" id="button_faq_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="button_faq_submit" class="btn btn-primary">
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
    var faqs = [
        {
            q: "Apa itu ISBN?",
            a: "Nomor Buku Standar Internasional (ISBN) adalah angka 13 digit yang secara unik mengidentifikasi buku dan produk seperti buku yang diterbitkan secara internasional."
        },
        {
            q: "Apa tujuan ISBN?",
            a: "Tujuan ISBN adalah untuk menetapkan dan mengidentifikasi satu judul atau edisi judul dari satu penerbit tertentu dan unik untuk edisi itu, memungkinkan pemasaran produk yang lebih efisien oleh penjual buku, perpustakaan, universitas, grosir, dan distributor."
        },
        {
            q: "Apa format ISBN?",
            a: "Setiap ISBN terdiri dari tiga belas digit dan setiap kali dicetak didahului dengan huruf ISBN. Angka tiga belas digit dibagi menjadi empat bagian dengan panjang variabel, masing-masing bagian dipisahkan oleh tanda hubung."
        },
        {
            q: "Apakah ISBN memiliki arti yang tertanam dalam angka?",
            a: "Empat bagian ISBN adalah sebagai berikut: Pengenal grup atau negara yang mengidentifikasi pengelompokan penayang secara nasional atau geografis; Pengenal penerbit yang mengidentifikasi penerbit tertentu dalam grup; Pengenal judul yang mengidentifikasi judul atau edisi judul tertentu; Check digit adalah digit tunggal di akhir ISBN yang memvalidasi ISBN."
        },
        {
            q: "Mengapa beberapa ISBN diakhiri dengan 'X'?",
            a: "Dalam kasus digit cek, digit terakhir ISBN, huruf besar X dapat muncul. Metode penentuan digit cek untuk ISBN adalah modulus 11 dengan faktor pembobotan 10 sampai 1. Angka Romawi X digunakan sebagai pengganti 10 di mana sepuluh akan muncul sebagai digit cek."
        },
        {
            q: "Siapa yang dapat menetapkan ISBN ke penerbit?",
            a: "Ada lebih dari 160 Agensi ISBN di seluruh dunia, dan setiap Agensi ISBN ditunjuk sebagai agen eksklusif yang bertanggung jawab untuk menetapkan ISBN kepada penerbit yang tinggal di negara atau wilayah geografis mereka. Badan ISBN Amerika Serikat adalah satu-satunya sumber yang berwenang untuk menetapkan ISBN kepada penerbit yang menyediakan alamat di Amerika Serikat, Kepulauan Virgin AS, Guam, dan Puerto Riko dan basis datanya menetapkan penerbit rekaman yang terkait dengan setiap awalan."
        },
        {
            q: "Siapa yang memenuhi syarat untuk mendapatkan ISBN?",
            a: "Badan ISBN menugaskan ISBN atas permintaan langsung penerbit, penerbit e-book, produser kaset audio dan video, produsen perangkat lunak dan museum serta asosiasi dengan program penerbitan."
        },
        {
            q: "Berapa lama waktu yang dibutuhkan untuk mendapatkan ISBN?",
            a: "Tunggu 5 hari kerja untuk pemrosesan non-prioritas sejak permohonan ISBN diterima di agensi (bukan sejak tanggal yang dikirim oleh penerbit.) Pemrosesan prioritas adalah dua hari kerja sejak aplikasi diterima di agensi. Pemrosesan ekspres adalah 24 jam kerja."
        },
        {
            q: "Berapa biaya untuk mendapatkan ISBN?",
            a: "Ada biaya layanan untuk memproses semua aplikasi ISBN. Informasi biaya layanan terdapat pada aplikasi. Pemrosesan Prioritas dan Ekspres melibatkan biaya tambahan. CATATAN: Biaya layanan pemrosesan TIDAK DAPAT DIKEMBALIKAN."
        },
        {
            q: "Apa yang harus saya lakukan ketika saya menerima ISBN dan di mana ISBN itu dicetak?",
            a: "ISBN harus ditetapkan untuk setiap judul atau produk, termasuk daftar latar belakang atau judul yang akan datang. Setiap format atau penjilidan harus memiliki ISBN terpisah (yaitu hardcover, paperbound, video VHS, laserdisc, format e-book, dll). ISBN baru diperlukan untuk edisi revisi. Setelah ditetapkan, ISBN tidak akan pernah dapat digunakan kembali. ISBN dicetak di bagian bawah sampul belakang buku di atas kode batang dan di halaman hak cipta."
        },
        {
            q: "Bagaimana & di mana saya mendaftarkan ISBN saya?",
            a: "Setelah ISBN ditetapkan ke produk, ISBN harus dilaporkan ke R.R. Bowker sebagai database catatan untuk ISBN Agency. Perusahaan memenuhi syarat untuk daftar gratis di berbagai direktori seperti Buku dalam Cetak, Kata-kata di Kaset, Ensiklopedia Perangkat Lunak, Direktori Video Lengkap Bowker, dll. CATATAN: Hanya menerima ISBN Anda TIDAK menjamin daftar judul. Untuk memastikan judul Anda masuk ke database Buku dalam Cetak, Anda harus mengirimkan informasi judul Anda. Judul buku harus didaftarkan ke Buku dalam Cetak di www.bowkerlink.com"
        },
        {
            q: "Dapatkah penerbit memiliki ISBN & ISSN?",
            a: "Kedua sistem penomoran digunakan untuk buku-buku dalam satu seri dan dengan semusim atau dua tahunan. ISBN mengidentifikasi masing-masing buku dalam seri atau tahun tertentu untuk tahunan atau dua tahunan. ISSN mengidentifikasi seri yang sedang berlangsung, atau serial tahunan atau dua tahunan yang sedang berlangsung. Jika publikasi memiliki keduanya, masing-masing harus dicetak pada halaman hak cipta."
        },
        {
            q: "Bagaimana cara menemukan ISBN yang ditetapkan?",
            a: "Publikasi (daftar hard copy) di mana ISBN yang ditugaskan muncul adalah Penerbit, Distributor & Grosir Amerika Serikat, diterbitkan oleh R.R. Bowker, dan Literary Market Place, diterbitkan oleh Information Today."
        },
        {
            q: "Bagaimana ISBN digunakan dalam Kode Batang & bagaimana cara mendapatkannya?",
            a: "ISBN dapat diterjemahkan ke dalam format kode batang yang kompatibel di seluruh dunia. Penayang yang ingin ISBN mereka diterjemahkan ke dalam kode batang yang kompatibel di seluruh dunia sekarang dapat mengajukan permintaan mereka langsung secara online di www.isbn.org atau www.bowkerbarcode.com . Pemindaian kode batang adalah langkah yang diperlukan oleh banyak pengecer dalam proses transaksi penjualan untuk publikasi buku dan barang-barang terkait buku. Kami berharap bahwa menawarkan layanan ini akan menghemat waktu Anda dan memungkinkan Anda untuk memenuhi semua persyaratan mitra transaksi Anda."
        },
        {
            q: "Bagaimana cara memilih jumlah ISBN yang benar?",
            a: "ISBN dijual dalam blok 10, 100, dan 1000. Saat membeli ISBN, kami sarankan Anda memperkirakan jumlah publikasi yang akan Anda terbitkan dalam lima tahun ke depan, dan pilih blok yang paling sesuai dengan kebutuhan Anda. Itu selalu yang terbaik untuk memilih blok yang akan bertahan selama beberapa tahun karena Anda akan dapat mempertahankan satu awalan penerbit, dan meminimalkan biaya unit per ISBN. Saat membeli blok ISBN yang lebih besar, harga per ISBN akan menurun."
        },
        {
            q: "Apa format ISBN-13 baru?",
            a: "Setiap ISBN akan terdiri dari tiga belas digit pada tahun 2007. Tiga belas digit angka dibagi menjadi lima bagian dengan panjang variabel, masing-masing bagian dipisahkan oleh tanda hubung."
        },
        {
            q: "Apakah ISBN-13 memiliki arti yang tertanam dalam angka?",
            a: "Lima bagian ISBN adalah sebagai berikut: ISBN-13 saat ini akan diawali dengan '978'; Pengenal grup atau negara yang mengidentifikasi pengelompokan penayang secara nasional atau geografis; Pengenal penerbit yang mengidentifikasi penerbit tertentu dalam grup; Pengenal judul yang mengidentifikasi judul atau edisi judul tertentu; Check digit adalah digit tunggal di akhir ISBN yang memvalidasi ISBN."
        },
        {
            q: "Di mana ISBN ditempatkan pada buku?",
            a: "ISBN ditempatkan di halaman hak cipta dan, jika tidak ada kode batang, di sampul belakang."
        },
        {
            q: "Apa perbedaan antara kode batang dan ISBN?",
            a: "ISBN adalah angka. Kode batang adalah grafik dengan garis vertikal yang mengkodekan informasi numerik untuk tujuan pemindaian. ISBN dan kode batang adalah dua hal yang berbeda."
        },
        {
            q: "Apakah penting di mana sebuah buku dicetak?",
            a: "Tidak, buku dapat dicetak di mana saja. ISBN ditetapkan berdasarkan lokasi geografis penerbit, bukan perusahaan percetakan."
        },
        {
            q: "Jika penerbit menjual buku mereka sendiri dan tidak mencoba menempatkannya di toko atau perpustakaan atau dengan grosir, apakah ISBN diperlukan?",
            a: "Tidak, ISBN tidak diperlukan."
        },
        {
            q: "Apakah ISBN harus ditetapkan ke buku yang tidak dijual?",
            a: "Tidak, mereka tidak harus ditugaskan, tetapi mereka bisa."
        },
        {
            q: "Apakah ISBN berbeda digunakan jika buku muncul dalam bahasa yang berbeda?",
            a: "Ya. Setiap versi bahasa adalah produk yang berbeda."
        },
        {
            q: "Apakah publikasi kustom diberi ISBN?",
            a: "Tidak, publikasi kustom tidak diberi ISBN kecuali penugasan tersebut diperlukan untuk sistem back office penerbit, seperti keuangan, karena hanya ada satu pelanggan dalam pengaturan tersebut."
        }
    ];
    var faqs2 = [
        {
            q: "Bagaimana prosedur pengajuan ISBN?",
            a: "Sejak 1 April 2018 pengajuan ISBN dilakukan secara online di web isbn.perpusnas.go.id\n\nBerkas apa saja yang harus disiapkan?\n\nIkuti tahapan registrasi. Registrasi adalah Registrasi Penerbit. Pada tahap ini penerbit menyiapkan Surat Pernyataan (unduh di halaman registrasi) yang sudah diisi dengan benar dan lengkap serta menyiapkan legalitas (bentuk legalitas, seperti : akta notaris, SK Rektor atau MoU, dapat dilihat contohnya pada beranda)"
        },
        {
            q: "Jika pendaftaran sudah sukses, langkah apa yang harus dilakukan oleh penerbit selanjutnya?",
            a: "Sesuai notifikasi pada layar, hubungi Tim ISBN di +6221 3812 136 untuk permohonan validasi kemudian lihat email yang diberikan oleh sistem secara otomatis tentang petunjuk/ langkah selanjutnya."
        },
        {
            q: "Apakah penerbit lama juga harus melakukan Registrasi Penerbit?",
            a: "Ya. Semua penerbit (baik lama maupun baru) harus melakukan tahap ini untuk mendapatkan akun agar bisa log in pada tahap registrasi ISBN.\n\nBagaimana dengan legalitas penerbit, jika penerbit lama tidak/belum memiliki payung hukum?\n\nLegalitas harus tetap dipenuhi untuk kelengkapan administrasi penerbit dan akan memberi kekuatan hukum untuk penerbit itu sendiri."
        },
        {
            q: "Bagaimana jika nama penerbit yang didaftarkan tidak sesuai dengan nama pada legalitas?",
            a: "Penerbit baru, nama yang didaftarkan harus sesuai dengan yang termaktub pada legalitas. Namun untuk penerbit lama yang sudah terdaftar dan sudah memiliki element publisher, boleh menggunakan nama lama meskipun tidak sesuai dengan legalitasnya (pemutihan)\n\nBagaimana cara mendaftarkan lini atau imprint dari penerbitan?\n\nLini penerbitan atau imprint harus didaftarkan terpisah dari penerbit induknya, maksudnya supaya lini atau imprint tersebut mempunyai akun sendiri. Caranya daftarkan dengan mengisi surat pernyataan atas nama lini/imprint tersebut dan lampirkan legalitas perusahaan induk yang diperkuat dengan pernyataan keberadaan lini/imprint tersebut yang termaktub di dalam pasal kegiatan usaha (lihat contoh pendaftaran lini penerbit pada beranda)"
        },
        {
            q: "Bagaimana cara mendaftarkan buku-buku yang akan diterbitkan? Apa persyaratannya?",
            a: "Penerbit yang sudah terdaftar online (sudah melakukan tahap registrasi penerbit) bisa menggunakan akunnya untuk mendaftarkan terbitannya. Sebelum log in dengan username dan password yang sudah divalidasi, penerbit harus menyiapkan File Gabungan Berkas dalam format PDF dengan ukuran tidak lebih dari 2 Megabites. File ini terdiri atas : Surat Permohonan dari penerbit, halaman judul, halaman balik halaman judul, Kata pengantar dan daftar isi."
        },
        {
            q: "Bagaimana jika penerbit ingin menerbitkan bukunya dalam berbagai versi (misanya : ukuran besar, ukuran sedang, ukuran kecil atau hardcover dan softcover), apakah ISBN cukup diurus sekali saja?",
            a: "Buku yang dibuat dalam berbagai ukuran atau dibuat dalam berbagai format harus didaftarkan terpisah sehingga masing-masing mempunyai cantuman ISBN berbeda. E-book (format EPUB atau PDF), DVD edukatif dan audiobook mendapat cantuman ISBN terpisah.\n\nBagaimana dengan e-book, DVD edukatif dan audiobook, apakah bisa mendapatkan cantuman ISBN? Bagaimana cara pengajuannya?\n\nDaftarkan seperti mendaftarkan ISBN buku biasa, berikan keterangan GMD [sumber elektronis] setelah judul utama dan klik jenis media yang sesuai dengan pilihan yang dimaksud."
        },
        {
            q: "Bagaimana cara merevisi judul atau kepengarangan yang ISBN-nya sudah disetujui?",
            a: "Perubahhan judul atau kepengarangan dari judul yang ISBN nya sudah disetujui dapat direvisi dengan cara menyiapkan kembali 1 set permohonan lengkap (berupa file gabungan berkas yang sudah direvisi) kirimkan ke email isbn@mail.perpusnas.go.id Perubahan dapat diterima jika judul tersebut masih ada dalam kurun waktu 2 bulan dari keluarnya ISBN"
        },
        {
            q: "Apa yang harus dilakukan penerbit ketika akun dinyatakan diblokir/dikunci? Bagaimana cara melepaskan pemblokiran akun ini?",
            a: "Penerbit akan mengalami pemblokiran akun, dikarenakan (lihat Perka no. 7 tahun 2016) :\n\n1. Penerbit belum menyerahkan terbitannya minimal 50% dari ISBN yang sudah dimintakan.\n2. Penerbit diidentifikasi masih melakukan penghitungan ISBN secara mandiri.\n3. Penerbit memberikan data yang berbeda antara buku hasil terbitannya dengan data ketika pengajuan ISBN nya\n\nPenguncian/pemblokiran akun akan tampak pada layar sebagai notifikasi dan akan ada pemberitahuan melalui email. Akun dapat dibuka kembali setelah penerbit menyelesaikan permasalahannya."
        },
        {
            q: "Bagaimana cara permohonan konversi ISBN dari ISBN lama yang 10 digit ke ISBN 13 digit?",
            a: "Penerbit mengajukan surat permohonan konversi ISBN melalui email isbn@mail.perpusnas.go.id"
        },
        {
            q: "Bagaimana cara mendapatkan surat keterangan untuk judul-judul lama yang ISBN nya tidak bisa terlihat pada database ISBN? (untuk keperluan kenaikan pangkat dan untuk keperluan distribusi buku)",
            a: "Ajukan permohonan surat keterangan tersebut melalui email atau datang langsung. Tim ISBN akan segera meresponnya dengan membuat Surat Keterangan tersebut sesuai dengan yang diperlukan"
        },
        {
            q: "Bagaimana mekanismenya jika penerbit lupa dengan akunnya?",
            a: "Ajukan permohonan RESET PASSWORD melalui email isbn@mail.perpusnas.go.id"
        },
        {
            q: "Apakah ada pembatasan jumlah judul yang diajukan oleh sebuah penerbit?",
            a: "Penerbit hanya diberikan kuota 10 judul/hari\n\nApakah penerbit akan menerima email untuk hasil ISBN yang diajukannya?\n\nTidak. Penerbit bisa melihat hasil ISBN melalui akunnya masing-masing. ISBN dan Barcode akan keluar bersamaan dan dapat diunduh. Sedangkan KDT yang diminta penerbit, akan berubah warna biru bila selesai proses"
        },
        {
            q: "Bagaimana cara mengajukan ISBN untuk terbitan prosiding hasil seminar? Apakah persyaratan sebuah buku yang disajikan untuk anak sama dengan persyaratan buku pada umumnya?",
            a: "Persyaratan prosiding hasil pertemuan disesuaikan dengan ketentuan yang ditetapkan Tim Penilai LIPI/Dikti (lihat contoh prosiding pada beranda). Contoh pengajuan buku anak, lihat contoh pada beranda"
        },
        {
            q: "Bagaimana cara mengajukan ISBN buku berjilid? dan bagaimana cara pencantuman ISBN nya pada buku bersangkutan?",
            a: "Buku berjilid mendapat perlakukan berbeda dengan buku lepas biasa (lihat contoh pada beranda). Cantuman ISBN untuk buku berjilid, setiap jilid dari buku tersebut mencantumkan 2 ISBN, yaitu ISBN no.jil.lengkap dan ISBN jilid yang bersangkutan.\n\nApakah ada penerapan ISBN untuk box?\n\nTidak ada ISBN untuk box. ISBN buku berjilid dapat digunakan untuk alat penjualan kolektif dan terpisah. ISBN nomor jilid lengkap dapat digunakan untuk penjualan buku yang dijual secara kolektif (dari jilid pertama-jilid terakhir) sedangkan ISBN tiap jilid, dapat digunakan untuk penjualan buku tersebut secara terpisah (dijual lepas)"
        },
        {
            q: "Apakah buku cetak ulang harus diajukan kembali ISBN nya?",
            a: "Tidak. Buku cetak ulang menggunakan ISBN lama. Kecuali jika buku tersebut mengalami perubahan isi yang cukup signifikan, harus diajukan kembali ISBN nya.\n\nJika buku mengalami perubahan judul tetapi isinya tetap, apakah harus diajukan kembali ISBN nya?\n\nYa. Buku tersebut harus diajukan kembali ISBN nya. Namun, perubahan disain sampul atau perubahan warna, tidak harus merubah ISBN"
        },
        {
            q: "Bagaimana mekanisme pengajuan ISBN untuk buku yang sudah pernah mendapat ISBN tapi dengan penerbit yang berbeda?",
            a: "Ajukan permohonan ISBN oleh penerbit baru, dengan menguploadkan persyaratan sesuai prosedur ditambah surat pengalihan dari penerbit pertama ke penerbit kedua atau surat pemutusan kerjasama antara penulis dengan penerbit pertama"
        },
        {
            q: "Bagaimana mekanisme serah simpan karya cetak karya rekam untuk memenuhi kewajiban UU no. 13 tahun 2018?",
            a: "Terbitan berupa buku dapat dikirimkan ke : Tim Penerimaan Serah Simpan Karya Cetak Karya Rekam Sub Direktorat Deposit Gedung Perpustakaan Nasional Blok E lantai 7 Jl. Salemba Raya no. 28A Jakarta Pusat. Sedangkan untuk terbitan ebook dikirimkan ke edeposit.perpusnas.go.id"
        },
        {
            q: "Apakah Perpustakaan Nasional memberikan bimbingan untuk penerbit menyangkut pendaftaran online ISBN?",
            a: "Ya. Perpustakaan Nasional RI qq Tim ISBN menyediakan bimbingan teknis untuk para penerbit. Bimtek ini ada 3 kategori :\n\n1. Bimtek ISBN online\n2. Bimtek iPusnas\n3. Bimtek akselerasi/pelaporan penggunaan ISBN\n\nPelaksanaan bimtek ISBN online dapat dilaksanakan kapan saja sesuai permintaan penerbit (penerbit bisa datang langsung di front office layanan ISBN dan Tim ISBN akan membantu & membimbing penerbit melakukan pendaftaran online. Sedangkan bimtek iPusnas dan akselerasi dilaksanakan tentatif sesuai kebutuhan penerbit.\n\nApakah semua pengurusan dan bimbingan yang diberikan Perpustakaan Nasional berbayar? Berapa besaran biaya yang harus dikeluarkan penerbit?\n\nTidak berbayar semua free atau gratis."
        },
        {
            q: "Apakah Perpustakaan Nasional bisa merekomendasikan jika ada penerbit yang salah mengajukan permohonan untuk terbitannya?",
            a: "Jika penerbit mengajukan buku yang berisi kumpulan lagu yang berpartitur, akan disarankan untuk tidak upload data di akun ISBN tapi kirim email ke isbn@mail.perpusnas.go.id dan Perpustakaan Nasional akan memberikan cantuman ISMN untuk jenis terbitan itu. Jika ada penerbit yang mendaftarkan terbitan berkala dengan frekuensi terbit teratur (seperti : majalah, bulletin, jurnal, dll) akan disarankan untuk mendaftarkan ISSN nya ke PDII-LIPI melaui web issn.pdii.lipi.go.id."
        },
        {
            q: "Bagaimana mekanisme keikutsertaan dalam kegiatan pengadaan ebook iPusnas?",
            a: "a. Penerbit mengajukan penawaran daftar judul kepada Tim Pengadaan iPusnas\nb. Tim Pengadaan iPusnas akan melakukan seleksi judul, dan menetapkan judul yang akan dibeli. Kemudian daftar akan dikirimkan balik ke penerbit yang ditembuskan ke Tim ISBN\nc. Penerbit menyampaikan daftar judul hasil seleksi kepada Tim ISBN dan Tim Aksaramaya\nd. Tim ISBN akan memberi Bimtek iPusnas untuk mendapatkan edukasi pendaftaran ISBN ebook secara expres\ne. Setelah Bimtek, penerbit akan mendapat fasilitas pendaftaran ebook iPusnas dengan akun khusus dan dapat mendaftarkannya ISBN ebook dalam jumlah yang banyak sesuai judul hasil seleksi."
        }
    ];
    var populateDataSet = function (dataFaq, dataDetail) {
        var dataSetPop = [];
        let i = 1;
        dataFaq.forEach(function (item, index) {
            dataSetPop.push([
                '<span id="dataID_'+(i-1)+'">' + (i).toString() +"</span>",
                '<span id="category_'+(i-1)+'">General</span>',
                '<span id="q_'+(i-1)+'">' + item.q + '</span>',
                '<span id="a_'+(i-1)+'">' + item.a + '</span>',
                '<select class="form-select fs-7 select-costum" id="changeStatus_' + (i-1) + '" onChange="changeStatus(' + (i-1)  + ')"><option value"">--Pilih status--</option><option value="publish">Publish</option><option value="hide">Hide / Draft</option></select>',
                '<a class="badge badge-info h-30px m-1" onclick="edit(' + (i-1)  + ')" href="#" data-bs-toggle="modal" data-bs-target="#modal_faq">Ubah</a> <a class="badge badge-danger h-30px m-1" onclick="hapus(' + (i-1)  + ')" data-id="'+(i-1)+'" href="#">Hapus</a>',
            ]);
            i += 1;
        });
        dataDetail.forEach(function (item, index) {
            dataSetPop.push([
                '<span id="dataID_'+(i-1)+'">' + (i).toString() +"</span>",
                '<span id="category_'+(i-1)+'">Spesifik</span>',
                '<span id="a_'+(i-1)+'">' + item.a + '</span>',
                '<span id="q_'+(i-1)+'">' + item.q + '</span>',
                '<span id="a_'+(i-1)+'">' + item.a + '</span>',
                '<select class="form-select fs-7 select-costum" id="changeStatus_' + (i-1)  + '" onChange="changeStatus(' + (i-1)  + ')"><option value"">--Pilih status--</option><option value="publish">Publish</option><option value="hide">Hide / Draft</option></select>',
                '<a class="badge badge-info h-30px m-1" onclick="edit(' + (i-1)  + ')" href="#" data-bs-toggle="modal" data-bs-target="#modal_faq">Ubah</a> <a class="badge badge-danger h-30px m-1" onclick="hapus(' + (i-1)  + ')" data-id="'+(i-1)+'" href="#">Hapus</a>',
            ]);
            i += 1;
        });
        return dataSetPop;
    };

    const dataSet = populateDataSet(faqs, faqs2); var table;
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
        let i = document.querySelector("#form_faq");
        $(i.querySelector('[name="category"]')).val($('#category_' + index).text());
        $(i.querySelector('[name="question"]')).val($('#q_' + index).text());
        $(i.querySelector('[name="answer"]')).val($('#a_' + index).text());
        $(i.querySelector('[name="status"]')).val($('#changeStatus_' +index).val()).trigger('change');
        $(i.querySelector('[name="dataID"]')).val(index);
    }
    var newFaq = function () {
        let i = document.querySelector("#form_faq");
        $(i.querySelector('[name="category"]')).val('');
        $(i.querySelector('[name="question"]')).val('');
        $(i.querySelector('[name="answer"]')).val('');
        $(i.querySelector('[name="dataID"]')).val('');
    }
    var hapus = function (index) {
        r = $('#question_' + index).text();
        Swal.fire({
            html: "Anda yakin akan menghapus FAQ: <span class='badge badge-info'> " + r + "</span>",
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
                    html: "Anda menghapus FAQ: <span class='badge badge-info'>" + r + "</span>!.",
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
            html: "Berhasil mengubah status FAQ menjadi " + val,
            icon: "success",
            timer: 1000,
            customClass: {
                confirmButton: "btn fw-bold btn-primary"
            },
            showCancelButton: false,
            showConfirmButton: false
        })
    };
    var faqInit = function () {
        var t, e, n, i, o, a;
        return {
            init: function () {
                (a = document.querySelector("#modal_faq")) && (o = new bootstrap.Modal(a),
                    i = document.querySelector("#form_faq"),
                    t = document.getElementById("button_faq_submit"),
                    e = document.getElementById("button_faq_cancel"), new Dropzone("#faq_attachments", {
                        url: "https://keenthemes.com/scripts/void.php",
                        paramName: "file",
                        maxFiles: 10,
                        maxFilesize: 10,
                        addRemoveLinks: !0,
                        accept: function (t, e) {
                            "justinbieber.jpg" == t.name ? e("Naha, you don't.") : e()
                        }
                    }), $(i.querySelector('[name="category"]')).on("change", (function () {
                        n.revalidateField("category")
                    })), $(i.querySelector('[name="question"]')).on("change", (function () {
                        n.revalidateField("question")
                    })), $(i.querySelector('[name="answer"]')).on("change", (function () {
                        n.revalidateField("answer")
                    })), $(i.querySelector('[name="status"]')).on("change", (function () {
                        n.revalidateField("status")
                    })), n = FormValidation.formValidation(i, {
                        fields: {
                            category: {
                                validators: {
                                    notEmpty: {
                                        message: "Kategori tidak boleh kosong!"
                                    }
                                }
                            },
                            question: {
                                validators: {
                                    notEmpty: {
                                        message: "Pertanyaan FAQ tidak boleh kosong!"
                                    }
                                }
                            },
                            answer: {
                                validators: {
                                    notEmpty: {
                                        message: "Jawaban FAQ tidak boleh kosong"
                                    }
                                }
                            },
                            status: {
                                validators: {
                                    notEmpty: {
                                        message: "Pilih status FAQ!"
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
                                        '<span id="category_'+(i-1)+'">'+$(i.querySelector('[name="category"]')).val()+'</span>',
                                        '<span id="a_'+(i-1)+'">' + $(i.querySelector('[name="question"]')).val()+ '</span>',
                                        '<span id="q_'+(i-1)+'">' + $(i.querySelector('[name="answer"]')).val() + '</span>',
                                        '<select class="form-select fs-7 select-costum" id="changeStatus_' + lastIdx + '" onChange="changeStatus(' + lastIdx + ')"><option value"">--Pilih status--</option><option value="publish">Publish</option><option value="hide">Hide</option></select>',
                                        '<a class="badge badge-info h-30px m-1" onclick="edit(' + lastIdx + ')" href="#" data-bs-toggle="modal" data-bs-target="#modal_faq">Ubah</a> <a class="badge badge-danger h-30px m-1" onclick="hapus(' + lastIdx + ')" href="#">Hapus</a>',
                                    ]);
                                    var textFaq = "FAQ telah ditambahkan!";
                                    table.destroy();
                                    loadDataTable();
                                } else {
                                    let idx = parseInt($(i.querySelector('[name="dataID"]')).val());
                                    $('#category_' + idx).text($(i.querySelector('[name="category"]')).val());
                                    $('#q_' + idx).text($(i.querySelector('[name="question"]')).val());
                                    $('#a_' + idx).text($(i.querySelector('[name="answer"]')).val());
                                    $('#changeStatus_' + idx).val($(i.querySelector('[name="status"]')).val());
                                    var textFaq = "FAQ berhasil diubah!";
                                }
                                t.removeAttribute("data-kt-indicator"), t.disabled = !1, Swal.fire({
                                    text: textFaq,
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
                            text: "Apa anda yakin membatalkan tambah/edit FAQ?",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Ya, Batal!",
                            cancelButtonText: "Tidak, kembali ke form FAQ",
                            customClass: {
                                confirmButton: "btn btn-primary",
                                cancelButton: "btn btn-active-light"
                            }
                        }).then((function (t) {
                            t.value ? (i.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                                text: "Pembatalan FAQ tidak jadi dilakukan.",
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
    faqInit.init()
</script>

</html>