<script type="text/javascript">
    $(document).ready(function (e) {
        var kd_id = 0;
        var main = "model/data.jenisIuran.php";

        $("#viewJenisIuran").load(main);
        $(".tambah").click(function () {
            var url = "model/form.jenisIuran.php";
            kd_id = this.id;

            if (kd_id != 0) {
                $("#myModalLabel").html("Ubah Data Iuran");
            } else {
                $("#myModalLabel").html("Tambah Data Iuran");
            }

            $.post(url, {id: kd_id}, function (data) {
                $(".modal-body").html(data).show();
            });
        });

        $("#simpan-iuran").click(function (event) {
//            var v_kode_iuran = $('#kode_iuran').val();
//            var v_nama_iuran = $('#nama_iuran').val();
//            var v_nominal_iuran = $('#nominal_iuran').val();
//            var v_keterangan = $('#keterangan').val();
//
//            if(v_kode_iuran == v_nama_iuran == v_nominal_iuran == ""){
//                
//            }
           
        });
    });
</script>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

