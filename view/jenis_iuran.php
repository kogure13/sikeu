<?php include 'model/model.jenisIuran.php'; ?>

<div class="content">
    <div class="main-header">
        <h2>Jenis Iuran Sekolah</h2>
        <em>Master Data Iuran Sekolah</em>
    </div>
    <div class="form-group">
        <button class="btn btn-sm btn-primary tambah" data-toggle="modal" data-target="#modalIuran" id="0">
            <i class="fa fa-plus"></i>
            Tambah data
        </button>
    </div>

    <div class="main-content" id="viewJenisIuran"></div>
</div>

<!-- Dialog modal's -->
<div class="modal fade" id="modalIuran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                <button type="submit" id="simpan-iuran" class="btn btn-sm btn-custom-primary"><i class="fa fa-check-circle"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Dialog modal's -->