$(document).ready(function(){
    var form_data = <?= $form_data ?>;
    var edited_data = <?= $form_cache ?>;
    var formid = form_data.formid;
    var components = {
        // tgl_masuk: $("#tgl_masuk"),
        nama: $("#nama"),
        permission: $("#permission-wrapper"),
        add_permission: $("#add-permission"),
        name_perm: $("#perm_name"),
        perm_warning: $("#perm-warning"),
        perm_desc: $("#perm_desc"),
        // nik: $("#nik"),
        // nrp: $("#nrp"),
        // no_hp: $("#nope"),
        // jk: $("#jk"),
        // tempat_lahir: $("#tempat_lahir"),
        // tgl_lahir: $("#tgl_lahir"),
        // status_perkawinan: $("#sts"),
        // jml_anak: $("#jml_anak"),
        // pendidikan: $("#pendidikan"),
        // jabatan: $("#jabatan"),
        // agama: $("#agama"),
        // bank: $("#bank"),
        // norek: $("#norek"),
        // upah: $("#upah"),
    };

    _persiapan_data().then(data => {
        _add_event_listener(data);
        _persiapan_nilai(data);
    
    });
   



    async function _persiapan_data(){
        var data = {};

        data.renderCeckboxPermission = function(data) {
            components.permission.empty();
            var checkbox = "";
            data.forEach(p => {
                checkbox += '<div class="mb-1 col-6">' +
                    '<div class="custom-control custom-checkbox">' +
                    '<input type="checkbox" class="custom-control-input" name="permission[]" id="' + p.id + '" value="' + p.id + '">' +
                    '<label class="custom-control-label" for="' + p.id + '">' + p.nama + '</label>' +
                    '</div>' +
                    '</div>'
            });
    
            components.permission.append(checkbox);
        }

        data.cekPassword = function(password, cekPassword){

        }
        data.cekUsername = function(value, element){
            if(!value) {
                $('#err-username').hide();
                $('#' + formid).find('button[type="submit"]').prop('disabled', false);
                return;
            }
            $.post(path + 'ws/user/username', {username: value}).then(res => {
                var res = res;
                if(res.boleh){
                    $('#err-username').hide();
                    $('#' + formid).find('button[type="submit"]').prop('disabled', false);
                }else{
                    $('#err-username').show();
                    $('#' + formid).find('button[type="submit"]').prop('disabled', true);
                }
            });
        }

        data.permission = await fetch('ws/uihelper/permission?dt=0', { method: 'GET' }).then(res => res.json()).then(res => res.data).catch(err => { console.log(err); return [] });

        return data;
    }


    function _add_event_listener(data){
        $('#buat-akun').change(function(){
            var checked = $(this).is(':checked');
            data.buat_akun = checked;
            if(checked){
                $(".region-akun").show();
            }else{
                $(".region-akun").hide();
            }
            $("#username, #password, #re-password").attr('data-rule-required', checked);
        });
        $("#username").keyup(function(){
            var ini = $(this);
            var username = ini.val();
            data.cekUsername(username, ini);
        });
        components.add_permission.click(function (e) {
            e.preventDefault();
            var value = components.name_perm.val();
            if (!value) {
                components.perm_warning.text("Nama Permission Kosong").show();
            } else {
                components.perm_warning.text("").hide();
                fetch('ws/uihelper/permission', { method: 'POST', body: JSON.stringify({ nama: perm, desc: desc }) }).then(res => res.json()).then(res => {
                    data.permission.push({
                        id: res.id,
                        nama: res.nama
                    });
                    data.renderCeckboxPermission(data.permission)
                });
            }
        });
        // $("#password, #re-password").keyup(function(){
        //     var password = $('#password');
        //     var repassword = $('#re-password');
        //     var valid = data.cekPassword(password.val(), repassword.val());

        //     if(valid){
        //         repassword.after('<p class="text-danger">Password tidak valid <')
        //     }else{

        //     }
        // });
    }


    function _persiapan_nilai(data){

        if(data.permission)
            data.renderCeckboxPermission(data.permission);

        if(form_data.mode == 'edit' && edited_data){
            components.tgl_masuk.val(edited_data.tgl_masuk);
            components.nama.val(edited_data.nama);
            components.nik.val(edited_data.nik);
            components.nrp.val(edited_data.nrp);
            components.no_hp.val(edited_data.nope);
            $("#" + formid).append("<input type='hidden' name='id' value='" + edited_data.id + "'>");
            $("#" + formid).append("<input type='hidden' name='mode' value='edit'>");
        }
    }

});