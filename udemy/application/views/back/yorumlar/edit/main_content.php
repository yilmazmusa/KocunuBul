<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Yorum Düzenleme Formu</h3>

           </div>

           <form action="<?php echo base_url('yonetim/yorumguncelle'); ?>" method="post" class="form-horizontal">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ad Soyad</label>

                    <div class="col-sm-4">
                        <input type="text"  value="<?php echo $bilgi['adsoyad']; ?>" class="form-control">
                        <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                        <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                         </div>
                        </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Yorum</label>
                    <div class="col-sm-4">
                      <textarea name="yorum" rows= "8" cols= "80"><?php echo $bilgi['yorum'] ?></textarea>
                    </div>
                  </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">IP Adresi</label>
                    <div class="col-sm-4">
                       <input type="text" disabled value="<?php echo $bilgi['ip']; ?>" class="form-control">
                    </div>
                  </div>



               </div>


              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/yorumlar'); ?>" type="submit" class="btn btn-warning">Listeye Dön</a>
                  <button type="submit" name= "button" class= "btn btn-info pull-right">Güncelle</button>
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
