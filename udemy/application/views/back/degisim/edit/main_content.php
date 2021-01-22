<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Değişim Talep  Formu</h3>

           </div>

           <form class="form-horizontal" >

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ad Soyad</label>

                    <div class="col-sm-3">
                        <input type="text" name="adsoyad" value="<?php echo $bilgi['adsoyad']; ?>" class="form-control">
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label">Üye Telefon</label>

                    <div class="col-sm-3">

                        <input type="text" name="telefon" value="<?php echo $bilgi['telefon']; ?>" class="form-control">

                    </div>

                  </div>

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Adı</label>

                    <div class="col-sm-3">

                        <input type="text" name="urunadi" value="<?php echo $bilgi['urunadi']; ?>" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ödeme Şekli</label>

                    <div class="col-sm-3">

                          <input type="text" name="odeme" value="<?php echo $bilgi['odeme']; ?>" class="form-control">


                          </div>
                    </div>
                    <div class="form-group">

                      <label for="inputEmail3" class="col-sm-2 control-label"> Değişim Nedeni</label>

                      <div class="col-sm-10">

                            <input type="text" name="degisim" value="<?php echo $bilgi['degisim']; ?>" class="form-control">


                            </div>
                      </div>



              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/degisimtalep'); ?>" type="submit" class="btn btn-warning"> Geri Dön</a>


              </div>

           </form>

           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>
