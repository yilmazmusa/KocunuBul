<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Sosyal Medya Düzenleme Formu</h3>

           </div>

           <form class="form-horizontal" action="<?php echo base_url('yonetim/smedyaguncelle'); ?>" method="post" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Hesap Adı</label>

                    <div class="col-sm-4">
                        <input type="text" name="title" value="<?php echo $bilgi['title'] ?>" class="form-control" placeholder="Sosyal Medya Adı" required>
                        <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                        <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
                    </div>

                  </div>

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Hesap Adresi</label>

                    <div class="col-sm-4">
                        <input type="text" name="url" value="<?php echo $bilgi['url']; ?>" class="form-control" placeholder="Hesap Adresi" required>
                    </div>

                  </div>


              </div>

              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/smedya'); ?>" type="submit" class="btn btn-warning"> Vazgeç</a>

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
