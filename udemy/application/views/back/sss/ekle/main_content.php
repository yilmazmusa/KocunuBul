<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Sık Sorulan Sorular Formu</h3>

           </div>

           <form class="form-horizontal" action="<?php echo base_url('yonetim/sssekleme'); ?>" method="post" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Başlık</label>

                    <div class="col-sm-4">
                        <input type="text" name="title" class="form-control" placeholder="Banka Adı" required>
                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Açıklama</label>
                    <div class="col-sm-9">
                        <textarea name="aciklama" rows="8" cols="80" id="editor1"></textarea>
                    </div>

                  </div>


              </div>

              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/sss'); ?>" type="submit" class="btn btn-warning"> Vazgeç</a>

                  <button type="submit" class="btn btn-info pull-right">Ekle</button>
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
