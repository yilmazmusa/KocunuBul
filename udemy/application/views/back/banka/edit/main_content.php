<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Banka Düzenleme Formu</h3>

           </div>

           <form class="form-horizontal" action="<?php echo base_url('yonetim/bankaguncelle'); ?>" method="post" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Banka Adı</label>

                    <div class="col-sm-4">
                        <input type="text" name="title" value="<?php echo $bilgi['title']; ?>" class="form-control" placeholder="Banka Adı" required>
                        <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                        <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                    </div>

                  </div>

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Şube Adı</label>

                    <div class="col-sm-4">
                        <input type="text" name="sube" value="<?php echo $bilgi['sube'] ?>" class="form-control" placeholder="Şube Adı" required>
                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> IBAN No</label>

                    <div class="col-sm-4">
                        <input type="text" name="iban" value="<?php echo $bilgi['iban'] ?>" class="form-control" placeholder="IBAN No" required>
                    </div>

                  </div>

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Hesap No</label>

                    <div class="col-sm-4">
                        <input type="text" name="hesapno" value="<?php echo $bilgi['hesapno'] ?>" class="form-control" placeholder="Hesap No" required>
                    </div>

                  </div>

                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Resim </label>

                      <div class="col-sm-4">
                          <input type="file" name="resim" class="form-control">

                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"> Mevcut Resim </label>

                      <div class="col-sm-4">
                          <img src="../../<?php echo $bilgi['resim'] ?>" alt="" width="80" height="45">

                      </div>
                  </div>


              </div>

              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/banka'); ?>" type="submit" class="btn btn-warning"> Vazgeç</a>

                  <button type="submit" class="btn btn-info pull-right">Güncelle</button>
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
