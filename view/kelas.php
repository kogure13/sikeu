<?php include 'model/model.kelas.php'; ?>

<div class="content">
    <div class="main-header">
        <h2>Data Kelas</h2>
        <em>Master Data Kelas</em>
    </div>
    <div class="form-group">
        <button class="btn btn-sm btn-primary tambah" data-toggle="modal" data-target="#modalKelas" id="0">
            <i class="fa fa-plus"></i>
            Tambah data
        </button>
    </div>

    <div class="main-content" id="viewKelas"></div>
</div>

<!-- Dialog modal's -->
<div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                <button type="submit" id="simpan-kelas" class="btn btn-sm btn-custom-primary"><i class="fa fa-check-circle"></i> Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Dialog modal's -->