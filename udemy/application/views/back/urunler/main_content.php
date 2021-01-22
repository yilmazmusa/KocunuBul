
<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Kategori Listesi</h3>
             <a href="<?php echo base_url('yonetim/urunekle'); ?>" class="btn btn-primary pull-right"><i class="fa fa-plus mr-3"></i>Ürün Ekle</a><br><br>

           </div>

           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th class="text-center">S. No</th>
                 <th>Ürün Adı</th>
                 <th>Resim</th>
                 <th>Kategorisi</th>
                 <th>Bilgi</th>
                 <th>Fiyat</th>
                 <th style="width: 20px">Durumu</th>
                 <th style="width: 100px">İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php $bilgi = urunler(); foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $bilgi['id']; ?></td>
                 <td><?php echo $bilgi['title']; ?></td>
                 <td><img src="../<?php echo $bilgi['resim1'];  ?>" alt="" width="90" height="42"></td>
                 <td><?php echo $bilgi['titlem']; ?></td>
                 <td><?php echo $bilgi['bilgi']; ?></td>
                 <td><?php echo $bilgi['fiyat']; ?>₺</td>


                 <td><input name="" class="toggle_check"
                  data-onstyle="success"
                  data-on="Aktif"
                  data-off="Pasif"
                  data-offstyle="danger"
                  type="checkbox"
                  data-toggle="toggle"
                  dataID = "<?php echo $bilgi['id']; ?>"
                  dataURL = "<?php echo base_url('yonetim/urunset'); ?>"
                  <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>

                   <td style="width: 180px">

                     <a href="<?php echo base_url('yonetim/urunsil/' . $bilgi['id'] . '/id/urunler'); ?>" class="btn btn-warning  pull-right" style="margin-left: 9px !important;">Sil</a>
                     <a href="<?php echo base_url('yonetim/urunedit/' . $bilgi['id'] . ''); ?>" class="btn btn-info pull-right"></i>Düzenle</a>
                   </td>

               </tr>


               <?php } ?>

               </tbody>

             </table>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>
