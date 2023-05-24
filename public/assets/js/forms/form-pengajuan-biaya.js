$(document).ready(function () {
    var form_data = <?= $form_data ?>;
    var edited_data = <?= $form_cache ?>;
    var formid = form_data.formid;
    var components = {
        nomor: $("#nomor-pengajuan"),
        _nomor: $("#nomor-pengajuan-text"),
        deadline: $("#deadline"),
        nominal: $("#nominal"),
        keterangan: $("#keterangan")
    };

    _persiapan_data().then(data => {
        _add_event_listener(data);
        _persiapan_nilai(data);

    });




    async function _persiapan_data() {
        var data = {};
        // load data permission
        if(form_data.mode != 'edit')
            data.nomorPengajuanBaru = await fetch(path + 'ws/biaya/nomorpengajuan', { method: 'POST' }).then(res => res.json()).then(res => res.nomor_baru).catch(err => { console.log(err); return [] });

        Inputmask.extendAliases({
            'numeric': {
                "prefix": "Rp.",
                "digits": 0,
                "digitsOptional": false,
                "decimalProtect": true,
                "groupSeparator": ",",
                "radixPoint": ".",
                "radixFocus": true,
                "autoGroup": true,
                "autoUnmask": true,
                "removeMaskOnSubmit": true
            }
        });

        Inputmask.extendAliases({
            'IDR': {
                alias: "numeric", //it inherits all the properties of numeric 
            }
        });
        return data;
    }


    function _add_event_listener(data) {

    }


    function _persiapan_nilai(data) {
        components.nominal.inputmask('IDR')
        if (form_data.mode == 'edit' && edited_data) {
            _renderEditedData(edited_data);
        }else{
            components.nomor.val(data.nomorPengajuanBaru);
            components._nomor.text(data.nomorPengajuanBaru);
        }
    }

    function _renderEditedData(data) {
        $("#" + formid).append("<input type='hidden' name='mode' value='edit'>");
        
        components.nomor.val(data.nomor);
        components._nomor.text(data.nomor);
        components.nominal.val(data.nominal_diajukan);
        components.deadline.datepicker('setDate', new Date(data.deadline));
        components.keterangan.val(data.keterangan);
    }
});