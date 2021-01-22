<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Üye Güncelleme Formu</h3>

           </div>

           <form class="form-horizontal" >

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Üye Adı</label>

                    <div class="col-sm-3">
                        <input type="text" name="adsoyad" value="<?php echo $bilgi['adsoyad']; ?>" class="form-control">
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label">Üye Email</label>

                    <div class="col-sm-3">

                        <input type="text" name="email" value="<?php echo $bilgi['email']; ?>" class="form-control">

                    </div>

                  </div>

                    <label for="inputEmail3" class="col-sm-2 control-label"> Telefonu</label>

                    <div class="col-sm-3">

                        <input type="text" name="telefon" value="<?php echo $bilgi['telefon']; ?>" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Şehir</label>

                    <div class="col-sm-3">

                          <input type="text" name="il" value="<?php echo $bilgi['il']; ?>" class="form-control">



                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> ilçe</label>

                    <div class="col-sm-3">

                          <input type="text" name="ilce" value="<?php echo $bilgi['ilce']; ?>" class="form-control">


                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Mahalle</label>

                    <div class="col-sm-3">

                          <input type="text" name="mahalle" value="<?php echo $bilgi['mahalle']; ?>" class="form-control">
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> IP</label>

                    <div class="col-sm-3">

                          <input type="text" name="ip" value="<?php echo $bilgi['ip']; ?>" class="form-control">
                    </div>

                  </div>



                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Adres</label>

                    <div class="col-sm-8">
                          <input type="text" name="adres" value="<?php echo $bilgi['adres']; ?>" class="form-control">
                    </div>

                  </div>



              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/uyeler'); ?>" type="submit" class="btn btn-warning"> Geri Dön</a>


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
