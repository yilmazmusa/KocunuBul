<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <?php echo $this->session->flashdata('durum'); ?>
             <h3 class="box-title">Onaylı Sipariş Listesi</h3>
           </div>

           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th class="text-center" style="width:20px">S. No</th>
                 <th>Ürün Adı</th>
                 <th>Fiyatı</th>
                 <th>Adet</th>
                 <th>Ödeme Şekli</th>
                 <th>Tutar</th>
                 <th>Durum</th>
                 <th>İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $sayi++; ?></td>
                 <td><?php echo $bilgi['urunadi']; ?></td>
                 <td><?php echo $bilgi['fiyat']; ?></td>
                 <td><?php echo $bilgi['adet']; ?></td>
                 <td>Ödeme Şekli</td>
                 <td><?php echo $bilgi['toplamtutar']; ?></td>
                 <td><input name="" class="toggle_check"
                  data-onstyle="success"
                  data-on="Onaylandı"
                  data-off="Onay Bekliyor"
                  data-offstyle="danger"
                  type="checkbox"
                  data-toggle="toggle"
                  dataID = "<?php echo $bilgi['id']; ?>"
                  dataURL = "<?php echo base_url('yonetim/siparisset'); ?>"
                  <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>


                 <td><a href="<?php echo base_url('yonetim/osiparisedit/' . $bilgi['id']. ''); ?>">

                   <button type="button" class="btn btn-primary" name="button">

                     Düzenle

                   </button></a>

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
