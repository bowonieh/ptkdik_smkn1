<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
         function __construct() {
             parent::__construct();
             $this->load->model('mservice');
             
         }
         
	function index()
	{
		//$this->load->view('welcome_message');
                $this->db->join('ref.bentuk_pendidikan','ref.bentuk_pendidikan.bentuk_pendidikan_id = sekolah.bentuk_pendidikan_id','left');
                $this->db->join('ref.mst_wilayah','ref.mst_wilayah.kode_wilayah = sekolah.kode_wilayah','left');
                //$this->db->join('ref.mst_wilayah','ref.mst_wilayah.mst_kode_wilayah = ref.mst_wilayah.mst_kode_wilayah','left');
                $data   = $this->mservice->ambildata(
                        array(  'sekolah.sekolah_id',
                                'sekolah.nama',
                                'sekolah.nss',
                                'sekolah.npsn',
                                'bentuk_pendidikan.nama as jenjang_pendidikan',
                                'sekolah.alamat_jalan','sekolah.rt','sekolah.rw',
                                'sekolah.desa_kelurahan','sekolah.lintang','sekolah.bujur'
                            
                            )
                        ,'sekolah');
                        
                foreach ($data as $a){
                    echo json_encode($a);
                }
	}
        
        function detail(){
            
        }
        
        function siswa(){
            $this->db->order_by('peserta_didik.nama','ASC');
            $this->db->join('peserta_didik','registrasi_peserta_didik.peserta_didik_id = peserta_didik.peserta_didik_id','left');
            $this->db->where('registrasi_peserta_didik.jenis_keluar_id is null ');
            //$this->db->join();
            $data   = $this->mservice->ambildata(
                    array('peserta_didik.peserta_didik_id','peserta_didik.nisn','peserta_didik.nama',
                        'registrasi_peserta_didik.nipd','peserta_didik.tempat_lahir','peserta_didik.tanggal_lahir',
                        'peserta_didik.jenis_kelamin'
                        
                
                        ),
                            'registrasi_peserta_didik');
                        
                foreach ($data as $a){
                    echo json_encode($a);
                }
        }
        
        function ptk(){
            $data   = $this->mservice->ambildata(
                    '','ptk');
                        
                foreach ($data as $a){
                    echo json_encode($a);
                }
        }
}
