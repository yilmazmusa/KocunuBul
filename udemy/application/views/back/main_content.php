<section class="content">
  <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Üye Sayısı   </span>
                  <span class="info-box-number"><?php echo $uyesay = uyesayisi(); ?> <small>Kişi</small></span>
                </div>

            </div>

          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><i class="ion ion-android-chat"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Onaylı Yorum <br> Sayısı  </span>
                <span class="info-box-number"><?php echo $yorumsay = yorumsayisi(); ?> <small>Adet</small></span>
              </div>

          </div>

        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-bag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"> Ürün Sayısı  </span>
              <span class="info-box-number"><?php echo $urunsay = urunsayisi(); ?><small>Adet</small> </span>
            </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Sosyal Medya<br> Hesapları   </span>
            <span class="info-box-number"><?php echo $sosyalmedyasay = sosyalmedyasayisi(); ?> <small>Adet</small></span>
          </div>

      </div>

    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-purple"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Koç Sayısı   </span>
          <span class="info-box-number">4 <small>Kişi</small></span>
        </div>

    </div>

  </div>
  </div>







</section>
