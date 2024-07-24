	<div id="kt_app_aside" class="app-aside flex-column" data-kt-drawer="true" data-kt-drawer-name="app-aside"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="auto"
		data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_aside_toggle">
		<!--begin::Aside wrapper-->
		<div id="kt_app_aside_wrapper" class="app-aside-wrapper hover-scroll-y my-4" data-kt-scroll="true"
			data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-offset="5px">
			<!--begin::Primary menu-->
			<div id="kt_app_aside_menu" class="menu menu-sub-indention menu-rounded menu-column fw-semibold fs-6 px-2"
				data-kt-menu="true">
				<!--begin:Menu item-->
				<div class="menu-item">
                <a class="menu-link" href="index.php">
                    <span class="menu-icon"><i class="ki-outline ki-element-11 fs-2"></i></span> Home
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link" href="lembarkerja_verifikasi.php">
                    <span class="menu-icon"><i class="ki-outline ki-abstract-36 fs-2 text-primary"></i></span> Verifikasi ISBN  <span class="badge badge-light-info badge-circle fw-bold fs-7 ms-2">67</span>
                </a>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-address-book fs-2"></i>
                    </span>
                    <span class="menu-title">Monitoring ISBN</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link" href="isbn_baru.php">
                            <span class="menu-icon"><i class="ki-outline ki-plus-circle fs-2"></i></span> Permohonan
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="isbn_bermasalah.php">
                            <span class="menu-icon"><i class="ki-outline ki-file-deleted fs-2"></i></span> Bermasalah
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="isbn_data.php">
                            <span class="menu-icon"><i class="ki-outline  ki-questionnaire-tablet fs-2"></i></span> Data
                            ISBN
                        </a>
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <div class="menu-item">
                <a class="menu-link" href="bip.php">
                    <span class="menu-icon"><i class="ki-outline ki-book-square fs-2"></i></span> Book In Print
                </a>
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-people fs-2"></i>
                    </span>
                    <span class="menu-title">Monitoring Penerbit  <span class="badge badge-light-danger badge-circle fw-bold fs-7 ms-2">5</span></span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link" href="penerbit_baru.php">
                            <span class="menu-icon"><i class="ki-outline ki-plus-circle fs-2"></i></span> Permohonan <span class="badge badge-light-danger badge-circle fw-bold fs-7 ms-2">5</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="penerbit_bermasalah.php">
                            <span class="menu-icon"><i class="ki-outline ki-file-deleted fs-2"></i></span> Bermasalah
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="penerbit_data.php">
                            <span class="menu-icon"><i class="ki-outline  ki-questionnaire-tablet fs-2"></i></span> Data
                            Penerbit
                        </a>
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion active">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-setting-2 fs-2"></i>
                    </span>
                    <span class="menu-title">Monitoring Web</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link" href="web_faq.php">
                            <span class="menu-icon"><i class="ki-outline ki-plus-circle fs-2"></i></span> FAQ
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="web_berita.php">
                            <span class="menu-icon"><i class="ki-outline  ki-questionnaire-tablet fs-2"></i></span> Berita / Pengumuman
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="web_surat.php">
                            <span class="menu-icon"><i class="ki-outline ki-file-deleted fs-2"></i></span> Surat
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="web_email.php">
                            <span class="menu-icon"><i class="ki-outline  ki-questionnaire-tablet fs-2"></i></span> Template Email
                        </a>
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion active">
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-outline ki-user fs-2"></i>
                    </span>
                    <span class="menu-title">Akun</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <a class="menu-link" href="akun.php">
                            <span class="menu-icon"><i class="fa-solid fa-address-book fs-2"></i></span> Akun
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="role.php">
                            <span class="menu-icon"><i class="fa-solid fa-key fs-2"></i></span> Role
                        </a>
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>
            <div class="menu-item">
                <a class="menu-link" href="support.php">
                    <span class="menu-icon"><i class="ki-outline ki-chart fs-2"></i></span> Support <span class="badge badge-light-danger badge-circle fw-bold fs-7 ms-2">4</span>
                </a>
            </div>
			</div>
			<!--end::Primary menu-->
		</div>
		<!--end::Aside wrapper-->
	</div>