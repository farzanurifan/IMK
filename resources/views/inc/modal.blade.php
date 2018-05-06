<!-- Modal Dialogs ====================================================================================================================== -->
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Impor barang dari file Excel</h4>
            </div>
            <div class="modal-body">
                Download Contoh <a href="#">format excel</a>
            </div>

            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                <div class="dz-message">
                    <div class="drag-icon-cph">
                        <i class="material-icons">touch_app</i>
                    </div>
                    <h3>Drop file disini atau klik untuk mengunggah file</h3>
                    <em>(File harus sesuai dengan format atau <strong>tidak</strong> akan terupload)</em>
                </div>
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">Unggah</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>