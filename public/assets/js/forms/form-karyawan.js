$(document).ready(function(){
    var form_data = <?= $form_data ?>;
    var edited_data = <?= $form_cache ?>;
    var formid = form_data.formid;
    var components = {
        // tgl_masuk: $("#tgl_masuk"),
        nama: $("#nama"),
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
        return data;
    }


    function _add_event_listener(data){

    }


    function _persiapan_nilai(data){
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