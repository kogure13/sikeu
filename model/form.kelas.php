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
        <label class="col-sm-3 control-label" for="kode_kelas"> Kode Kelas</label>
        <div class="col-sm-9">
            <input type="text" id="kode_kelas" for="kode_kelas" class="form-control" placeholder="Kode Kelas">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="nama_kelas"> Nama Kelas</label>
        <div class="col-sm-9">
            <input type="text" id="nama_kelas" for="nama_kelas" class="form-control" placeholder="Nama Kelas">
        </div>
    </div>    
    <div class="form-group">
        <label class="col-sm-3 control-label" for="nama_jurusan"> Nama Jurusan</label>
        <div class="col-sm-9">
            <select name="nama_jurusan" id="nama_jurusan">
                
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="tahun_ajaran"> Tahun Ajaran</label>
        <div class="col-sm-9">
            <select name="tahun_ajaran" id="tahun_ajaran">
                
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="tingkat"> Tingkat</label>
        <div class="col-sm-9">
            <select name="tingkat" id="tingkat">
                
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="keterangan"> Keterangan</label>
        <div class="col-sm-9">
            <input type="text" id="keterangan" for="keterangan" class="form-control" placeholder="Keterangan">
        </div>
    </div>
</form>