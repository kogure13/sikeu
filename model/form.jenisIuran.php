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
        <label class="col-sm-3 control-label" for="kode_iuran"> Kode Iuran</label>
        <div class="col-sm-9">
            <input type="text" id="kode_iuran" for="kode_iuran" class="form-control" placeholder="Kode Iuran">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="nama_iuran"> Nama Iuran</label>
        <div class="col-sm-9">
            <input type="text" id="nama_iuran" for="nama_iuran" class="form-control" placeholder="Nama Iuran">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="nominal_iuran"> Nominal Iuran(Rp.)</label>
        <div class="col-sm-9">
            <input type="text" id="nominal_iuran" for="nominal_iuran" class="form-control" placeholder="Nominal Iuran(Rp.)">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="keterangan"> Keterangan</label>
        <div class="col-sm-9">
            <input type="text" id="keterangan" for="keterangan" class="form-control" placeholder="Keterangan">
        </div>
    </div>
</form>