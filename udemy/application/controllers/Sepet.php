<?php
defined('BASEPATH') OR exit('No Direct acces allowed');

class Sepet extends CI_Controller{

  function add(){
    $data = array(
      'id'      => $this->input->post('productid'),
      'name'    => $this->input->post('baslik'),
      'qty'     => $this->input->post('adet'),
      'price'   => $this->input->post('fiyat'),
      'mini1'   => $this->input->post('resim')
    );
    $this->cart->insert($data);
  }

  function update() {
    $qty = $this->input->post('qty');
    $rowid = $this->input->post('rowid');
    $data = array(
      'rowid'   =>$rowid,
      'qty'     =>$qty
    );

   $sonuc = $this->cart->update($data);
   if($sonuc) {

     $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <h4><i class="icon fa fa-check"></i> Güncelleme!</h4>
               Sepetinizdeki Eğitimi Güncellediniz
             </div>');

     redirect($_SERVER['HTTP_REFERER']);

   }else {

     $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <h4><i class="icon fa fa-ban"></i> Hata!</h4>
               Server Hatası!
               </div>');

     redirect($_SERVER['HTTP_REFERER']);

    }
  }
  function remove(){
    $rowid = $this->input->post('rowid');
    $data = array(
      'rowid' => $rowid,
      'qty'   =>0
    );
    $sonuc = $this->cart->update($data);
    if($sonuc) {

      $this->session->set_flashdata('durum', '<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Silme!</h4>
                Sepetinizdeki Eğitimi Sildiniz
              </div>');

      redirect($_SERVER['HTTP_REFERER']);

    }else {

      $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Server Hatası!
                </div>');

      redirect($_SERVER['HTTP_REFERER']);

     }
  }
  public function odeme(){

    $this->load->view('front/odeme/anasayfa');
  }

  public function satinalim(){

    $data = array(
      'bankaadi'  =>$bankaID = $this->input->post('bankaadi'),
      'kkno'  =>$bankaID = $this->input->post('kkno'),
      'skt'  =>$bankaID = $this->input->post('skt'),
      'ccv'  =>$bankaID = $this->input->post('ccv')

    );
    $sonuc = $this->dtbs->ekle('sepet',$data);
    if($sonuc) {

      $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Son Adım!</h4>
                Lütfen Ödemeyi Tamamlayın..
              </div>');

      redirect('anasayfa/odemeislemi');

    }else {

      $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Server Hatası!
                </div>');

      redirect($_SERVER['HTTP_REFERER']);

     }
  }



}
?>
