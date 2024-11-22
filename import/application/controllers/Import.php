<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
//load Spout Library
require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';
 
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
 
class Import extends CI_Controller
{
 
    function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('app');
    }
 
    public function index()
    {
        //ketika button submit diklik
        if ($this->input->post('submit', TRUE) == 'upload') {
            $config['upload_path']      = './assets/'; //siapkan path untuk upload file
            $config['allowed_types']    = 'xlsx|xls'; //siapkan format file
            $config['file_name']        = 'doc' . time(); //rename file yang diupload
 
            $this->load->library('upload', $config);
 
            if ($this->upload->do_upload('excel')) {
                //fetch data upload
                $file   = $this->upload->data();
 
                $reader = ReaderEntityFactory::createXLSXReader(); //buat xlsx reader
                $reader->open('assets/' . $file['file_name']); //open file xlsx yang baru saja diunggah
 
                //looping pembacaat sheet dalam file        
                foreach ($reader->getSheetIterator() as $sheet) {
                    $numRow = 1;
 
                    //siapkan variabel array kosong untuk menampung variabel array data
                    $save   = array();
 
                    //looping pembacaan row dalam sheet
                    foreach ($sheet->getRowIterator() as $row) {
 
                        if ($numRow > 1) {
                            //ambil cell
                            $cells = $row->getCells();
 
                            $data = array(
                                "field1"=> $cells[3],
                                "field2"=> $cells[4],
                                "field3"=> $cells[5]
                            );
 
                            //tambahkan array $data ke $save
                            array_push($save, $data);
                        }
 
                        $numRow++;
                    }
                    //simpan data ke database
                    $this->app->simpan($save);
 
                    //tutup spout reader
                    $reader->close();
 
                    //hapus file yang sudah diupload
                    unlink('temp_doc/' . $file['file_name']);
 
                    //tampilkan pesan success dan redirect ulang ke index controller import
                    echo    '<script type="text/javascript">
                              alert(\'Import Data berhasil dilakukan\');
                              window.location.replace("' . base_url() . '");
                          </script>';
                }
            } else {
                echo "Error :" . $this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            }
        }

        $query = $this->db->query("SELECT DISTINCT field5, field3 FROM eimport");
        $query2 = $this->db->query("SELECT field3, field5 FROM eimport GROUP BY field3, field5");
 
        $data=array(
            "hasil"=>$this->db->get('eimport')->result(),
            "hasil2"=>$query->result(),
            "hasil3"=>$query2->result()
        );
        $this->load->view('import', $data);
    }
}