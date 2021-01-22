<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Ürün Ekleme Formu</h3>

           </div>

           <form class="form-horizontal" action="<?php echo base_url('yonetim/urunekleme'); ?>" method="post" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Adı</label>

                    <div class="col-sm-3">
                        <input type="text" name="title" value="" class="form-control" placeholder="Ürün Adı" required>
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Kategori</label>

                    <div class="col-sm-3">

                        <select class="form-control" name="katID">
                          <?php $kategoriler = kategoricek(); foreach($kategoriler as $kategori) { ?>

                            <option value="<?php echo $kategori['id'] ?>"><?php echo $kategori['titlem']; ?></option>

                          <?php } ?>
                        </select>

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Fiyat</label>

                    <div class="col-sm-3">
                        <input type="text" name="fiyat" value="" class="form-control" placeholder="Ürün Fiyat" required>
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Tarih</label>

                    <div class="col-sm-3">

                        <input type="date" name="tarih" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim1</label>

                    <div class="col-sm-3">
                        <input type="file" name="resim1" value="" class="form-control" >
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim2</label>

                    <div class="col-sm-3">

                        <input type="file" name="resim2" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim3</label>

                    <div class="col-sm-3">
                        <input type="file" name="resim3" value="" class="form-control">
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim4</label>

                    <div class="col-sm-3">

                        <input type="file" name="resim4" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Bilgisi</label>

                    <div class="col-sm-8">
                        <textarea name="bilgi" rows="8" cols="80" id="editor1"></textarea>
                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Açıklaması</label>

                    <div class="col-sm-8">
                        <textarea name="aciklama" rows="8" cols="80" id="editor2"></textarea>
                    </div>

                  </div>

              </div>

              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/urunler'); ?>" type="submit" class="btn btn-warning"> Vazgeç</a>

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
