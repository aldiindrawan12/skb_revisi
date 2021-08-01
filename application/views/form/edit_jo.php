<?php
function change_tanggal($tanggal){
    if($tanggal==""){
        return "";
    }else{
        $tanggal_array = explode("-",$tanggal);
        return $tanggal_array[2]."-".$tanggal_array[1]."-".$tanggal_array[0];   
    }
}
?>
<!-- tampilan detail penggajian supir -->
<div class="mt-5 p-1 small">
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3 mb-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Job Order</h6>
        </div>
        <div class="container m-auto" id="rincian">
            
        </div>
    </div>
</div>
</div>
<!-- end tampilan detail penggajian supir -->
   
  
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; 2021 PT.Sumber Karya Berkah</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-5 py-5" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Keluar <i class="fa fa-lock"></i></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times</span>
                    </button>
                </div>

                <div class="modal-body"><i class="fa fa-question-circle"></i> Anda yakin ingin keluar?</div>
                <div class="modal-footer">
                    <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-danger" href="<?= base_url("index.php/login/logout")?>">Keluar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url("assets/vendor/jquery/jquery.min.js")?>"></script>
    <script src="<?=base_url("assets/vendor/jquery/jquery.mask.min.js")?>"></script>
    <script src="<?=base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>"></script>    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url("assets/vendor/jquery-easing/jquery.easing.min.js")?>"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url("assets/js/sb-admin-2.min.js")?>"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url("assets/vendor/datatables/jquery.dataTables.min.js")?>"></script>
    <script src="<?=base_url("assets/vendor/datatables/dataTables.bootstrap4.min.js")?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url('assets/datepicker/js/bootstrap-datepicker.js')?>"></script>
    <script>
        var data_slip_now = [];
        var data_slip_new = [];
        data_slip_now = new Object();
        data_slip_now.tanggal="<?= change_tanggal($slip[0]["pembayaran_upah_tanggal"])?>";
        data_slip_now.total="<?= number_format($slip[0]["pembayaran_upah_nominal"],0,",",".")?>";
        data_slip_now.bon="<?= number_format($slip[0]["pembayaran_upah_bon"],0,",",".")?>";
        data_slip_now.bonus="<?= number_format($slip[0]["pembayaran_upah_bonus"],0,",",".")?>";
        data_slip_now.grand="<?= number_format($slip[0]["pembayaran_upah_total"],0,",",".")?>";
        data_slip_now.keterangan="<?= $slip[0]["keterangan"]?>";
        $( "#form-pilih-jo" ).submit(function( event ) {
            data_slip_new = new Object();
            data_slip_new.tanggal=$("#tanggal_gaji").val();
            data_slip_new.total=$("#gaji_total").val();
            data_slip_new.bon=$("#kasbon").val();
            data_slip_new.bonus=$("#bonus").val();
            data_slip_new.grand=$("#gaji_grand_total").val();
            data_slip_new.keterangan=$("#Keterangan").val();
            if(JSON.stringify(data_slip_now) == JSON.stringify(data_slip_new)){
                alert( "Anda Belum Mengubah Data" );
                return false;
            }else{
                return true;
            }
        });
        function rupiah(uang){
            var bilangan = uang;
            var	number_string = bilangan.toString(),
                sisa 	= number_string.length % 3,
                rupiah 	= number_string.substr(0, sisa),
                ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                    
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            return rupiah;
        }
        function tanggal_berlaku(a){
            // alert(a.id);
            Swal.fire({
                title: "Loading",
                icon: "success",
                text: "Mohon Tunggu Sebentar",
                type: "success",
                timer: 500
            });
            $("#"+a.id).datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true,
            });
        }
    </script>