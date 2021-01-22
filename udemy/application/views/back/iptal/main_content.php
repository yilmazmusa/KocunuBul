<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">İptal Talep Listesi</h3>
           </div>

           <?php echo $this->session->flashdata('durum'); ?>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>S. No</th>
                 <th>Ad Soyad </th>
                 <th>Ürün Adı</th>
                 <th>Telefon</th>
                 <th>Ödeme Şekli</th>
                 <th>Durum</th>
                 <th>İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $sayi++; ?></td>
                 <td><?php echo $bilgi['adsoyad']; ?></td>
                 <td><?php echo $bilgi['urunadi']; ?></td>
                 <td><?php echo $bilgi['telefon']; ?></td>
                 <td><?php echo $bilgi['odeme']; ?></td>
                 <td><input name="" class="toggle_check"
                  data-onstyle="success"
                  data-on="Yapıldı"
                  data-off="Yapılmadı"
                  data-offstyle="danger"
                  type="checkbox"
                  data-toggle="toggle"
                  dataID = "<?php echo $bilgi['id']; ?>"
                  dataURL = "<?php echo base_url('yonetim/iptalset'); ?>"
                  <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>


                 <td><a href="<?php echo base_url('yonetim/iptaledit/' . $bilgi['id']. ''); ?>"><button type="button" class="btn btn-info" name="button">İncele</button> </a></td>
               </tr>


               <?php } ?>

               </tbody>

             </table>
             <p class="text-aqua">Gelen İptal Taleplerini İncelemeden Onaylamayın</p>
           </div>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->
       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->
   </section>
