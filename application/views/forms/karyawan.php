<form id="form-dt-navigasi">
    <div id="alert_danger" style="display: none" class="alert alert-danger" role="alert"> </div>
    <div id="alert_success" style="display: none" class="alert alert-success" role="alert"> </div>
    <div class="form-group">
        <label class="control-label" for="tgl_masuk">Tanggal Masuk Karyawan</label>
        <input name="tgl_masuk" type="date" id="tgl_masuk" value="" class="form-control " placeholder="Masukkan Tanggal Masuk Karyawan">
    </div>
    <div class="form-group">
        <label class="control-label" for="nama">Nama Karyawan <span class="symbol-required"></span></label>
        <input name="nama" type="text" id="nama" value="" class="form-control " data-rule-required="true" placeholder="Masukkan Karyawan">
    </div>
    <div class="form-group"><label class="control-label" for="nik">NIK <span class="symbol-required"></span></label>
        <input name="nik" type="nummber" id="nik" value="" class="form-control " data-rule-required="true" placeholder="Masukkan NIK">
    </div>
    <div class="form-group"><label class="control-label" for="nrp">NRP</label>
        <input name="nrp" type="text" id="nrp" value="" class="form-control " placeholder="Masukkan NRP">
    </div>
    <div class="form-group"><label class="control-label" for="nope">No Handphone</label>
        <input name="nope" type="text" id="nope" value="" class="form-control " placeholder="Masukkan No. Handphone">
    </div>
    <div class="form-group ">
        <label class="control-label " for="jk">Jenis Kelamin</label>
        <select name="jk" id="jk" required="" class="form-control ">
            <option value="1"> Laki-Laki</option>
            <option value="2"> Perempuan</option>
        </select>
    </div>
    <div class="form-group"><label class="control-label" for="tempat_lahir">Tempat Lahir</label>
        <input name="tempat_lahir" type="text" id="tempat_lahir" value="" class="form-control " placeholder="Masukkan Tempat Lahir">
    </div>
    <div class="form-group"><label class="control-label" for="tgl_lahir">Tanggal Lahir</label>
        <input name="tgl_lahir" type="date" id="tgl_lahir" value="" class="form-control " placeholder="Masukkan Tanggal Lahir">
    </div>
    <div class="form-group ">
        <label class="control-label " for="sts">Status Perkawinan</label>
        <select name="sts" id="sts" required="" class="form-control ">
            <option value="1"> Belum Kawin</option>
            <option value="2"> Kawin</option>
            <option value="3"> Cerai hidup</option>
            <option value="4"> Cerai Mati</option>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label" for="jml_anak">Jumlah Anak</label>
        <input name="jml_anak" type="number" id="jml_anak" value="" class="form-control " placeholder="Masukkan Jumlah Anak">
    </div>
    <div class="form-group ">
        <label class="control-label " for="pendidikan">Pendidikan</label>
        <select name="pendidikan" id="pendidikan" required="" class="form-control ">
            <option value="1"> SD/MI</option>
            <option value="2"> SMP/MTS</option>
            <option value="3"> SMA/SMK/MA</option>
            <option value="4"> D1</option>
            <option value="5"> D2</option>
            <option value="6"> D3</option>
            <option value="7"> D4</option>
            <option value="8"> S1</option>
            <option value="9"> S2</option>
        </select>
    </div>
    <div class="form-group ">
        <label class="control-label " for="jabatan">Jabatan</label>
        <select name="jabatan" id="jabatan" required="" class="form-control ">
            <option value="1"> Manager</option>
            <option value="2"> Checker</option>
            <option value="3"> Driver</option>
            <option value="4"> PM</option>
        </select>
    </div>
    <div class="form-group ">
        <label class="control-label " for="agama">Agama</label>
        <select name="agama" id="agama" required="" class="form-control ">
            <option value="1"> Islam</option>
            <option value="2"> Katolik</option>
            <option value="3"> Kristen</option>
            <option value="4"> Hindu</option>
            <option value="5"> Budha</option>
            <option value="6"> Konghucu</option>
        </select>
    </div>
    <div class="form-group"><label class="control-label " for="bank">Bank</label>
        <select name="bank" id="bank" class="form-control ">
            <option value="1"> BNI</option>
            <option value="2"> BCA</option>
            <option value="3"> BRI</option>
            <option value="4"> MANDIRI</option>
            <option value="5"> CIMB NIAGA</option>
            <option value="6"> PERMATA</option>
        </select>
    </div>
    <div class="form-group"><label class="control-label" for="norek">Nomor Rekening</label>
        <input name="norek" type="number" id="norek" value="" class="form-control " placeholder="Masukkan Nomor Rekening">
    </div>
    <div class="form-group"><label class="control-label" for="upah">Upah Pokok</label>
        <input name="upah" type="text" id="upah" value="" class="form-control " placeholder="Masukkan Upah Pokok">
    </div>

    <div class="separator mt-4 mb-5">
    </div>
    <?php if (true) : ?>
        <div class="bagian-user mb-5">
            <div class="row" style="gap: 15px; align-items: center;">
                <div class="custom-switch custom-switch-primary mb-2">
                    <input class="custom-switch-input" id="buat-akun" type="checkbox">
                    <label class="custom-switch-btn" for="buat-akun"></label>
                </div>
                <label for="buat-akun" style="display: inline-block;">Buatkan akun</label>
            </div>
            <div class="col-sm-12 region-akun" style="display: none;">
                <div class="form-group">
                    <label for="">Username <span class="symbol-required"></span></label>
                    <input data-rule-required="false" type="text" name="username" class="form-control" id="username">
                    <p style="display: none;" class="text-danger mt-3" id="err-username">Username tidak dapat digunakan karena sudah terdaftar</p>
                </div>
                <!-- <div class="form-group">
                        <label for="">Password <span class="symbol-required"></span></label>
                        <input data-rule-required="false" type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="">Ulangi Password <span class="symbol-required"></span></label>
                        <input data-rule-required="false" type="password" name="repassword" class="form-control" id="re-password">
                    </div> -->
                <div class="form-group">
                    <label for="">Email</label>
                    <input data-rule-required="false" type="email" name="email" class="form-control" id="email">
                </div>
                <div class="col-sm-12">
                    <h5>Hak akses</h5>
                    <div style="row-gap: 5px" class="row mb-3" id="permission-wrapper">

                    </div>
                    <div class='separator mb-2'>Permission Baru</div>
                    <div id='add-permission-wrapper' class='row mb-4'>
                        <div class='col-12'>
                            <div class='form-group'>
                                <label> Nama Permission yang baru </label>
                                <input class='form-control' id='perm_name' type='text' name='perm_name'>
                                <p class='text-danger' id='perm-warning'></p>
                            </div>
                            <div class='form-group'>
                                <label> Deskripsi Permission yang baru </label>
                                <input class='form-control' id='perm_desc' type='text' name='desc_perm'>
                            </div>
                        </div>
                        <div class='col-12' style='text-align:center;'>
                            <button type='button' style='background-color: lightgray' class='btn btn-xs' id='add-permission'>Tambah Permission </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
</form>