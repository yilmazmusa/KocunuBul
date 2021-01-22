<section class="content">
     <div class="box box-info">
         <div class="box-header with-border">

             <h3 class="box-title">Onaylı Sipariş İnceleme Formu</h3>

           </div>


           <form class="form-horizontal" >

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Adı</label>

                    <div class="col-sm-3">
                        <input type="text" name="urunadi" value="<?php echo $bilgi['urunadi']; ?>" class="form-control">
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label">Toplam Tutar</label>

                    <div class="col-sm-3">

                        <input type="text" name="toplamtutar" value="<?php echo $bilgi['toplamtutar']; ?>" class="form-control">

                    </div>

                  </div>

                    <label for="inputEmail3" class="col-sm-2 control-label"> Fiyat</label>

                    <div class="col-sm-3">

                        <input type="text" name="fiyat" value="<?php echo $bilgi['fiyat']; ?>" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Adet</label>

                    <div class="col-sm-3">

                          <input type="text" name="adet" value="<?php echo $bilgi['adet']; ?>" class="form-control">



                    </div>




                    <label for="inputEmail3" class="col-sm-2 control-label"> Alıcı Adı</label>

                    <div class="col-sm-3">

                          <input type="text" name="bankaadi" value="<?php echo $bilgi['bankaadi']; ?>" class="form-control">


                    </div>

                  </div>


                  <div class="form-group">






                  </div>




              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/onaylisiparis'); ?>" type="submit" class="btn btn-warning"> Geri Dön</a>



              </div>

           </form>

        </div>
     </div>
</section>
