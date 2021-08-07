

<body style='background-color:#182039';> 
<?php
    function change_tanggal($data){
        if($data==""){
            return "";
        }else{
            $data_tanggal = explode('-', $data);
            $tanggal = $data_tanggal[2].'-'.$data_tanggal[1].'-'.$data_tanggal[0];
            return $tanggal;
        }
    }
    $array_keterangan = explode("===",$jo["keterangan"]);
?>
<div class="container-fluid mt-5 p-5" style='background-color:#182039';>
        <!-- Basic Card Example -->
        <div class="card shadow mx-5 " style='background-color:#212B4E';>
            <div class="card-header " style='background-color:#212B4E';>
                <h6 class="mt-2 font-weight-bold text-light float-left ">Detail Job Order</h6>
                <div class="float-right ml-3">
                    <a class='btn btn-primary btn-sm ' onclick="print_pdf()">
                        <span>Print/PDF</span>
                    </a>
                </div>
                <div class="float-right">
                    <form method="POST" action="<?= base_url("index.php/print_berkas/jo_excel/")?>" id="convert_form">
                        <input type="hidden" name="file_content" id="file_content">
                        <button type="submit" name="convert" id="convert" class="btn btn-success btn-sm">
                            <span class="text">Excel</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="card-body text-light" style='background-color:#212B4E';>
                <!-- tampilan detail jo -->
                <div class="container" id="detail-jo">
                    <table class="table table-bordered text-light" id="Table-JO">
                        <tbody>     
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">ID JO</td>
                                <td colspan=3><?= $jo["Jo_id"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Tanggal JO</td>
                                <td colspan=3><?= change_tanggal($jo["tanggal_surat"]) ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Supir</td>                
                                    <?php if($jo["status"]=="Dalam Perjalanan"){?>
                                        <td colspan=3>
                                            <div class="row ">
                                                <p class="col"><?= $supir["supir_name"] ?></p>
                                                <!-- <a class='btn btn-primary btn-sm col-md-4' data-toggle="modal" data-target="#supir_update">
                                                    <span>Ganti Supir</span>
                                                </a> -->
                                            </div>                                    
                                        </td>
                                    <?php }else{?>
                                        <td colspan=3><?= $supir["supir_name"] ?></td>
                                    <?php }?>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Kendaraan</td>
                                    <?php if($jo["status"]=="Dalam Perjalanan"){?>
                                        <td colspan=3>
                                            <div class="row ">
                                                <p class="col"><?= $mobil["mobil_no"]." == ".$mobil["mobil_jenis"] ?></p>
                                                <!-- <a class='btn btn-primary btn-sm col-md-4' data-toggle="modal" data-target="#mobil_update">
                                                    <span>Ganti mobil</span>
                                                </a> -->
                                            </div>                                    
                                        </td>
                                    <?php }else{?>
                                        <td colspan=3><?= $mobil["mobil_no"]." == ".$mobil["mobil_jenis"] ?></td>
                                    <?php }?>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Customer</td>
                                <td colspan=3><?= $customer["customer_name"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Muatan</td>
                                <td colspan=3><?= $jo["muatan"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Dari</td>
                                <td colspan=3><?= $jo["asal"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Ke</td>
                                <td colspan=3><?= $jo["tujuan"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold " style="width: 25%;">Uang Jalan</td>
                                <td colspan=3><p>Rp.<?= number_format($jo["uang_jalan"],0,',','.') ?></p></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold " style="width: 25%;">Tambahan/Potongan Uang Jalan</td>
                                    <td colspan=3><p>Rp.<?= number_format($jo["nominal_tambahan"],0,',','.') ?> (<?= $jo["jenis_tambahan"]?>)</p></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold " style="width: 25%;">Total Uang Jalan</td>
                                <td colspan=3><p>Rp.<?= number_format($jo["uang_total"],0,',','.')?></p></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold " style="width: 25%;">Sisa Uang Jalan</td>
                                <td colspan=3>Rp.<?=number_format($jo["sisa"],0,',','.')?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 20%;">Keterangan</td>
                                <td colspan=3><?= $array_keterangan[0]?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Status</td>
                                <td colspan=3><?= $jo["status"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Tanggal Muat</td>
                                <td colspan=3><?= change_tanggal($jo["tanggal_muat"]) ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Tanggal Bongkar</td>
                                <td colspan=3><?= change_tanggal($jo["tanggal_bongkar"]) ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Berat Muatan</td>
                                <td colspan=3><?= $jo["tonase"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Biaya Lain-lain</td>
                                <td colspan=3>Rp.<?= number_format($jo["biaya_lain"],0,',','.')?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 20%;">Keterangan Ubah Status</td>
                                <?php if(count($array_keterangan)==1){
                                    echo "<td colspan=3></td>";
                                }else{
                                    echo "<td colspan=3><?= $array_keterangan[1]?></td>";
                                }?>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">No Slip Gaji</td>
                                <td colspan=3><?= $slip_gaji[0]["pembayaran_upah_id"] ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Tanggal Slip Gaji</td>
                                <td colspan=3><?= change_tanggal($slip_gaji[0]["pembayaran_upah_tanggal"]) ?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Nominal Gaji</td>
                                <td colspan=3>Rp.<?= number_format($jo["upah"],0,',','.')?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">No Invoice</td>
                                <td colspan=3><?= $invoice[0]["invoice_id"]?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Tanggal Invoice</td>
                                <td colspan=3><?= change_tanggal($invoice[0]["tanggal_invoice"])?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Nominal Invoice</td>
                                <td colspan=3>Rp.<?= number_format($jo["total_tagihan"],0,',','.')?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Pembuat JO</td>
                                <td colspan=3><?= $jo["user"]?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Penutup JO</td>
                                <td colspan=3><?= $jo["user_closing"]?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Pembuat Slip Gaji</td>
                                <td colspan=3><?= $slip_gaji[0]["user_upah"]?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold" style="width: 25%;">Pembuat Invoice</td>
                                <td colspan=3><?= $invoice[0]["user_invoice"]?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end tampilan detail jo -->
            </div>
        </div>
</div>

</body>


<script src="<?=base_url("assets/vendor/jquery/jquery.min.js")?>"></script>

<script>
    function uang(a){
        $( '#'+a.id ).mask('000.000.000', {reverse: true});
        var sisa = '<?= $jo['uang_total']-$jo['uang_jalan_bayar']?>';
        var uang_bayar = $("#uang_jalan_bayar").val().split(".");
        var uang_bayar_fix = "";
        for(i=0;i<uang_bayar.length;i++){
            uang_bayar_fix += uang_bayar[i];
        }
        if(parseInt(sisa)<parseInt(uang_bayar_fix)){
            alert('Jumlah Pembayaran UJ Harus Lebih Kecil Dari Rp.'+ rupiah(sisa));
            $( '#uang_jalan_bayar' ).val("");
        }
    }
    function sisa_uj(sisa){
        $("#sisa_uj").text(rupiah(sisa));
    }
</script>
<script type="text/javascript">
 $(document).ready(function() {
  $('#convert').click(function() {
   var table_content = '<table>';
   table_content += $("head").html()+$('#Table-JO').html();
   table_content += '</table>';
   $('#file_content').val(table_content);
   $('#convert_form').html();
  });
 });
 function print_pdf(){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById('detail-jo').innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
</script>