<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Sık Sorulan Sorular Düzenleme Formu</h3>

           </div>

           <form class="form-horizontal" action="<?php echo base_url('yonetim/sssguncelle'); ?>" method="post" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Başlık</label>

                    <div class="col-sm-4">
                        <input type="text" name="title" value="<?php echo $bilgi['title'] ?>" class="form-control" placeholder="Banka Adı" required>
                        <input type="hidden" name="id" value="<?php echo $bilgi['id'] ?>">
                        <input type="hidden" name="durum" value="<?php echo $bilgi['durum'] ?>">
                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Açıklama</label>
                    <div class="col-sm-9">
                        <textarea name="aciklama" rows="8" cols="80" id="editor1"><?php echo $bilgi['aciklama'] ?></textarea>
                    </div>

                  </div>


              </div>

              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/sss'); ?>" type="submit" class="btn btn-warning"> Vazgeç</a>

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
