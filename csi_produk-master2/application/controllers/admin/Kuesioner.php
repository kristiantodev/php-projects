<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    if (!isAuthenticated()) {
        redirect(site_url('auth'));
    }
  }
  public function index()
  {

  }
  public function indikator_penilaian($method = '', $id = '')
  {
    provideAccessTo("2");
    if ($method === '') {
      $data['title'] = 'Assessment Indicators | Padi Kapas';
      $data['indikator'] = $this->Indikator->all();
      $this->main_lib->getTemplate('admin/kuesioner/indikator/index',$data);
    }else if ($method === 'add') {
      $data['title'] = 'Add Assessment Indicators | Padi Kapas';
      if (isset($_POST['submit'])) {
        $rules = $this->_rules();
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
        if ($this->form_validation->run() === FALSE) {
          $this->main_lib->getTemplate('admin/kuesioner/indikator/add',$data);
        }else{
          $indikator_data = [
            'indicator_type' => $this->main_lib->getPost('indicator_type'),
            'indikator_name' => $this->main_lib->getPost('indikator_name')
          ];
          $insert = $this->Indikator->insert($indikator_data);
          if($insert){
            $message = [
              'type' => 'success',
              'text' => 'Assessment Indicators Successfully Added!'
            ];
          }else{
            $message = [
              'type' => 'error',
              'text' => 'Failed to Add Assessment Indicators!'
            ];
          }
          $this->session->set_flashdata('message', $message);
          redirect(site_url('admin/kuesioner/indikator_penilaian'));
        }
      }else{
        $data['indikator_name'] = set_value('indikator_name');
        $data['indicator_type'] = $this->input->get('indicator_type');
        $this->main_lib->getTemplate('admin/kuesioner/indikator/add',$data);
      }
    }else if($method === 'edit'){
      $data['title'] = 'Add Assessment Indicators | Padi Kapas';
      $id = $this->uri->segment(5);
      if(isset($id)){
        if (isset($_POST['submit'])) {
          $rules = $this->_rules();
          $this->form_validation->set_rules($rules);
          $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
          if ($this->form_validation->run() === FALSE) {
            $this->main_lib->getTemplate('admin/kuesioner/indikator/add',$data);
          }else{
            $indikator_data = [
              'indikator_name' => $this->main_lib->getPost('indikator_name'),
            ];
            $update = $this->Indikator->update($indikator_data,['id_indikator'=>$id]);
            if($update){
              $message = [
                'type' => 'success',
                'text' => 'Assessment Indicator Successfully changed!'
              ];
            }else{
              $message = [
                'type' => 'error',
                'text' => 'Failed to Change the Assessment Indicator!'
              ];
            }
            $this->session->set_flashdata('message', $message);
            redirect(site_url('admin/kuesioner/indikator_penilaian'));
          }
        }else{
          $indikator = $this->Indikator->findById(['id_indikator'=>$id]);
          $data['indikator_name'] = $indikator->indikator_name;
          $data['indicator_type'] = $indikator->indicator_type;
          $this->main_lib->getTemplate('admin/kuesioner/indikator/add',$data);
        }
      }
    }else if($method === 'delete'){
      if(isset($id)){
        $this->Indikator->delete(['id_indikator' => $id]);
        redirect(site_url('admin/kuesioner/indikator_penilaian'), 'refresh');
      }
    }
  }
  public function indikator_pertanyaan($method='', $id = '')
  {
    provideAccessTo("2");
    if ($method === '') {
      $data['title'] = 'Question Indicators | Padi Kapas';
      $data['indikator'] = $this->Indikator->all();
      $this->main_lib->getTemplate('admin/kuesioner/pertanyaan/index', $data);
    }else{
      if ($method === 'add') {
        $data['title'] = 'Adding Question Indicator | Padi Kapas';
        if (isset($_POST['submit'])) {
          $rules = $this->_rules_question();
          $this->form_validation->set_rules($rules);
          $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
          if ($this->form_validation->run() === FALSE) {
            $this->main_lib->getTemplate('admin/kuesioner/pertanyaan/add',$data);
          }else{
            $question_data = [
              'id_indikator' => $this->main_lib->getPost('id_indikator'),
              'pertanyaan' => $this->main_lib->getPost('pertanyaan'),
            ];
            $insert = $this->Pertanyaan->insert($question_data);
            if($insert){
              $message = [
                'type' => 'success',
                'text' => 'Question Indicators Successfully Added!'
              ];
            }else{
              $message = [
                'type' => 'error',
                'text' => 'Failed to Add Question Indicators!'
              ];
            }
            $this->session->set_flashdata('message', $message);
            redirect(site_url('admin/kuesioner/indikator_pertanyaan'));
          }
        }else{
          $data['pertanyaan'] = set_value('pertanyaan');
          $data['id_indikator'] = $id;
          $data['indikator_name'] = $this->Indikator->findById(['id_indikator'=>$id])->indikator_name;
          $this->main_lib->getTemplate('admin/kuesioner/pertanyaan/add',$data);
        }
      }else if ($method === 'edit') {
        $data['title'] = 'Editing Question Indicator | Padi Kapas';
        $pertanyaan = $this->Pertanyaan->findById(['id_pertanyaan'=>$id]);
        $data['pertanyaan'] = $pertanyaan->pertanyaan;
        $data['id_indikator'] = $pertanyaan->id_indikator;
        $data['indikator_name'] = $this->Indikator->findById(['id_indikator'=>$pertanyaan->id_indikator])->indikator_name;

        if (isset($_POST['submit'])) {
          $rules = $this->_rules_question();
          $this->form_validation->set_rules($rules);
          $this->form_validation->set_error_delimiters("<small class='form-text text-danger'>", "</small>");
          if ($this->form_validation->run() === FALSE) {

            $this->main_lib->getTemplate('admin/kuesioner/pertanyaan/add',$data);
          }else{
            $question_data = [
              'pertanyaan' => $this->main_lib->getPost('pertanyaan'),
            ];
            $insert = $this->Pertanyaan->update($question_data,['id_pertanyaan'=>$id]);
            if($insert){
              $message = [
                'type' => 'success',
                'text' => 'Question Indicators Successfully Added!'
              ];
            }else{
              $message = [
                'type' => 'error',
                'text' => 'Failed to Add Question Indicators!'
              ];
            }
            $this->session->set_flashdata('message', $message);
            redirect(site_url('admin/kuesioner/indikator_pertanyaan'));
          }
        }else{
          $this->main_lib->getTemplate('admin/kuesioner/pertanyaan/add',$data);
        }
      }else if($method === 'delete'){
        if(isset($id)){
          $this->Pertanyaan->delete(['id_pertanyaan' => $id]);
          redirect(site_url('admin/kuesioner/indikator_pertanyaan'), 'refresh');
        }
      }
    }
  }
  public function _rules()
  {
    return [
      [
        'field' => 'indikator_name',
        'label' => 'Indicator Name',
        'rules' => 'required'
      ],
    ];
  }
  public function _rules_question()
  {
    return [
      [
        'field' => 'indikator_name',
        'label' => 'Indicator Name',
        'rules' => 'required'
      ],
    ];
  }
}

?>
