configTabel["<?= $id ?>"] = [
    { 
        mData: null,
    },
    { 
        data: 'nrp'
    },
    { 
        data: 'nik' 
    },
    { 
        data: 'nama' 
    },
    { 
        mRender: function (row, type, data){
            return data.jabatan == 1 ? 'Manager' : data.jabatan == 2 ? 'Checker' : data.jabatan == 3 ? 'Driver' : 'PM' ;
        }
    },
    {
        mRender: function(row, type, data){
            return !data['username'] ? 'Tidak memiliki akun' : '<a href="' + path + 'user/' + data['username'] + '">' + data['username'] + '</a>';
        }
    }
];