<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$kd_id = $_POST['id'];

if($kd_id == 0) {
    
}else{
    
}
?>

<form method="post" class="form-horizontal" role="form" novalidate="novalidate" id="vForm">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="kode_jurusan"> Kode Jurusan</label>
        <div class="col-sm-9">
            <input type="text" id="kode_jurusan" for="kode_jurusan" class="form-control" placeholder="Kode Jurusan">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="nama_jurusan"> Nama Jurusan</label>
        <div class="col-sm-9">
            <input type="text" id="nama_jurusan" for="nama_jurusan" class="form-control" placeholder="Nama Jurusan">
        </div>
    </div>    
    <div class="form-group">
        <label class="col-sm-3 control-label" for="keterangan"> Keterangan</label>
        <div class="col-sm-9">
            <input type="text" id="keterangan" for="keterangan" class="form-control" placeholder="Keterangan">
        </div>
    </div>
</form>