<script type="text/javascript">
    $(document).ready(function (e) {
        var kd_id = 0;
        var main = "model/data.kelas.php";

        $("#viewKelas").load(main);
        $(".tambah").click(function () {
            var url = "model/form.kelas.php";
            kd_id = this.id;

            if (kd_id != 0) {
                $("#myModalLabel").html("Ubah Data Kelas");
            } else {
                $("#myModalLabel").html("Tambah Data Kelas");
            }

            $.post(url, {id: kd_id}, function (data) {
                $(".modal-body").html(data).show();
            });
        });
        
    });
</script>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

