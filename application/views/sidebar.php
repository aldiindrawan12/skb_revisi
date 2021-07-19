
<body id="page-top" onload="asd()">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <?php
                if($_SESSION["user"]){
                    $link = base_url("index.php/home");
                }else{
                    $link = redirect(base_url());
                }
            ?>
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-2">
                <div class="sidebar-brand-icon fa-flip-horizontal">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="sidebar-brand-text mx-3 "><h1>SKb</h1></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider" id="HR_Dashboard">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Dashboard">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Dashboard"
                    aria-expanded="true" aria-controls="Dashboard" onclick="aktifasi('Dashboard')">
                    <span>Dashboard</span>
                </a>
                <div id="Dashboard" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" id="DB_Izin_page" href="<?=base_url("index.php/dashboard")?>">
                            <i class="fas fa-clipboard"></i>
                            <span>DB Izin dan Dokumen</span>
                        </a>
                        <a class="collapse-item" id="DB_Operasional_page" href="<?=base_url("index.php/dashboard/dashboard_operasional")?>">
                            <i class="fas fa-truck"></i>
                            <span>DB Operasional</span>
                        </a>
                        <a class="collapse-item" id="DB_Invoice_page" href="<?=base_url("index.php/dashboard/dashboard_invoice")?>">
                            <i class="fas fa-id-badge"></i>
                            <span>DB Invoice</span>
                        </a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" id="HR_Master_Data">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Master_Data">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Master_Data"
                    aria-expanded="true" aria-controls="Master_Data" onclick="aktifasi('Master_Data')">
                    <span>Master Data</span>
                </a>
                <div id="Master_Data" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" id="Merk_page" href="<?=base_url("index.php/home/merk")?>">
                            <i class="fas fa-clipboard"></i>
                            <span>MD Tipe Mobil</span>
                        </a>
                        <a class="collapse-item" id="Kendaraan_page" href="<?=base_url("index.php/home/truck")?>">
                            <i class="fas fa-truck"></i>
                            <span>MD Kendaraan</span>
                        </a>
                        <a class="collapse-item" id="Supir_page" href="<?=base_url("index.php/home/penggajian")?>">
                            <i class="fas fa-id-badge"></i>
                            <span>MD Driver</span>
                        </a>
                        <a class="collapse-item"  id="Customer_page" href="<?=base_url("index.php/home/customer")?>">
                            <i class="fas fa-users"></i>
                            <span>MD Customer</span>
                        </a>
                        <a class="collapse-item" id="Satuan_page"href="<?=base_url("index.php/home/satuan")?>">  
                            <i class="fas fa-weight"></i>
                            <span>MD Rute</span>
                        </a>
                        <!-- <a class="collapse-item" id="Kosongan_page"href="<?=base_url("index.php/home/kosongan")?>">  
                        <i class="fas fa-list-alt"></i>
                            <span>Rute Kosongan</span>
                        </a>
                        <a class="collapse-item" id="Paketan_page"href="<?=base_url("index.php/home/paketan")?>">  
                        <i class="fas fa-route"></i>
                            <span>Rute Paketan</span>
                        </a> -->
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" id="HR_Job_Order">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Job_Order">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Job_Order"
                    aria-expanded="true" aria-controls="Job_Order" onclick="aktifasi('Job_Order')">
                    <span>Job Order</span>
                </a>
                <div id="Job_Order" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white  collapse-inner rounded">
                        <a class="collapse-item" id="Buat_JO_page" href="<?=base_url("index.php/form/joborder")?>">
                            <i class="fas fa-envelope-open-text"></i>
                            <span id="coba">Buat Job Order</span>
                        </a>
                        <a class="collapse-item" id="JO_page" href="<?=base_url("index.php/home")?>">
                            <i class="fas fa-envelope-open-text"></i>
                            <span id="coba">Data Job Order</span>
                        </a>
                        <a class="collapse-item" id="Konfirmasi_JO_page" href="<?=base_url("index.php/home/konfirmasi_jo")?>">
                            <i class="fas fa-info-circle"></i>
                            <span id="coba">Konfirmasi Job Order</span>
                        </a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider" id="HR_Invoice">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Invoice">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Invoice"
                    aria-expanded="true" aria-controls="Invoice" onclick="aktifasi('Invoice')">
                    <span>Invoice</span>
                </a>
                <div id="Invoice" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white  collapse-inner rounded">
                        <a class="collapse-item" id="Invoice_page" href="<?=base_url("index.php/home/invoice")?>">   
                            <i class="fas fa-plus-square"></i>
                            <span>Buat Invoice</span>
                        </a>
                        <a class="collapse-item" id="Invoice_Customer_page" href="<?=base_url("index.php/home/invoice_customer")?>">   
                            <i class="fas fa-receipt"></i>
                            <span>Data Invoice</span>
                        </a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" id="HR_Penggajian">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Penggajian">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Penggajian"
                    aria-expanded="true" aria-controls="Penggajian" onclick="aktifasi('Penggajian')">
                    <span>Penggajian</span>
                </a>
                <div id="Penggajian" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white collapse-inner rounded">
                        <a class="collapse-item" id="Gaji_page" href="<?=base_url("index.php/home/gaji")?>">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Buat Slip Gaji</span>
                        </a>
                        <a class="collapse-item" id="Laporan_Gaji_page" href="<?=base_url("index.php/home/report_gaji")?>">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Data Slip Gaji</span>
                        </a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" id="HR_Kasbon">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Kasbon">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Kasbon"
                    aria-expanded="true" aria-controls="Kasbon" onclick="aktifasi('Kasbon')">
                    <span>Kasbon</span>
                </a>
                <div id="Kasbon" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white collapse-inner rounded">
                        <a class="collapse-item" id="Buat_Bon_page" href="<?=base_url("index.php/form/bon")?>">
                            <i class="fas fa-funnel-dollar"></i>
                            <span>Buat Nota Kasbon</span>
                        </a>
                        <a class="collapse-item" id="Bon_page" href="<?=base_url("index.php/home/bon")?>">
                            <i class="fas fa-funnel-dollar"></i>
                            <span>Data Nota Kasbon</span>
                        </a>
                        <!-- <a class="collapse-item" id="Saldo_Bon_page" href="<?=base_url("index.php/home/saldo_bon")?>">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Saldo Kasbon Driver</span>
                        </a> -->
                        <a class="collapse-item" id="Laporan_Bon_page" href="<?=base_url("index.php/home/report_bon")?>">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Mutasi Kasbon Driver</span>
                        </a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <!-- <hr class="sidebar-divider" id="HR_Laporan"> -->
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item" id="LI_Laporan">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Laporan"
                    aria-expanded="true" aria-controls="Laporan" onclick="aktifasi('Laporan')">
                    <span>Laporan</span>
                </a>
                <div id="Laporan" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white collapse-inner rounded">
                        <a class="collapse-item" id="Laporan_page" href="<?=base_url("index.php/home/report")?>">
                            <i class="fas fa-mail-bulk"></i>
                            <span>Laporan Job Order</span>
                        </a>
                        <a class="collapse-item" id="Laporan_Uang_Jalan_page" href="<?=base_url("index.php/home/report_uang_jalan")?>">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Laporan Uang Jalan</span>
                        </a> -->
                        <!-- <a class="collapse-item" id="Laporan_Gaji_page" href="<?=base_url("index.php/home/report_gaji")?>">
                            <i class="fas fa-file-invoice-dollar"></i>
                            <span>Laporan Gaji Supir</span>
                        </a> -->
                    <!-- </div>
                </div>
            </li> -->
            <!-- Divider -->
            <hr class="sidebar-divider" id="HR_Konfigurasi">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id="LI_Konfigurasi">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Konfigurasi"
                    aria-expanded="true" aria-controls="Konfigurasi" onclick="aktifasi('Konfigurasi')">
                    <span>Sistem dan Konfigurasi</span>
                </a>
                <div id="Konfigurasi" class="collapse" aria-labelledby="headingTwo">
                    <div class="bg-white py-2 collapse-inner rounded">
                            <a class="collapse-item" id="Akun_page" href="<?=base_url("index.php/home/akun")?>">
                                <i class="fas fa-database"></i>
                                <span>Data Akun </span>
                            </a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block my-1">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline my-1">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column bg-light">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-light small"><strong><?= $_SESSION["user"]?></strong></span>
                                <i class="fas fa-user-friends"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#popup-ubah-password">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Password
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

<script>
    function asd(){
        var page = '<?= $page?>';
        $("#"+page).addClass("active");
        var collapse_group = '<?= $collapse_group?>';
        $("#"+collapse_group).addClass("show");
        // var konfigurasi = <?= $akun_akses["akun_akses"]?>;
        var konfigurasi_page = <?= $akun_akses["akses"]?>;
        var page = ["x","JO_page","Konfirmasi_JO_page","Invoice_page","Invoice_Customer_page","Bon_page","Gaji_page",
        "Laporan_page","Laporan_Uang_Jalan_page","Laporan_Gaji_page","Laporan_Bon_page","Akun_page","Saldo_Bon_Page",
        "Buat_Bon_page","Buat_JO_page","DB_Izin_page","DB_Operasional_page","DB_Invoice_page"];
        if(konfigurasi_page[0]==0){
            $("#HR_Master_Data").hide();
            $("#LI_Master_Data").hide();
        }
        if(konfigurasi_page[15]==0 && konfigurasi_page[16]==0 && konfigurasi_page[17]==0){
            $("#HR_Dashboard").hide();
            $("#LI_Dashboard").hide();
        }
        if(konfigurasi_page[14]==0 && konfigurasi_page[1]==0 && konfigurasi_page[2]==0){
            $("#HR_Job_Order").hide();
            $("#LI_Job_Order").hide();
        }
        if(konfigurasi_page[5]==0 && konfigurasi_page[10]==0 && konfigurasi_page[13]==0){
            $("#HR_Kasbon").hide();
            $("#LI_Kasbon").hide();
        }
        if(konfigurasi_page[3]==0 && konfigurasi_page[4]==0){
            $("#HR_Invoice").hide();
            $("#LI_Invoice").hide();
        }
        if(konfigurasi_page[6]==0 && konfigurasi_page[9]==0){
            $("#HR_Penggajian").hide();
            $("#LI_Penggajian").hide();
        }
        if(konfigurasi_page[11]==0){
            $("#HR_Konfigurasi").hide();
            $("#LI_Konfigurasi").hide();
        }
        for(i=0;i<konfigurasi_page.length;i++){
            if(konfigurasi_page[i]==0){
                $("#"+page[i]).hide();
            }
        }
    }
    function aktifasi(x){
        var collapse_group = ["Master_Data","Job_Order","Invoice","Penggajian","Kasbon","Laporan","Konfigurasi","Dashboard"];
        for(i=0;i<collapse_group.length;i++){
            if(x!=collapse_group[i]){
                $("#"+collapse_group[i]).removeClass("show");
            }
        }
    }
</script>
