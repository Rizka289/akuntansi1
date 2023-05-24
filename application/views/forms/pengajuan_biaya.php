<form id="form-pengajuan-biaya" action="" class="form">
    <div class="col-sm-12">
        <input type="hidden" name="nomor_pengajuan" id="nomor-pengajuan" readonly class="form-control">
        <div class="form-group">
            <label class="text-muted" for="">Nomor Pengajuan: <span class=""><b id="nomor-pengajuan-text"></b></span></label>
        </div>
        <div class="form-group">
            <label for="">Tanggal jatuh tempo</label>
            <input data-datepicker-format="yyyy-mm-dd" type="text" name="deadline" data-rule-required="true" id="deadline" class="form-control datepicker">
        </div>
        <div class="form-group">
            <label for="">Nominal yang diajukan</label>
            <input type="text" name="nominal" data-rule-required="true" data-rule-digits="true" id="nominal" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control"></textarea>
        </div>
    </div>
</form>