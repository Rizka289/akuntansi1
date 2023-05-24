<?php defined('BASEPATH') or exit('No direct script access allowed');
class Biaya extends CI_Controller{
    function pengajuan_get(){
        $get = $_GET;
        if(isset($get['dt']) && $get['dt'] == 0){
            $permission = $this->db->select('*')->get('pengajuan_biaya')->result();
            response(['data' => $permission]);
        }
        $this->load->library('Datatables');
        $q = $this->db->from('pengajuan_biaya');

        // if(isset())

        $header = array(
            'nomor' => array('searchable' => true, 'field' => 'application_number'),
            'date_created' => array('date_created' => true),
            'deadline' => array('searchable' => true),
            'nominal_diajukan' => array('searchable' => true),
            'nominal_cair' => array('searchable' => true),
            'approver1' => array('searchable' => false),
            'approver2' => array('searchable' => false),
            'keterangan' => array('searchable' => false),
        );

        $this->datatables->setHeader($header)
            ->setQuery($q);
        $data =  $this->datatables->getData('object');
        response($data);
    }

    function pengajuan_post(){
        $post = $this->input->post();
        $isEdit = isset($post['mode']) && $post['mode'] == 'edit';
        $input = fieldmapping('pengajuan-biaya', $post);
        $input['created_it'] = sessiondata('login', 'username');
        $input['deadline'] = waktu(strtotime($input['deadline']), MYSQL_DATE_FORMAT);

        try {
            if(!$isEdit){
                  $this->db->insert('pengajuan_biaya', $input);
                  response((object) $input);
            }else{
                  $this->db->where('application_number', $input['application_number'])->update('pengajuan_biaya', $input);
                  response("Berhasil Update Pengajuan Biaya #" . $input['application_number']);
            }
  
          } catch (\Throwable $th) {
             response("Terjadi kesalahan", 500);
          }
    }

    function nomorpengajuan_post(){
        $get = $_GET;
        $hariIni = waktu(null, MYSQL_DATE_FORMAT);
        $nomorLama = $this->db->select('application_number nomor')
            ->where('date_created', $hariIni)
            ->order_by('date_created', 'DESC')->get('pengajuan_biaya')->row();

        $nomor = 'APN' . str_replace('-', '', $hariIni);
        if(empty($nomorLama)){
            $nomor .= '001';
        }else{
            $nomorLama = $nomorLama->nomor;
            $urutanTerakhir = str_replace($nomor, '', $nomorLama);
            $nomor .= sprintf('%0002d', intval($urutanTerakhir) + 1);
        }
        response(['nomor_baru' => $nomor]);
        
    }
}