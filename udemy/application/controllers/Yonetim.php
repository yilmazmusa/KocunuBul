<?php

defined('BASEPATH') OR exit('dosya bulunmada');

class Yonetim extends CI_Controller {

  function guvenlik() {

    $giris = $this->session->userdata('giris');

    if(!$giris) {

      redirect('yonetim');

    }

  }

  function index() {

    $giris = $this->session->userdata('giris');

    if($giris) {

        redirect('yonetim/anasayfa');

    }

    $this->load->view('back/giris');

  }
  public function girisyap() {

      $email = $this->input->post('email');
      $sifre = $this->input->post('sifre');

      $kontrol = $this->dtbs->kontrol($email, $sifre);

      if($kontrol) {

          $this->session->set_userdata('giris', true);
          $this->session->set_userdata('info',$kontrol);
          $data = array('son_giris'=>date('d-m-Y H:i:s'));
          $this->dtbs->timeupdate($kontrol->id,$data);
           redirect('yonetim/anasayfa');
      } else {
        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Email Adresi Veya Şifre Hatalı!
                </div>');

        redirect('yonetim');

      }

  }

  public function anasayfa() {

    $this->guvenlik();

    $this->load->view('back/anasayfa');

  }

  public function cikis() {

    $this->session->unset_userdata('giris');
    redirect('yonetim');

  }

  public function silmeislemi() {

      $session = $this->session->userdata('delete');

      if($session) {

        $this->session->unset_userdata('delete');

        redirect($_SERVER['HTTP_REFERER']);

      } else {

        $this->session->set_userdata('delete', true);

        redirect($_SERVER['HTTP_REFERER']);

      }

  }

  // Yönetici Giriş bitti
  // Site Ayarları Başlangıç
  public function genelayarlar()
  {
    $sonuc = $this->dtbs->listele('site_ayar');
    $data['bilgi'] = $sonuc;
    $this->load->view('back/ayarlar/anasayfa',$data);
  }

  public function gayaredit($id)
  {
    $sonuc = $this->dtbs->cek($id,'site_ayar');
    $data['bilgi'] = $sonuc;
    $this->load->view('back/ayarlar/edit/anasayfa',$data);
  }

  public function gayarguncelle() {

    $data = array(

      'id' => $id = $this->input->post('id'),

      'site_title' => $title = $this->input->post('title'),

      'site_tlf' => $tlf = $this->input->post('tlf'),

      'site_desc' => $desc = $this->input->post('desc'),

      'site_keyw' => $keyw = $this->input->post('keyw'),

      'site_bilgi' => $bilgi = $this->input->post('bilgi'),

      'site_adres' => $adres = $this->input->post('adres')

    );

    $sonuc =$this->dtbs->guncelle($data, $id, 'id', 'site_ayar');

    if($sonuc) {

      $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                Veriyi Güncellediniz
              </div>');

      redirect('yonetim/genelayarlar');

    } else {

      $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Hata!
              </div>');

      redirect('yonetim/genelayarlar');

    }

  }

  public function banka(){
    $sonuc = $this->dtbs->listele('banka');
    $data['bilgi'] = $sonuc;
    $this->load->view('back/banka/anasayfa',$data);
  }

  public function bankaekle() {

    $this->load->view('back/banka/ekle/anasayfa');

  }

  public function bankaekleme() {

    $config['upload_path'] = FCPATH.'assets/front/image/banka';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);


    if($this->upload->do_upload('resim')) {

        $resim = $this->upload->data();
        $resimyolu = $resim['file_name'];
        $resimkayit = 'assets/front/image/banka/' . $resimyolu . '';
        $resimkayit = 'assets/front/image/banka/' . $resimyolu . '';
        $resimtmb = 'assets/front/image/banka/tmb/' . $resimyolu . '';
        $resimmini = 'assets/front/image/banka/mini/' . $resimyolu . '';
        $config['image_liblary']  = 'gd2';
        $config['source_image']   = 'assets/front/image/banka/' .$resimyolu. '';
        $config['new_image']      = 'assets/front/image/banka/tmb/' . $resimyolu. '';
        $config['create_thumb']   = false;
        $config['maintain_ratio'] = false;
        $config['quality']        = '60%';
        $config['width']        = '310';
        $config['height']        = '165';

        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();


        $config1['image_liblary']  = 'gd2';
        $config1['source_image']   = 'assets/front/image/banka/' .$resimyolu. '';
        $config1['new_image']      = 'assets/front/image/banka/mini/' . $resimyolu. '';
        $config1['create_thumb']   = false;
        $config1['maintain_ratio'] = false;
        $config1['quality']        = '60%';
        $config1['width']          = '110';
        $config1['height']         = '75';

        $this->load->library('image_lib', $config1);
        $this->image_lib->initialize($config1);
        $this->image_lib->resize();
        $this->image_lib->clear();


        $data = array(
          'title'   =>  $title = $this->input->post('title'),

          'sube'  => $sube = $this->input->post('sube'),
          'iban'  => $iban = $this->input->post('iban'),
          'hesapno'  => $hesapno = $this->input->post('hesapno'),
          'durum'  => 1,
          'resim' => $resimkayit,
          'tmb'   => $resimtmb,
          'mini' => $resimmini
        );

        $sonuc = $this->dtbs->ekle('banka',$data);
        if($sonuc) {

          $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                    Veriyi Eklediniz!
                  </div>');

          redirect('yonetim/banka');

        } else {

          $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                    Ekleme İşlemi Yapılamadı!
                  </div>');

          redirect('yonetim/banka');

        }



    }else {
      $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Resim Ekleme İşlemi Yapılamadı!
              </div>');

      redirect('yonetim/banka');

    }

  }

  public function bankaset() {

      $id = $this->input->post('id');
      $durum = ($this->input->post('durum') == "true") ? 1 : 0;
      $this->db->where('id', $id)->update('banka', array('durum' => $durum));

  }


  public function bankaduzenle($id ) {
    $sonuc=$this->dtbs->cek($id,'banka');
    $data['bilgi'] = $sonuc;
    $this->load->view('back/banka/edit/anasayfa',$data);




  }

  public function bankaguncelle(){
    if (strlen($_FILES['resim']['name']) >0) {
      $config['upload_path'] = FCPATH.'assets/front/image/banka';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['encrypt_name'] = TRUE;
      $this->load->library('upload', $config);


      if($this->upload->do_upload('resim')) {

          $resim = $this->upload->data();
          $resimyolu = $resim['file_name'];
          $resimkayit = 'assets/front/image/banka/' . $resimyolu . '';
          $resimkayit = 'assets/front/image/banka/' . $resimyolu . '';
          $resimtmb = 'assets/front/image/banka/tmb/' . $resimyolu . '';
          $resimmini = 'assets/front/image/banka/mini/' . $resimyolu . '';
          $config['image_liblary']  = 'gd2';
          $config['source_image']   = 'assets/front/image/banka/' .$resimyolu. '';
          $config['new_image']      = 'assets/front/image/banka/tmb/' . $resimyolu. '';
          $config['create_thumb']   = false;
          $config['maintain_ratio'] = false;
          $config['quality']        = '60%';
          $config['width']        = '310';
          $config['height']        = '165';

          $this->load->library('image_lib', $config);
          $this->image_lib->initialize($config);
          $this->image_lib->resize();
          $this->image_lib->clear();


          $config1['image_liblary']  = 'gd2';
          $config1['source_image']   = 'assets/front/image/banka/' .$resimyolu. '';
          $config1['new_image']      = 'assets/front/image/banka/mini/' . $resimyolu. '';
          $config1['create_thumb']   = false;
          $config1['maintain_ratio'] = false;
          $config1['quality']        = '60%';
          $config1['width']          = '110';
          $config1['height']         = '75';

          $this->load->library('image_lib', $config1);
          $this->image_lib->initialize($config1);
          $this->image_lib->resize();
          $this->image_lib->clear();

          $data = array(
            'id'   => $id = $this->input->post('id'),
            'durum'   => $durum = $this->input->post('durum'),
            'title'   => $title = $this->input->post('title'),
            'resim'   => $resimkayit,
            'tmb'   => $resimtmb,
            'mini'   =>$resimmini

          );
          $yol = bankaresmi($id);
          $yol2 = bankatmb($id);
          $yol3 = bankamini($id);
          unlink($yol);
          unlink($yol2);
          unlink($yol3);
          $sonuc = $this->dtbs->guncelle($data,$id, 'id','banka');

          if ($sonuc) {
            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Güncellediniz.
                    </div>');

            redirect('yonetim/banka');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Güncelleme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/banka');

          }

          }

    }else {
      $data = array(
        'id'   => $id = $this->input->post('id'),
        'durum'   => $durum = $this->input->post('durum'),
        'title'   => $title = $this->input->post('title'),



      );
      $sonuc = $this->dtbs->guncelle($data,$id, 'id','banka');

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Güncellediniz.
                </div>');

        redirect('yonetim/banka');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Güncelleme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/banka');

      }

    }

  }

  // banka işlemleri bitiş

  // gizlilik sözleşmesi başlangıç

  public function gsozlesme() {

      $sonuc = $this->dtbs->listele('gizlilik');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/gizlilik/anasayfa', $data);

  }

  public function gizlilikedit($id) {

    $sonuc = $this->dtbs->cek($id, 'gizlilik');

    $data['bilgi'] = $sonuc;

    $this->load->view('back/gizlilik/edit/anasayfa', $data);

  }

  public function gizlilikguncelle() {

      $data = array(

        'id' => $id = $this->input->post('id'),

        'title' => $title = $this->input->post('title'),

        'sef' => seflink($title),

        'aciklama' => $aciklama = $this->input->post('aciklama')

      );

      $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'gizlilik');

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Güncellediniz.
                </div>');

        redirect('yonetim/gsozlesme');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Güncelleme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/gsozlesme');

      }


    }

    public function ssozlesme() {

      $sonuc = $this->dtbs->listele('satis');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/satis/anasayfa', $data);

    }

    public function satisedit($id) {

      $sonuc = $this->dtbs->cek($id, 'satis');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/satis/edit/anasayfa', $data);

    }

    public function satisguncelle() {

        $data = array(

          'id' => $id = $this->input->post('id'),

          'title' => $title = $this->input->post('title'),

          'sef' => seflink($title),

          'aciklama' => $aciklama = $this->input->post('aciklama')

        );

        $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'satis');

        if ($sonuc) {
          $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                    Veriyi Güncellediniz.
                  </div>');

          redirect('yonetim/ssozlesme');

        } else {

          $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                    Güncelleme İşlemi Yapılamadı!
                  </div>');

          redirect('yonetim/ssozlesme');

        }

    }


    // satış sözleşmesi bitis

    // SSS İşlemleri Başlangıç

    public function sss() {

      $sonuc = $this->dtbs->listele('sss');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/sss/anasayfa', $data);

    }


    public function sssekle() {

        $this->load->view('back/sss/ekle/anasayfa');

    }


    public function sssekleme() {

        $data = array(

          'title' => $title = $this->input->post('title'),

          'sef' => seflink($title),

          'aciklama' => $aciklama = $this->input->post('aciklama'),

          'durum' => 1

        );

        $sonuc = $this->dtbs->ekle('sss', $data);

        if ($sonuc) {
          $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                    Veriyi Eklediniz.
                  </div>');

          redirect('yonetim/sss');

        } else {

          $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                    Ekleme İşlemi Yapılamadı!
                  </div>');

          redirect('yonetim/sss');

        }

    }


    public function sssedit($id) {

        $sonuc = $this->dtbs->cek($id, 'sss');

        $data['bilgi'] = $sonuc;

        $this->load->view('back/sss/edit/anasayfa', $data);

    }


    public function sssguncelle() {

        $data = array(

          'id' => $id = $this->input->post('id'),

          'durum' => $durum = $this->input->post('durum'),

          'title' => $title = $this->input->post('title'),

          'sef' => seflink($title),

          'aciklama' => $aciklama = $this->input->post('aciklama')

        );

        $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'sss');

        if ($sonuc) {
          $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                    Veriyi Güncellediniz.
                  </div>');

          redirect('yonetim/sss');

        } else {

          $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                    Güncelleme İşlemi Yapılamadı!
                  </div>');

          redirect('yonetim/sss');

        }

    }


    public function ssssil($id, $where, $from) {

      $run = $this->session->userdata('delete');

      if($run) {

          $sonuc = $this->dtbs->sil($id, $where, $from);

          if ($sonuc) {
            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Sildiniz.
                    </div>');

            redirect('yonetim/sss');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Silme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/sss');

          }

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
                </div>');

          redirect('yonetim/sss');
      }

    }


    public function sssset() {

      $id = $this->input->post('id');

      $durum = ($this->input->post('durum') == 'true') ? 1 : 0;

      $this->db->where('id', $id)->update('sss', array('durum' => $durum));

    }


    public function iade() {

      $sonuc = $this->dtbs->listele('garanti');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/garanti/anasayfa', $data);

    }


    public function iadeedit($id) {

      $sonuc = $this->dtbs->cek($id, 'garanti');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/garanti/edit/anasayfa', $data);

    }

    public function iadeguncelle() {

      $data = array(

        'id' => $id = $this->input->post('id'),

        'title' => $title = $this->input->post('title'),

        'sef' => seflink($title),

        'aciklama' => $aciklama = $this->input->post('aciklama')

      );

      $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'garanti');
      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Güncellediniz.
                </div>');

        redirect('yonetim/iade');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Güncelleme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/iade');

      }
    }

    // garanti ve iade bitiş

    public function smedya() {

      $sonuc = $this->dtbs->listele('sosyalmedya');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/smedya/anasayfa', $data);

    }


    public function smedyaekle() {

      $this->load->view('back/smedya/ekle/anasayfa');

    }

    public function smedyaekleme(){

      $data = array(
        'title' => $title = $this->input->post('title'),

        'sef' => seflink($title),

        'url' => $url = $this->input->post('url'),

        'durum' => 1


      );

      $sonuc = $this->dtbs->ekle('sosyalmedya', $data);

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Eklediniz.
                </div>');

        redirect('yonetim/smedya');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Ekleme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/smedya');

      }
    }

    public function smedyaedit($id) {

      $sonuc = $this->dtbs->cek($id, 'sosyalmedya');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/smedya/edit/anasayfa', $data);

    }

    public function smedyaguncelle() {

      $data = array(

        'id' => $id = $this->input->post('id'),

        'durum' => $durum = $this->input->post('durum'),

        'title' => $title = $this->input->post('title'),

        'sef' => seflink($title),

        'url' => $url = $this->input->post('url')

      );

      $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'sosyalmedya');

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Güncellediniz.
                </div>');

        redirect('yonetim/smedya');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Güncelleme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/smedya');

      }

    }


    public function smedyasil($id, $where, $from) {

      $run = $this->session->userdata('delete');

      if($run) {

          $sonuc = $this->dtbs->sil($id, $where, $from);

          if ($sonuc) {
            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Sildiniz.
                    </div>');

            redirect('yonetim/smedya');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Silme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/smedya');

          }

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
                </div>');

          redirect('yonetim/smedya');
      }
    }


    public function smedyaset() {

      $id = $this->input->post('id');

      $durum = ($this->input->post('durum') == "true") ? 1 : 0;

      $this->db->where('id', $id)->update('sosyalmedya', array('durum' => $durum));

    }


    public function bankasil($id, $where, $from) {

      $run = $this->session->userdata('delete');

      if($run) {

          $sonuc = $this->dtbs->sil($id, $where, $from);

          if ($sonuc) {
            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Sildiniz.
                    </div>');

            redirect('yonetim/banka');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Silme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/banka');

          }

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
                </div>');

          redirect('yonetim/banka');
      }

    }


    // Silme işlemi son

    public function urunler() {

        $sonuc = $this->dtbs->listele('urunler');

        $data['bilgi'] = $sonuc;

        $this->load->view('back/urunler/anasayfa', $data);



    }

    public function urunekle() {

      $this->load->view('back/urunler/ekle/anasayfa');

    }

    public function urunekleme() {

      $config['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config['allowed_types'] = 'gif|jpg|jpeg|png';

      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      $this->upload->do_upload('resim1');

      $resim1 = $this->upload->data();

      $resimyolu = $resim1['file_name'];

      $resimkayit = 'assets/front/image/urunler/'. $resimyolu .'';

      $resimtmb = 'assets/front/image/urunler/tmb1/' . $resimyolu . '';

      $resimmini = 'assets/front/image/urunler/mini1/'. $resimyolu . '';

      $config['image_liblary'] = 'gd2';

      $config['source_image'] = 'assets/front/image/urunler/' . $resimyolu . '';

      $config['new_image'] = 'assets/front/image/urunler/tmb1/' . $resimyolu . '';

      $config['create_thumb'] = false;

      $config['maintain_ratio'] = false;

      $config['quality'] = '60%';

      $config['width'] = '420';

      $config['height'] = '213';

      $this->load->library('image_lib', $config);

      $this->image_lib->initialize($config);

      $this->image_lib->resize();

      $this->image_lib->clear();

      $config1['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config1['allowed_types'] = 'gif|jpg|jpeg|png';

      $config1['encrypt_name'] = true;

      $config1['image_liblary'] = 'gd2';

      $config1['source_image'] = 'assets/front/image/urunler/' . $resimyolu . '';

      $config1['new_image'] = 'assets/front/image/urunler/mini1/' . $resimyolu . '';

      $config1['create_thumb'] = false;

      $config1['maintain_ratio'] = false;

      $config1['quality'] = '60%';

      $config1['width'] = '76';

      $config1['height'] = '55';

      $this->load->library('image_lib', $config1);

      $this->image_lib->initialize($config1);

      $this->image_lib->resize();

      $this->image_lib->clear();

      // Resim 1 İşlemleri Bitti


      $config2['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config2['allowed_types'] = 'gif|jpg|jpeg|png';

      $config2['encrypt_name'] = true;

      $this->load->library('upload', $config2);

      $this->upload->do_upload('resim2');

      $resim2 = $this->upload->data();

      $resimyolu2 = $resim2['file_name'];

      $resimkayit2 = 'assets/front/image/urunler/'. $resimyolu2 .'';

      $resimtmb2 = 'assets/front/image/urunler/tmb2/' . $resimyolu2 . '';

      $resimmini2 = 'assets/front/image/urunler/mini2/'. $resimyolu2 . '';

      $config2['image_liblary'] = 'gd2';

      $config2['source_image'] = 'assets/front/image/urunler/' . $resimyolu2 . '';

      $config2['new_image'] = 'assets/front/image/urunler/tmb2/' . $resimyolu2 . '';

      $config2['create_thumb'] = false;

      $config2['maintain_ratio'] = false;

      $config2['quality'] = '60%';

      $config2['width'] = '420';

      $config2['height'] = '213';

      $this->load->library('image_lib', $config2);

      $this->image_lib->initialize($config2);

      $this->image_lib->resize();

      $this->image_lib->clear();


      $config3['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config3['allowed_types'] = 'gif|jpg|jpeg|png';

      $config3['encrypt_name'] = true;

      $config3['image_liblary'] = 'gd2';

      $config3['source_image'] = 'assets/front/image/urunler/' . $resimyolu2 . '';

      $config3['new_image'] = 'assets/front/image/urunler/mini2/' . $resimyolu2 . '';

      $config3['create_thumb'] = false;

      $config3['maintain_ratio'] = false;

      $config3['quality'] = '60%';

      $config3['width'] = '76';

      $config3['height'] = '55';

      $this->load->library('image_lib', $config3);

      $this->image_lib->initialize($config3);

      $this->image_lib->resize();

      $this->image_lib->clear();

      // Resim 2 İşlemleri Bitiş


      $config4['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config4['allowed_types'] = 'gif|jpg|jpeg|png';

      $config4['encrypt_name'] = true;

      $this->load->library('upload', $config4);

      $this->upload->do_upload('resim3');

      $resim3 = $this->upload->data();

      $resimyolu3 = $resim3['file_name'];

      $resimkayit3 = 'assets/front/image/urunler/'. $resimyolu3 .'';

      $resimtmb3 = 'assets/front/image/urunler/tmb3/' . $resimyolu3 . '';

      $resimmini3 = 'assets/front/image/urunler/mini3/'. $resimyolu3 . '';

      $config4['image_liblary'] = 'gd2';

      $config4['source_image'] = 'assets/front/image/urunler/' . $resimyolu3 . '';

      $config4['new_image'] = 'assets/front/image/urunler/tmb3/' . $resimyolu3 . '';

      $config4['create_thumb'] = false;

      $config4['maintain_ratio'] = false;

      $config4['quality'] = '60%';

      $config4['width'] = '420';

      $config4['height'] = '213';

      $this->load->library('image_lib', $config4);

      $this->image_lib->initialize($config4);

      $this->image_lib->resize();

      $this->image_lib->clear();


      $config5['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config5['allowed_types'] = 'gif|jpg|jpeg|png';

      $config5['encrypt_name'] = true;

      $config5['image_liblary'] = 'gd2';

      $config5['source_image'] = 'assets/front/image/urunler/' . $resimyolu3 . '';

      $config5['new_image'] = 'assets/front/image/urunler/mini3/' . $resimyolu3 . '';

      $config5['create_thumb'] = false;

      $config5['maintain_ratio'] = false;

      $config5['quality'] = '60%';

      $config5['width'] = '76';

      $config5['height'] = '55';

      $this->load->library('image_lib', $config5);

      $this->image_lib->initialize($config5);

      $this->image_lib->resize();

      $this->image_lib->clear();

      // resim 3 bitiş


      $config6['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config6['allowed_types'] = 'gif|jpg|jpeg|png';

      $config6['encrypt_name'] = true;

      $this->load->library('upload', $config6);

      $this->upload->do_upload('resim4');

      $resim4 = $this->upload->data();

      $resimyolu4 = $resim4['file_name'];

      $resimkayit4 = 'assets/front/image/urunler/'. $resimyolu4 .'';

      $resimtmb4 = 'assets/front/image/urunler/tmb4/' . $resimyolu4 . '';

      $resimmini4 = 'assets/front/image/urunler/mini4/'. $resimyolu4 . '';

      $config6['image_liblary'] = 'gd2';

      $config6['source_image'] = 'assets/front/image/urunler/' . $resimyolu4 . '';

      $config6['new_image'] = 'assets/front/image/urunler/tmb4/' . $resimyolu4 . '';

      $config6['create_thumb'] = false;

      $config6['maintain_ratio'] = false;

      $config6['quality'] = '60%';

      $config6['width'] = '420';

      $config6['height'] = '213';

      $this->load->library('image_lib', $config6);

      $this->image_lib->initialize($config6);

      $this->image_lib->resize();

      $this->image_lib->clear();


      $config7['upload_path'] = FCPATH.'assets/front/image/urunler/';

      $config7['allowed_types'] = 'gif|jpg|jpeg|png';

      $config7['encrypt_name'] = true;

      $config7['image_liblary'] = 'gd2';

      $config7['source_image'] = 'assets/front/image/urunler/' . $resimyolu4 . '';

      $config7['new_image'] = 'assets/front/image/urunler/mini4/' . $resimyolu4 . '';

      $config7['create_thumb'] = false;

      $config7['maintain_ratio'] = false;

      $config7['quality'] = '60%';

      $config7['width'] = '76';

      $config7['height'] = '55';

      $this->load->library('image_lib', $config7);

      $this->image_lib->initialize($config7);

      $this->image_lib->resize();

      $this->image_lib->clear();

      $data = array(

        'title'     => $title = $this->input->post('title'),

        'sef'       => seflink($title),

        'katID'     => $katID = $this->input->post('katID'),

        'fiyat'     => $fiyat = $this->input->post('fiyat'),

        'tarih'     => $tarih = $this->input->post('tarih'),

        'durum'     => $durum = 1,

        'bilgi'     => $bilgi = $this->input->post('bilgi'),

        'aciklama'  => $aciklama = $this->input->post('aciklama'),

        'resim1'    => $resimkayit,

        'tmb1'      => $resimtmb,

        'mini1'     => $resimmini,


        'resim2'    => $resimkayit2,

        'tmb2'      => $resimtmb2,

        'mini2'     => $resimmini2,


        'resim3'    => $resimkayit3,

        'tmb3'      => $resimtmb3,

        'mini3'     => $resimmini3,


        'resim4'    => $resimkayit4,

        'tmb4'      => $resimtmb4,

        'mini4'     => $resimmini4

      );

      $sonuc = $this->dtbs->ekle('urunler', $data);

      if($sonuc) {

        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Eklediniz!
                </div>');

        redirect('yonetim/urunler');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Ekleme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/urunler');

      }

    }



    public function urunedit($id) {

      $sonuc = $this->dtbs->cek($id, 'urunler');

      $data['bilgi'] = $sonuc;

      $this->load->view('back/urunler/edit/anasayfa', $data);

    }

    public function urunguncelle() {

        if(strlen($_FILES['resim1']['name']) > 0) {

          $config['upload_path'] = FCPATH.'assets/front/image/urunler/';

          $config['allowed_types'] = 'gif|jpg|jpeg|png';

          $config['encrypt_name'] = true;

          $this->load->library('upload', $config);

          $this->upload->do_upload('resim1');

          $resim1 = $this->upload->data();

          $resimyolu = $resim1['file_name'];

          $resimkayit = 'assets/front/image/urunler/'. $resimyolu .'';

          $resimtmb = 'assets/front/image/urunler/tmb1/' . $resimyolu . '';

          $resimmini = 'assets/front/image/urunler/mini1/'. $resimyolu . '';

          $config['image_liblary'] = 'gd2';

          $config['source_image'] = 'assets/front/image/urunler/' . $resimyolu . '';

          $config['new_image'] = 'assets/front/image/urunler/tmb1/' . $resimyolu . '';

          $config['create_thumb'] = false;

          $config['maintain_ratio'] = false;

          $config['quality'] = '60%';

          $config['width'] = '420';

          $config['height'] = '213';

          $this->load->library('image_lib', $config);

          $this->image_lib->initialize($config);

          $this->image_lib->resize();

          $this->image_lib->clear();

          $config1['upload_path'] = FCPATH.'assets/front/image/urunler/';

          $config1['allowed_types'] = 'gif|jpg|jpeg|png';

          $config1['encrypt_name'] = true;

          $config1['image_liblary'] = 'gd2';

          $config1['source_image'] = 'assets/front/image/urunler/' . $resimyolu . '';

          $config1['new_image'] = 'assets/front/image/urunler/mini1/' . $resimyolu . '';

          $config1['create_thumb'] = false;

          $config1['maintain_ratio'] = false;

          $config1['quality'] = '60%';

          $config1['width'] = '76';

          $config1['height'] = '55';

          $this->load->library('image_lib', $config1);

          $this->image_lib->initialize($config1);

          $this->image_lib->resize();

          $this->image_lib->clear();


          $data = array(

            'id'        => $id = $this->input->post('id'),

            'durum'     => $durum = $this->input->post('durum'),

            'title'     => $title = $this->input->post('title'),

            'sef'       => seflink($title),

            'katID'     => $katID = $this->input->post('katID'),

            'fiyat'     => $fiyat = $this->input->post('fiyat'),

            'tarih'     => $tarih = $this->input->post('tarih'),

            'durum'     => $durum = 1,

            'bilgi'     => $bilgi = $this->input->post('bilgi'),

            'aciklama'  => $aciklama = $this->input->post('aciklama'),

            'resim1'    => $resimkayit,

            'tmb1'      => $resimtmb,

            'mini1'     => $resimmini

          );

          $yol = urunresmi1($id);

          $yol2 = uruntmb1($id);

          $yol3 = urunmini1($id);

          unlink($yol);

          unlink($yol2);

          unlink($yol3);

          $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'urunler');

          if($sonuc) {

            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Güncellediniz!
                    </div>');

            redirect('yonetim/urunler');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Güncelleme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/urunler');

          }


        } else if(strlen($_FILES['resim2']['name']) > 0){

          $config2['upload_path'] = FCPATH.'assets/front/image/urunler/';

          $config2['allowed_types'] = 'gif|jpg|jpeg|png';

          $config2['encrypt_name'] = true;

          $this->load->library('upload', $config2);

          $this->upload->do_upload('resim2');

          $resim2 = $this->upload->data();

          $resimyolu2 = $resim2['file_name'];

          $resimkayit2 = 'assets/front/image/urunler/'. $resimyolu2 .'';

          $resimtmb2 = 'assets/front/image/urunler/tmb2/' . $resimyolu2 . '';

          $resimmini2 = 'assets/front/image/urunler/mini2/'. $resimyolu2 . '';

          $config2['image_liblary'] = 'gd2';

          $config2['source_image'] = 'assets/front/image/urunler/' . $resimyolu2 . '';

          $config2['new_image'] = 'assets/front/image/urunler/tmb2/' . $resimyolu2 . '';

          $config2['create_thumb'] = false;

          $config2['maintain_ratio'] = false;

          $config2['quality'] = '60%';

          $config2['width'] = '420';

          $config2['height'] = '213';

          $this->load->library('image_lib', $config2);

          $this->image_lib->initialize($config2);

          $this->image_lib->resize();

          $this->image_lib->clear();


          $config3['upload_path'] = FCPATH.'assets/front/image/urunler/';

          $config3['allowed_types'] = 'gif|jpg|jpeg|png';

          $config3['encrypt_name'] = true;

          $config3['image_liblary'] = 'gd2';

          $config3['source_image'] = 'assets/front/image/urunler/' . $resimyolu2 . '';

          $config3['new_image'] = 'assets/front/image/urunler/mini2/' . $resimyolu2 . '';

          $config3['create_thumb'] = false;

          $config3['maintain_ratio'] = false;

          $config3['quality'] = '60%';

          $config3['width'] = '76';

          $config3['height'] = '55';

          $this->load->library('image_lib', $config3);

          $this->image_lib->initialize($config3);

          $this->image_lib->resize();

          $this->image_lib->clear();


          $data = array(

            'id'        => $id = $this->input->post('id'),

            'durum'     => $durum = $this->input->post('durum'),

            'title'     => $title = $this->input->post('title'),

            'sef'       => seflink($title),

            'katID'     => $katID = $this->input->post('katID'),

            'fiyat'     => $fiyat = $this->input->post('fiyat'),

            'tarih'     => $tarih = $this->input->post('tarih'),

            'durum'     => $durum = 1,

            'bilgi'     => $bilgi = $this->input->post('bilgi'),

            'aciklama'  => $aciklama = $this->input->post('aciklama'),

            'resim2'    => $resimkayit2,

            'tmb2'      => $resimtmb2,

            'mini2'     => $resimmini2

          );

          $yol4 = urunresmi2($id);

          $yol5 = uruntmb2($id);

          $yol6 = urunmini2($id);

          unlink($yol4);

          unlink($yol5);

          unlink($yol6);

          $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'urunler');

          if($sonuc) {

            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Güncellediniz!
                    </div>');

            redirect('yonetim/urunler');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Güncelleme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/urunler');

          }


        } else if(strlen($_FILES['resim3']['name']) > 0) {

          $config4['upload_path'] = FCPATH.'assets/front/image/urunler/';

          $config4['allowed_types'] = 'gif|jpg|jpeg|png';

          $config4['encrypt_name'] = true;

          $this->load->library('upload', $config4);

          $this->upload->do_upload('resim3');

          $resim3 = $this->upload->data();

          $resimyolu3 = $resim3['file_name'];

          $resimkayit3 = 'assets/front/image/urunler/'. $resimyolu3 .'';

          $resimtmb3 = 'assets/front/image/urunler/tmb3/' . $resimyolu3 . '';

          $resimmini3 = 'assets/front/image/urunler/mini3/'. $resimyolu3 . '';

          $config4['image_liblary'] = 'gd2';

          $config4['source_image'] = 'assets/front/image/urunler/' . $resimyolu3 . '';

          $config4['new_image'] = 'assets/front/image/urunler/tmb3/' . $resimyolu3 . '';

          $config4['create_thumb'] = false;

          $config4['maintain_ratio'] = false;

          $config4['quality'] = '60%';

          $config4['width'] = '420';

          $config4['height'] = '213';

          $this->load->library('image_lib', $config4);

          $this->image_lib->initialize($config4);

          $this->image_lib->resize();

          $this->image_lib->clear();


          $config5['upload_path'] = FCPATH.'assets/front/image/urunler/';

          $config5['allowed_types'] = 'gif|jpg|jpeg|png';

          $config5['encrypt_name'] = true;

          $config5['image_liblary'] = 'gd2';

          $config5['source_image'] = 'assets/front/image/urunler/' . $resimyolu3 . '';

          $config5['new_image'] = 'assets/front/image/urunler/mini3/' . $resimyolu3 . '';

          $config5['create_thumb'] = false;

          $config5['maintain_ratio'] = false;

          $config5['quality'] = '60%';

          $config5['width'] = '76';

          $config5['height'] = '55';

          $this->load->library('image_lib', $config5);

          $this->image_lib->initialize($config5);

          $this->image_lib->resize();

          $this->image_lib->clear();


          $data = array(

            'id'        => $id = $this->input->post('id'),

            'durum'     => $durum = $this->input->post('durum'),

            'title'     => $title = $this->input->post('title'),

            'sef'       => seflink($title),

            'katID'     => $katID = $this->input->post('katID'),

            'fiyat'     => $fiyat = $this->input->post('fiyat'),

            'tarih'     => $tarih = $this->input->post('tarih'),

            'durum'     => $durum = 1,

            'bilgi'     => $bilgi = $this->input->post('bilgi'),

            'aciklama'  => $aciklama = $this->input->post('aciklama'),

            'resim3'    => $resimkayit3,

            'tmb3'      => $resimtmb3,

            'mini3'     => $resimmini3

          );

          $yol7 = urunresmi3($id);

          $yol8 = uruntmb3($id);

          $yol9 = urunmini3($id);

          unlink($yol7);

          unlink($yol8);

          unlink($yol9);

          $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'urunler');

          if($sonuc) {

            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Güncellediniz!
                    </div>');

            redirect('yonetim/urunler');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Güncelleme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/urunler');

          }



        } else if(strlen($_FILES['resim4']['name']) > 0) {


              $config6['upload_path'] = FCPATH.'assets/front/image/urunler/';

              $config6['allowed_types'] = 'gif|jpg|jpeg|png';

              $config6['encrypt_name'] = true;

              $this->load->library('upload', $config6);

              $this->upload->do_upload('resim4');

              $resim4 = $this->upload->data();

              $resimyolu4 = $resim4['file_name'];

              $resimkayit4 = 'assets/front/image/urunler/'. $resimyolu4 .'';

              $resimtmb4 = 'assets/front/image/urunler/tmb4/' . $resimyolu4 . '';

              $resimmini4 = 'assets/front/image/urunler/mini4/'. $resimyolu4 . '';

              $config6['image_liblary'] = 'gd2';

              $config6['source_image'] = 'assets/front/image/urunler/' . $resimyolu4 . '';

              $config6['new_image'] = 'assets/front/image/urunler/tmb4/' . $resimyolu4 . '';

              $config6['create_thumb'] = false;

              $config6['maintain_ratio'] = false;

              $config6['quality'] = '60%';

              $config6['width'] = '420';

              $config6['height'] = '213';

              $this->load->library('image_lib', $config6);

              $this->image_lib->initialize($config6);

              $this->image_lib->resize();

              $this->image_lib->clear();


              $config7['upload_path'] = FCPATH.'assets/front/image/urunler/';

              $config7['allowed_types'] = 'gif|jpg|jpeg|png';

              $config7['encrypt_name'] = true;

              $config7['image_liblary'] = 'gd2';

              $config7['source_image'] = 'assets/front/image/urunler/' . $resimyolu4 . '';

              $config7['new_image'] = 'assets/front/image/urunler/mini4/' . $resimyolu4 . '';

              $config7['create_thumb'] = false;

              $config7['maintain_ratio'] = false;

              $config7['quality'] = '60%';

              $config7['width'] = '76';

              $config7['height'] = '55';

              $this->load->library('image_lib', $config7);

              $this->image_lib->initialize($config7);

              $this->image_lib->resize();

              $this->image_lib->clear();


              $data = array(

                'id'        => $id = $this->input->post('id'),

                'durum'     => $durum = $this->input->post('durum'),

                'title'     => $title = $this->input->post('title'),

                'sef'       => seflink($title),

                'katID'     => $katID = $this->input->post('katID'),

                'fiyat'     => $fiyat = $this->input->post('fiyat'),

                'tarih'     => $tarih = $this->input->post('tarih'),

                'durum'     => $durum = 1,

                'bilgi'     => $bilgi = $this->input->post('bilgi'),

                'aciklama'  => $aciklama = $this->input->post('aciklama'),

                'resim4'    => $resimkayit4,

                'tmb4'      => $resimtmb4,

                'mini4'     => $resimmini4

              );

              $yola = urunresmi4($id);

              $yolb = uruntmb4($id);

              $yolc = urunmini4($id);

              unlink($yola);

              unlink($yolb);

              unlink($yolc);

              $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'urunler');

              if($sonuc) {

                $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                          Veriyi Güncellediniz!
                        </div>');

                redirect('yonetim/urunler');

              } else {

                $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                          Güncelleme İşlemi Yapılamadı!
                        </div>');

                redirect('yonetim/urunler');

              }


        } else {

          $data = array(

            'id'        => $id = $this->input->post('id'),

            'durum'     => $durum = $this->input->post('durum'),

            'title'     => $title = $this->input->post('title'),

            'sef'       => seflink($title),

            'katID'     => $katID = $this->input->post('katID'),

            'fiyat'     => $fiyat = $this->input->post('fiyat'),

            'tarih'     => $tarih = $this->input->post('tarih'),

            'durum'     => $durum = 1,

            'bilgi'     => $bilgi = $this->input->post('bilgi'),

            'aciklama'  => $aciklama = $this->input->post('aciklama')

          );


          $sonuc = $this->dtbs->guncelle($data, $id, 'id', 'urunler');

          if($sonuc) {

            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Güncellediniz!
                    </div>');

            redirect('yonetim/urunler');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Güncelleme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/urunler');

          }

        }

    }


    public function urunset() {

      $id = $this->input->post('id');

      $durum = ($this->input->post('durum') == "true") ? 1 : 0;

      $this->db->where('id', $id)->update('urunler', array('durum' => $durum));

    }

    public function urunsil($id, $where, $from) {

        $run = $this->session->userdata('delete');

        if($run) {

          $yol = urunresmi1($id);

          $yol2 = uruntmb1($id);

          $yol3 = urunmini1($id);

          $yol4 = urunresmi2($id);

          $yol5 = uruntmb2($id);

          $yol6 = urunmini2($id);

          $yol7 = urunresmi3($id);

          $yol8 = uruntmb3($id);

          $yol9 = urunmini3($id);

          $yola = urunresmi4($id);

          $yolb = uruntmb4($id);

          $yolc = urunmini4($id);

          unlink($yol);

          unlink($yol2);

          unlink($yol3);


          unlink($yol4);

          unlink($yol5);

          unlink($yol6);


          unlink($yol7);

          unlink($yol8);

          unlink($yol9);



          unlink($yola);

          unlink($yolb);

          unlink($yolc);

          $sonuc = $this->dtbs->sil($id, $where, $from);

          if ($sonuc) {
            $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                      Veriyi Sildiniz.
                    </div>');

            redirect('yonetim/urunler');

          } else {

            $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                      Silme İşlemi Yapılamadı!
                    </div>');

            redirect('yonetim/urunler');

          }

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
                </div>');

          redirect('yonetim/urunler');
      }

    }

 // Ürün İşlemleri Bitiş
 // Mesaj İşlemleri Başlangıç

 public function mesajlar()
 {
  $sonuc = $this->dtbs->listele('mesajlar');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/mesajlar/anasayfa',$data);
 }

public function mesajedit($id)
{
 $sonuc = $this->dtbs->cek($id,'mesajlar');
 if($sonuc) {
  $data['bilgi'] = $sonuc;
  $this->load->view('back/mesajlar/edit/anasayfa', $data);
  $data = array('durum' =>1);
  $this->dtbs->mesajupdate($sonuc['id'],$data);
  }
}

public function mesajsil($id,$where,$from)
{
  $run = $this->session->userdata('delete');
  if($run) {

      $sonuc = $this->dtbs->sil($id, $where, $from);

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Sildiniz.
                </div>');

        redirect('yonetim/mesajlar');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/mesajlar');

      }

  } else {

    $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Hata!</h4>
              Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
            </div>');

      redirect('yonetim/mesajlar');
  }

}

//mesaj İşlemlerş Bİtiş
//Üye işlemleri Başlaagıç

public function uyeler(){
  $sonuc=$this->dtbs->listele('uyeler');
  $data['bilgi']=$sonuc;
  $this->load->view('back/uyeler/anasayfa', $data);
}
public function uyeedit($id){
  $sonuc= $this->dtbs->cek($id,'uyeler');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/uyeler/edit/anasayfa',$data);
}

//üye işlemleri Bitiş
//yorum iişlemleri Başlangıç

public function koclar(){
  $sonuc=$this->dtbs->listele('koclar');
  $data['bilgi']=$sonuc;
  $this->load->view('back/koclar/anasayfa', $data);
}
public function kocedit($id){
  $sonuc= $this->dtbs->cek($id,'koclar');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/koclar/edit/anasayfa',$data);

}


public function kocset() {

  $id = $this->input->post('id');

  $durum = ($this->input->post('durum') == "true") ? 1 : 0;

  $this->db->where('id', $id)->update('koclar', array('durum' => $durum));

}


public function kocsil($id,$where,$from){
  $run = $this->session->userdata('delete');

  if($run) {

      $sonuc = $this->dtbs->sil($id, $where, $from);

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Sildiniz.
                </div>');

        redirect('yonetim/koclar');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/koclar');

      }

  } else {

    $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Hata!</h4>
              Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
            </div>');

      redirect('yonetim/koclar');
  }

}




public function yorumlar(){
  $sonuc = $this->dtbs->listele('yorumlar');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/yorumlar/anasayfa',$data);
}

public function yorumedit($id){
  $sonuc = $this->dtbs->cek($id,'yorumlar');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/yorumlar/edit/anasayfa',$data);

}

public function yorumguncelle(){
  $data = array(
    'id'  => $id = $this->input->post('id'),
    'adsoyad' => $adsoyad = $this->input->post('adsoyad'),
    'yorum'  => $yorum = $this->input->post('yorum'),
    'durum'  => $durum = $this->input->post('durum')
  );
  $sonuc = $this->dtbs->guncelle($data,$id,'id','yorumlar');
  if($sonuc) {
    $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
      Veriyi Güncellediniz</div>');
    redirect('yonetim/yorumlar');
  }else {
       $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><h4><i class="icon fa fa-ban"></i> Hata!</h4>
      Güncelleme İşlemi Yapılamadı</div>');
    redirect('yonetim/yorumlar');
  }
}

public function yorumset(){
  $id = $this->input->post('id');
  $durum = ($this->input->post('durum')=="true") ? 1 : 0;
  $this->db->where('id',$id)->update('yorumlar',array('durum'=>$durum));
}

public function yorumsil($id,$where,$from){
  $run = $this->session->userdata('delete');

  if($run) {

      $sonuc = $this->dtbs->sil($id, $where, $from);

      if ($sonuc) {
        $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Veriyi Sildiniz.
                </div>');

        redirect('yonetim/yorumlar');

      } else {

        $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                  Silme İşlemi Yapılamadı!
                </div>');

        redirect('yonetim/yorumlar');

      }

  } else {

    $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Hata!</h4>
              Silme İşlemi Yapabilmek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
            </div>');

      redirect('yonetim/yorumlar');
  }

}
//yorum işlemleri Bitiş
//gelen sipariş işlemleri Başlangıç

public function gelensiparis(){
  $sonuc = $this->dtbs->listele('sepet');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/gelensiparis/anasayfa',$data);
}

public function gsiparisedit($id){
  $sonuc = $this->dtbs->cek($id,'sepet');
  if($sonuc){
    $data['bilgi'] = $sonuc;
    $this->load->view('back/gelensiparis/edit/anasayfa',$data);
    $data = array('sepetonay'=>1);
    $this->dtbs->siparisupdate($sonuc['id'],$data);
  }
}

public function gsiparisguncelle(){
  $data = array(
    'urunadi' =>$urunadi = $this->input->post('urunadi') ,
    'toplamtutar' =>$toplamtutar = $this->input->post('toplamtutar') ,
    'fiyat' =>$fiyat = $this->input->post('fiyat') ,
    'adet' =>$adet = $this->input->post('adet') ,
    'bankaadi' =>$bankaadi = $this->input->post('bankaadi')
   );
   $sonuc = $this->dtbs->ekle('gelensiparis',$data);
   if ($sonuc) {
     $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
               Siparişi Onayladınız.
             </div>');

     redirect('yonetim/onaylisiparis');

   } else {

     $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <h4><i class="icon fa fa-ban"></i> Hata!</h4>
               Server Hatası!
             </div>');

     redirect('yonetim/gelensiparis');

   }
}


public function onaylisiparis(){
  $sonuc = $this->dtbs->listele('gelensiparis');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/onaylisiparis/anasayfa',$data);
}

public function osiparisedit($id){
  $sonuc = $this->dtbs->cek($id,'gelensiparis');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/onaylisiparis/edit/anasayfa',$data);
}

public function siparisset(){
  $id = $this->input->post('id');
  $durum = ($this->input->post('durum')=="true") ? 1 : 0;
  $this->db->where('id',$id)->update('gelensiparis',array('durum'=>$durum));
}

//siipariş işelmleri Bitiş
//değişim başlangıö
public function degisimtalep(){
  $sonuc = $this->dtbs->listele('degisim');
  $data['bilgi'] = $sonuc;
  $this->load->view('back/degisim/anasayfa',$data);
}

public function degisimedit($id){
  $sonuc = $this->dtbs->cek($id,'degisim');
  $data['bilgi'] =$sonuc;
  $this->load->view('back/degisim/edit/anasayfa',$data);
}

public function degisimset(){
  $id = $this->input->post('id');
  $durum = ($this->input->post('durum')=="true") ? 1 : 0;
  $this->dt->where('id',$id)->update('degisim',array('durum'=>$durum));
 }

 public function iptaltalep(){
   $sonuc = $this->dtbs->listele('iptal');
   $data['bilgi'] = $sonuc;
   $this->load->view('back/iptal/anasayfa',$data);
 }

 public function iptaledit($id){
   $sonuc = $this->dtbs->cek($id,'iptal');
   $data['bilgi'] =$sonuc;
   $this->load->view('back/iptal/edit/anasayfa',$data);
 }

 public function iptalset(){
   $id = $this->input->post('id');
   $durum = ($this->input->post('durum')=="true") ? 1 : 0;
   $this->dt->where('id',$id)->update('iptal',array('durum'=>$durum));
  }

  public function uyeset() {

    $id = $this->input->post('id');

    $durum = ($this->input->post('durum') == "true") ? 1 : 0;

    $this->db->where('id', $id)->update('uyeler', array('durum' => $durum));

  }

  public function uyesil($id,$where,$from)
  {
    $run = $this->session->userdata('delete');
    if($run) {

        $sonuc = $this->dtbs->sil($id, $where, $from);

        if ($sonuc) {
          $this->session->set_flashdata('durum', '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                    Kullanıcıyı Engellediniz.
                  </div>');

          redirect('yonetim/uyeler');

        } else {

          $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                    Kullanıcıyı Engelleme İşlemi Yapılamadı!
                  </div>');

          redirect('yonetim/uyeler');

        }

    } else {

      $this->session->set_flashdata('durum', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Kullanıcıyı Engellemek İçin <br>Silme Fonksiyonu Butonunu Açmalısınız
              </div>');

        redirect('yonetim/uyeler');
    }

    }

}

?>
