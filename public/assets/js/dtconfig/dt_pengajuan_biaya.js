var id = "<?= $id ?>";
var configTabel = [
    { 
        mData: null,
    },
    { 
        data: 'nomor'
    },
    {
        data: 'date_created',
    },
    {
        data: 'deadline'
    },
    {
        mRender: function(row, type, data){
            return 'Rp.' + data['nominal_diajukan'].rupiahFormat();
        }
    },
    {
        mRender: function(row, type, data){
            return !data['nominal_cair'] || data['nominal_cair'] == 0 ? 'Belum Cair' : 'Rp.' + data['nominal_cair'].rupiahFormat();
        }
    },
    {
        mRender: function(row, type, data){
            return !data['date_of_money_release'] || data['date_of_money_release'] == '0000-00-00' ? 'Belum Cair' : data['date_of_money_release'];
        }
    },
    {
        mRender: function(row, type, data){
            var text = '-';
            if(!data['aprover1'])
                text = 'Approver 1 sedang meninjau';
            else if(data['approver1'] == 1)
                text = 'Approver 1 Menyetujui';
            else if(data['approver1'] == 1)
                text = 'Approver 1 Tidak Menyetujui';

            if(!data['aprover1'])
                text += ' - Approver 2 sedang meninjau';
            else if(data['approver2'] == 1)
                text += ' - Approver 2 Menyetujui';
            else if(data['approver2'] == 1)
                text += ' - Approver 2 Tidak Menyetujui';

            return text;

        }
    },
    {
        data: 'keterangan'
    }
];

setConfigTabel(id, configTabel);