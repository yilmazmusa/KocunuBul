<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Mesaj Okuma Formu</h3>

           </div>

           <form class="form-horizontal">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Mesaj Gönderen</label>

                    <div class="col-sm-4">
                        <input type="text" disabled value="<?php echo $bilgi['adsoyad']; ?>" class="form-control">
                         </div>
                        </div>     

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email Adresi</label>
                    <div class="col-sm-4">
                       <input type="text" disabled value="<?php echo $bilgi['email']; ?>" class="form-control">
                    </div>
                  </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">IP Adresi</label>
                    <div class="col-sm-4">
                       <input type="text" disabled value="<?php echo $bilgi['ip']; ?>" class="form-control">
                    </div>
                  </div>

                    <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mesaj Tarihi</label>
                    <div class="col-sm-4">
                       <input type="text" disabled value="<?php echo $bilgi['tarih']; ?>" class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Konu</label>
                    <div class="col-sm-7">
                       <input type="text" disabled value="<?php echo $bilgi['konu']; ?>"class="form-control">
                    </div>
                  </div>

                   <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mesaj</label>
                    <div class="col-sm-7">
                       <textarea rows="8" disabled cols="80" class="form-control"><?php echo $bilgi['mesaj']; ?></textarea>
                    </div>
                  </div>
               </div>


              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/mesajlar'); ?>" type="submit" class="btn btn-warning">Listeye Dön</a>
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
