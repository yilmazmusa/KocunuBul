<<?php $info = $this->session->userdata('info'); ?>
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/back/'); ?>dist/img/avatar5.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Yönetici</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Son Giris Tarihi
          <br><?php echo $info->son_giris; ?><br> </a>
      </div>
    </div>

    <br>
    <!-- search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header text-center" style="color:#fff">YÖNETİM PANELİ</li>
      <li>

        <a href="<?php echo base_url('yonetim'); ?>"><i class="fa fa-dashboard"></i> <span>Anasayfa</span></a>

      </li>

      <li class="treeview">

        <a href="#">

          <i class="fa fa-cogs"></i>

          <span>Genel Ayarlar</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/genelayarlar'); ?>"><i class="fa fa-circle-o"></i> Site Ayarları</a></li>

        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-user"></i>

          <span>Üyeler</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/uyeler'); ?>"><i class="fa fa-circle-o"></i> Üye Listesi</a></li>

        </ul>
      </li>

      <li class="treeview">

        <a href="#">

          <i class="fa fa-user"></i>

          <span>Koçlar</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/koclar'); ?>"><i class="fa fa-circle-o"></i> Koç Listesi</a></li>

        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-university"></i>

          <span>Banka İşlemleri</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/banka'); ?>"><i class="fa fa-circle-o"></i> Banka Listesi</a></li>

        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-shopping-cart"></i>

          <span>Siparişler</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/gelensiparis'); ?>"><i class="fa fa-circle-o"></i> Gelen Siparişler</a></li>
          <li><a href="<?php echo base_url('yonetim/onaylisiparis'); ?>"><i class="fa fa-circle-o"></i> Gönderilen Siparişler</a></li>
        </ul>
      </li>

      <li class="treeview">

        <a href="#">

          <i class="fa fa-recycle"></i>

          <span>Talepler</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/degisimtalep'); ?>"><i class="fa fa-circle-o"></i> Değişim Talepleri</a></li>
          <li><a href="<?php echo base_url('yonetim/iptaltalep'); ?>"><i class="fa fa-circle-o"></i> İptal Talepleri</a></li>
        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-diamond"></i>

          <span>Ürünler</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/urunler'); ?>"><i class="fa fa-circle-o"></i> Ürün Listesi</a></li>
          <li><a href="<?php echo base_url('yonetim/uruniptal'); ?>"><i class="fa fa-circle-o"></i> İptal Talepleri</a></li>
        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-cubes"></i>

          <span>Genel İşlemler</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/gsozlesme'); ?>"><i class="fa fa-circle-o"></i> Gizlilik Sözleşmesi</a></li>
          <li><a href="<?php echo base_url('yonetim/ssozlesme'); ?>"><i class="fa fa-circle-o"></i> Satış Sözleşmesi</a></li>
          <li><a href="<?php echo base_url('yonetim/sss'); ?>"><i class="fa fa-circle-o"></i> Sık Sorulan Sorular</a></li>
          <li><a href="<?php echo base_url('yonetim/iade'); ?>"><i class="fa fa-circle-o"></i> Garanti ve İade</a></li>
          <li><a href="<?php echo base_url('yonetim/smedya'); ?>"><i class="fa fa-circle-o"></i> Sosyal Medya</a></li>

        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-envelope"></i>

          <span>Mesajlar</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/mesajlar'); ?>"><i class="fa fa-circle-o"></i> Mesaj Listesi</a></li>

        </ul>
      </li>


      <li class="treeview">

        <a href="#">

          <i class="fa fa-comments-o"></i>

          <span>Yorumlar</span>

          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>

        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('yonetim/yorumlar'); ?>"><i class="fa fa-circle-o"></i> Yorum Listesi</a></li>

        </ul>
      </li>

      <li>

        <a href="<?php echo base_url(); ?>" target="_blank">

          <i class="fa fa-external-link"></i><span>Siteye Git</span

        </a>

      </li>



      <li class="header">İŞLEMLER</li>

      <li><a href="<?php echo base_url('yonetim/cikis'); ?>"><i class="fa fa-circle-o text-red"></i> <span><button type="button" name="button" class="btn btn-danger"> Çıkış Yap </button></span></a></li>

      <li><a href="<?php echo base_url('yonetim/silmeislemi') ?>">
        <?php if($this->session->userdata('delete')) { ?>

        <i class="fa fa-circle-o text-success"></i> <span><button type="button" name="button" class="btn btn-success">Fonksiyon Açık</button>

        <?php } else { ?>

          <i class="fa fa-circle-o text-danger"></i> <span><button type="button" name="button" class="btn btn-danger">Fonksiyon Kapalı</button>

      <?php } ?>

        </span></a></li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
