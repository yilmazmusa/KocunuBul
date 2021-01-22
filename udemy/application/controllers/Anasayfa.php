<?php

  defined('BASEPATH') OR exit('dosya bulunamadı');

  class Anasayfa extends CI_CONTROLLER {

      public function index()
      {

        $this->load->view('front/anasayfa');

      }

      public function gizlilik()
      {

      	$this->load->view('front/gizlilik/anasayfa');
      }


      public function satis()
      {

        $this->load->view('front/satis/anasayfa');
      }


      public function garanti()
      {

        $this->load->view('front/garanti/anasayfa');
      }


       public function sss()
      {

        $this->load->view('front/sss/anasayfa');
      }

          public function iletisim()
      {

        $this->load->view('front/iletisim/anasayfa');
      }

         public function mesajiletim()
      {

          $this->form_validation->
                  set_rules('adsoyad', 'İsim Soyisim', 'trim|required|min_length[5]');
          $this->form_validation->
                  set_rules('email', 'E-mail Adresi', 'trim|required|valid_email');
          $this->form_validation->
                  set_rules('konu', 'Konu', 'trim|required|min_length[5]');
          $this->form_validation->
                  set_rules('mesaj', 'Mesajınız', 'trim|required|min_length[5]');

        $hatalar = array(
          'required'    => "{field} alanlarını doldurmak zorundasınız",
          'min_length'  => "{field} minimum 5 karakter olmak zorundadır",
          'valid_email' => "lütfen geçerli bir email adresi giriniz"

        );

       $this-> form_validation->set_message($hatalar);
        if ($this->form_validation->run() == FALSE) {
          redirect('iletisim', $this->session->set_flashdata(
            'hata','<div class ="alert alert-danger">
                <i class="fa fa-exclamation-circle"></i>
                '.$hatalar['hata']=validation_errors().'</div>'

          ));

        } else {

          $data = array(
            'adsoyad' => $adsoyad = $this ->input->post('adsoyad',true),
            'email'   => $email   = $this ->input->post('email',true),
            'konu'    => $konu    = $this ->input->post('konu',true),
            'mesaj'   => $mesaj   = $this ->input->post('mesaj',true),
            'tarih'   => $tarih   = date('d-m-Y'),
            'ip'      => $ip      = $this ->input->post('ip'),
            'durum'   => 0
          );
            $sonuc = $this->dtbs->ekle('mesajlar',$data);
            if ($sonuc){
              $this->session->set_flashdata('hata', '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
                  Mesajınız İletildi<br>En Kısa Zamanda Email adresinize dönüş yapılacaktır..
                  </div>');

                  redirect($_SERVER['HTTP_REFERER']);

            } else {
                $this->session->set_flashdata('hata', '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i>Server Hatası!</h4>
                  Mesajınız İletilemedi.<br>Lütfen daha sonra tekrar deneyiniz..
                  </div>');

                  redirect($_SERVER['HTTP_REFERER']);

                }

            }

        }




  public function kisiselgelisim()
  {
    $sonuc = $this->dtbs->kategorilistele('1');
    $sonuc = $this->dtbs->kisiselgelisimsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'kisiselgelisim';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->kisiselgelisimper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/kisiselgelisim/anasayfa',$data);
  }
  public function spor()
  {
    $sonuc = $this->dtbs->kategorilistele('2');
    $sonuc = $this->dtbs->sporsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'spor';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->sporper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/spor/anasayfa',$data);
  }

  public function egitim()
  {
    $sonuc = $this->dtbs->kategorilistele('3');
    $sonuc = $this->dtbs->egitimsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'egitim';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->egitimper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/egitim/anasayfa',$data);
  }

  public function programlamayazilim()
  {
    $sonuc = $this->dtbs->kategorilistele('4');
    $sonuc = $this->dtbs->programlamayazilimsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'programlamayazilim';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->programlamayazilimper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/programlamayazilim/anasayfa',$data);
  }


  public function grafiktasarim()
  {
    $sonuc = $this->dtbs->kategorilistele('5');
    $sonuc = $this->dtbs->grafiktasarimsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'grafiktasarim';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->grafiktasarimper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/grafiktasarim/anasayfa',$data);
  }

  public function hobielsanatlari()
  {
    $sonuc = $this->dtbs->kategorilistele('7');
    $sonuc = $this->dtbs->hobielsanatlarisayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'hobielsanatlari';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->hobielsanatlariper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/hobielsanatlari/anasayfa',$data);
  }

  public function ozelgunurunleri()
  {
    $sonuc = $this->dtbs->kategorilistele('13');
    $sonuc = $this->dtbs->ozelgunurunlerisayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'ozelgunurunleri';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->ozelgunurunleriper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/ozelgunurunleri/anasayfa',$data);
  }

  public function muzikveenstruman()
  {
    $sonuc = $this->dtbs->kategorilistele('9');
    $sonuc = $this->dtbs->muzikveenstrumansayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'muzikveenstruman';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->muzikveenstrumanper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/muzikveenstruman/anasayfa',$data);
  }

  public function bilisimveteknoloji()
  {
    $sonuc = $this->dtbs->kategorilistele('10');
    $sonuc = $this->dtbs->bilisimveteknolojisayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'bilisimveteknoloji';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->bilisimveteknolojiper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/bilisimveteknoloji/anasayfa',$data);
  }

  public function saglikveyasam()
  {
    $sonuc = $this->dtbs->kategorilistele('11');
    $sonuc = $this->dtbs->saglikveyasamsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'saglikveyasam';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->saglikveyasamper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/saglikveyasam/anasayfa',$data);
  }

  public function ascilik()
  {
    $sonuc = $this->dtbs->kategorilistele('6');
    $sonuc = $this->dtbs->asciliksayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'ascilik';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->ascilikper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/ascilik/anasayfa',$data);
  }

  public function dilegitimi()
  {
    $sonuc = $this->dtbs->kategorilistele('8');
    $sonuc = $this->dtbs->dilegitimisayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'dilegitimi';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->dilegitimiper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/dilegitimi/anasayfa',$data);
  }

  public function kulturvesanat()
  {
    $sonuc = $this->dtbs->kategorilistele('12');
    $sonuc = $this->dtbs->kulturvesanatsayisi();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'kulturvesanat';
    $config['total_rows'] = $sonuc;
    $config['per_page'] = 12;
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = '&laquo';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_link'] = '&raquo';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['next_link'] = '&gt;';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><span>';
    $config['cur_tag_close'] = '</span></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $this->pagination->initialize($config);
    $data['linkler'] = $this->pagination->create_links();
    $data['bilgi'] = $this->dtbs->kulturvesanatper($config['per_page'],$this->uri->segment(2,0));

    $this->load->view('front/kulturvesanat/anasayfa',$data);
  }

    public function bilisimveteknolojidetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/bilisimveteknoloji/detay/anasayfa',$data);


    }
    public function ascilikdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/ascilik/detay/anasayfa',$data);


    }
    public function dilegitimidetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/dilegitimi/detay/anasayfa',$data);


    }
    public function egitimdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/egitim/detay/anasayfa',$data);


    }
    public function grafiktasarimdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/grafiktasarim/detay/anasayfa',$data);


    }
    public function hobielsanatlaridetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/hobielsanatlari/detay/anasayfa',$data);


    }
    public function kisiselgelisimdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/kisiselgelisim/detay/anasayfa',$data);


    }
    public function kulturvesanatdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/kulturvesanat/detay/anasayfa',$data);


    }
    public function muzikveenstrumandetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/muzikveenstruman/detay/anasayfa',$data);


    }
    public function ozelgunurunleridetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/ozelgunurunleri/detay/anasayfa',$data);


    }
    public function programlamayazilimdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/programlamayazilim/detay/anasayfa',$data);


    }public function saglikveyasamdetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/saglikveyasam/detay/anasayfa',$data);


    }
    public function spordetay($sef){

      $sonuc = $this->dtbs->detay($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/spor/detay/anasayfa',$data);


    }

    public function halitdetay($sef){

      $sonuc = $this->dtbs->detay2($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/halit/detay/anasayfa',$data);


    }
    public function sinandetay($sef){

      $sonuc = $this->dtbs->detay2($sef);
      $data['bilgi'] = $sonuc;
      $this->load->view('front/sinan/detay/anasayfa',$data);


    }

    public function kayit(){

      $this->load->view('front/uyeler/anasayfa');


    }
    public function kayitol(){

      $this->form_validation->
              set_rules('adsoyad', 'İsim Soyisim', 'trim|required|min_length[5]');
      $this->form_validation->
              set_rules('email', 'E-mail Adresi', 'trim|required|valid_email');
      $this->form_validation->
              set_rules('sifre', 'Şifre', 'trim|required|min_length[5]');
      $this->form_validation->
              set_rules('confirm', 'Şifre Tekrarı', 'trim|required|min_length[5]|matches[sifre]');


    $hatalar = array(
      'required'    => "{field} alanlarını doldurmak zorundasınız",
      'min_length'  => "{field} minimum 5 karakter olmak zorundadır",
      'valid_email' => "lütfen geçerli bir email adresi giriniz",
      'matches'     => 'Girilen Şifreler Uyuşmuyor'

    );

   $this-> form_validation->set_message($hatalar);
    if ($this->form_validation->run() == FALSE) {
      redirect('kayit', $this->session->set_flashdata(
        'hata','<div class ="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i>
            '.$hatalar['hata']=validation_errors().'</div>'

      ));

    } else {

      $data = array(
        'adsoyad'    => $adsoyad = $this ->input->post('adsoyad',true),
        'email'     => $email   = $this ->input->post('email',true),
        'telefon'    =>$telefon    = $this ->input->post('telefon',true),
        'ip'         => $ip      = $this ->input->post('ip'),
        'il'         => $il   = $this ->input->post('il'),
        'ilce'   => $ilce   = $this ->input->post('ilce'),
        'mahalle'   => $mahalle   = $this ->input->post('mahalle'),
        'sifre'     =>$sifre = sha1(md5($this->input->post('sifre'))),
        'adres'     =>$adres = $this->input->post('adres')
      );
        $sonuc = $this->dtbs->ekle('uyeler',$data);
        if ($sonuc){
          $this->session->set_flashdata('hata', '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Tebrikler!</h4>
              Kayıt İşleminiz Tamamlanmıştır..
              </div>');

              redirect($_SERVER['HTTP_REFERER']);

        } else {
            $this->session->set_flashdata('hata', '<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i>Server Hatası!</h4>
              Kayıt Sırasında Bir Hata Oluştu.<br>Lütfen daha sonra tekrar deneyiniz..
              </div>');

              redirect($_SERVER['HTTP_REFERER']);

            }

        }


    }

    public function giris(){

      $this->load->view('front/uyeler/giris/anasayfa');
    }

    public function uyegiris(){
      $email=$this->input->post('email');
      $sifre=$this->input->post('sifre');
      $kontrol=$this->dtbs->uyekontrol($email,$sifre);
      if ($kontrol) {
        $this->session->set_userdata('uyegiris',true);
        $this->session->set_userdata('uyeinfo',$kontrol);
        redirect('anasayfa');
      }else {
        $this->session->set_flashdata('hata', '<div class ="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i>
             Email Adresi Yada Şifreniz Hatalı!..</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }

    }
    public function cikis(){
      $this->session->unset_userdata('uyegiris');
      redirect('anasayfa');
    }

    public function yorumlar(){
      $data = array(
        'adsoyad'  => $adsoyad = $this->input->post('adsoyad'),
        'yorum'  => $yorum = $this->input->post('yorum'),
        'rating'  => $rating = $this->input->post('rating'),
        'urunid'  => $urunid = $this->input->post('urunid'),
        'link'  => $link = $this->input->post('link'),
        'url'  => $url = $this->input->post('url'),
        'ip'  => $ip = $this->input->post('ip'),
        'tarih'  => $tarih = date('d-m-Y'),
        'durum'  => 0

      );
      $sonuc = $this->dtbs->ekle('yorumlar',$data);
      if ($sonuc) {
        $this->session->set_flashdata('hata', '<div class ="alert alert-success">
            <i class="fa fa-exclamation-circle"></i>
             Teşekkürler..<br>Yorumunuz Onaylandıktan Sonra Yayınlanacaktır</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }else {
        $this->session->set_flashdata('hata', '<div class ="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i>
             HATA!..<br>Lütfen Daha Sonra Tekrar Deneyiniz..( Sistem Hatası )</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }
    }

    public function search(){
      $term = $this->input->get('term');
      $rows = $this->dtbs->arama($term);
      echo json_encode($rows);
    }

    public function search2(){
      $term = $this->input->get('term2');
      $rows = $this->dtbs->arama2($term);
      echo json_encode($rows);
    }

    public function detay($sef){
      $sonuc = $this->dtbs->urunara($sef);
      $data['bilgi'] = $sonuc;
      if($sonuc['katID']==1){
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->kisiselgelisimdetay($sef);
      }elseif($sonuc['katID']==2){
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->spordetay($sef);

      }elseif ($sonuc['katID']==3) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->egitimdetay($sef);
      }elseif ($sonuc['katID']==4) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->programlamayazilimdetay($sef);
      }elseif ($sonuc['katID']==5) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->grafiktasarimdetay($sef);

      } elseif ($sonuc['katID']==6) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->ascilikdetay($sef);

      } elseif ($sonuc['katID']==7) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->hobielsanatlaridetay($sef);

      } elseif ($sonuc['katID']==8) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->dilegitimidetay($sef);

      } elseif ($sonuc['katID']==9) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->muzikveenstrumandetay($sef);

      } elseif ($sonuc['katID']==10) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->bilisimveteknolojidetay($sef);

      } elseif ($sonuc['katID']==11) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->saglikveyasamdetay($sef);

      } elseif ($sonuc['katID']==12) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->kulturvesanatdetay($sef);

      } elseif ($sonuc['katID']==13) {
        $sonuc = $this->dtbs->detay($sef);
        $data['bilgi'] = $sonuc;
        $this->ozelgunurunleridetay($sef);

      }

    }


    public function detay2($sef){
      $sonuc = $this->dtbs->kocara($sef);
      $data['bilgi'] = $sonuc;
      if($sonuc['id']==1){
        $sonuc = $this->dtbs->detay2($sef);
        $data['bilgi'] = $sonuc;
        $this->halitdetay($sef);
      }elseif($sonuc['id']==2){
        $sonuc = $this->dtbs->detay2($sef);
        $data['bilgi'] = $sonuc;
        $this->sinandetay($sef);

      }
      elseif($sonuc['id']==3){
        $sonuc = $this->dtbs->detay2($sef);
        $data['bilgi'] = $sonuc;
        $this->dogukandetay($sef);

      }

    }

    function sepet() {
      $this->load->view('front/sepet/anasayfa');
    }
    public function odemeislemi(){
      $sonuc = $this->dtbs->listele('sepet');
      $data['bilgi']= $sonuc;
      $this->load->view('front/odeme/ekle/anasayfa',$data);
    }
    public function odemebitis(){
      $data = array(
        'id'                  => $id = $this->input->post('id'),
        'urunID'              => $urunID = $this->input->post('urunID'),
        'urunadi'              =>$urunadi = $this->input->post('urunadi'),
        'adet'              => $adet = $this->input->post('adet'),
        'fiyat'              => $fiyat = $this->input->post('fiyat'),
        'toplamtutar'              => $toplamtutar = $this->input->post('toplamtutar'),
        'bankaadi'              => $bankadi = $this->input->post('bankaadi'),
        'sepetonay'            => 0

      );
      $sonuc = $this->dtbs->guncelle($data,$id,'id','sepet');
      if ($sonuc) {
        $this->cart->destroy();
        redirect('anasayfa');
      }else {
        $this->session->set_flashdata('hata', '<div class ="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i>
             HATA!..<br>Lütfen Daha Sonra Tekrar Deneyiniz..( Sistem Hatası )</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }
    }

    public function iptalislemi(){
      $this->load->view('front/iptal/anasayfa');
    }

    public function degisim(){
      $this->load->view('front/degisim/anasayfa');
    }




    public function iptalformu(){
      $data = array(
         'adsoyad'          => $adsoyad = $this->input->post('adsoyad'),
         'telefon'          => $telefon = $this->input->post('telefon'),
         'odeme'            => $odeme = $this->input->post('odeme'),
         'urunadi'          => $urunadi = $this->input->post('urunadi'),
         'iptal'            => $iptal = $this->input->post('iptal'),
         'durum'            =>0

      );
      $sonuc = $this->dtbs->ekle('iptal',$data);
      if ($sonuc) {
        $this->session->set_flashdata('hata', '<div class ="alert alert-success">
            <i class="fa fa-exclamation-circle"></i>
             Talebiniz Alınmıştır..<br>En Kısa Sürede Tarafınıza Dönüş Yapılacaktır.</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }else {
        $this->session->set_flashdata('hata', '<div class ="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i>
             HATA!..<br>Lütfen Daha Sonra Tekrar Deneyiniz..( Sistem Hatası )</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }
    }

    public function degisimformu(){
      $data = array(
         'adsoyad'          => $adsoyad = $this->input->post('adsoyad'),
         'telefon'          => $telefon = $this->input->post('telefon'),
         'odeme'            => $odeme = $this->input->post('odeme'),
         'urunadi'          => $urunadi = $this->input->post('urunadi'),
         'degisim'            => $degisim = $this->input->post('degisim'),
         'durum'            =>0

      );
      $sonuc = $this->dtbs->ekle('degisim',$data);
      if ($sonuc) {
        $this->session->set_flashdata('hata', '<div class ="alert alert-success">
            <i class="fa fa-exclamation-circle"></i>
             Talebiniz Alınmıştır..<br>En Kısa Sürede Tarafınıza Dönüş Yapılacaktır.</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }else {
        $this->session->set_flashdata('hata', '<div class ="alert alert-danger">
            <i class="fa fa-exclamation-circle"></i>
             HATA!..<br>Lütfen Daha Sonra Tekrar Deneyiniz..( Sistem Hatası )</div>');
            redirect($_SERVER['HTTP_REFERER']);
      }
    }



  }


?>
