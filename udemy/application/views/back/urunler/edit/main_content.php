<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Ürün Güncelleme Formu</h3>

           </div>

           <form class="form-horizontal" action="<?php echo base_url('yonetim/urunguncelle'); ?>" method="post" enctype="multipart/form-data">

              <div class="box-body">

                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Adı</label>

                    <div class="col-sm-3">
                        <input type="text" name="title" value="<?php echo $bilgi['title']; ?>" class="form-control" placeholder="Ürün Adı" required>
                        <input type="hidden" name="id" value="<?php echo $bilgi['id']; ?>">
                        <input type="hidden" name="durum" value="<?php echo $bilgi['durum']; ?>">
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
                        <input type="text" name="fiyat" value="<?php echo $bilgi['fiyat']; ?>" class="form-control" placeholder="Ürün Fiyat" required>
                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Tarih</label>

                    <div class="col-sm-3">

                        <input type="date" name="tarih" value="<?php echo $bilgi['tarih']; ?>" class="form-control">

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim1</label>

                    <div class="col-sm-3">

                        <input type="file" name="resim1" value="" class="form-control" >

                        <br>

                        <img src="<?php echo base_url(); echo $bilgi['mini1']; ?>" alt="">

                        <p class="text-blue"> Mevcut Ürün Resmi </p>

                        <p class="text-red"> Değiştirmeyecekseniz resim seçmeyin </p>

                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim2</label>

                    <div class="col-sm-3">

                        <input type="file" name="resim2" class="form-control">

                        <br>

                        <img src="<?php echo base_url(); echo $bilgi['mini2']; ?>" alt="">

                        <p class="text-blue"> Mevcut Ürün Resmi </p>

                        <p class="text-red"> Değiştirmeyecekseniz resim seçmeyin </p>

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim3</label>

                    <div class="col-sm-3">

                        <input type="file" name="resim3" value="" class="form-control">

                        <img src="<?php echo base_url(); echo $bilgi['mini3']; ?>" alt="">

                        <br>

                        <p class="text-blue"> Mevcut Ürün Resmi </p>

                        <p class="text-red"> Değiştirmeyecekseniz resim seçmeyin </p>

                    </div>


                    <label for="inputEmail3" class="col-sm-2 control-label"> Resim4</label>

                    <div class="col-sm-3">

                        <input type="file" name="resim4" class="form-control">

                        <img src="<?php echo base_url(); echo $bilgi['mini4']; ?>" alt="">

                        <p class="text-blue"> Mevcut Ürün Resmi </p>

                        <p class="text-red"> Değiştirmeyecekseniz resim seçmeyin </p>

                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Bilgisi</label>

                    <div class="col-sm-8">
                        <textarea name="bilgi" rows="8" cols="80" id="editor1"><?php echo $bilgi['bilgi']; ?></textarea>
                    </div>

                  </div>


                  <div class="form-group">

                    <label for="inputEmail3" class="col-sm-2 control-label"> Ürün Açıklaması</label>

                    <div class="col-sm-8">
                        <textarea name="aciklama" rows="8" cols="80" id="editor2"><?php echo $bilgi['aciklama']; ?></textarea>
                    </div>

                  </div>

              </div>

              <div class="box-footer">
                  <a href="<?php echo base_url('yonetim/urunler'); ?>" type="submit" class="btn btn-warning"> Vazgeç</a>

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
