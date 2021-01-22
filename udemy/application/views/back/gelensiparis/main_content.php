<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <?php echo $this->session->flashdata('durum'); ?>
             <h3 class="box-title">Gelen Sipariş Listesi</h3>
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
                 <th>Adı Soyadı</th>
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
                 <td><?php echo $bilgi['durum']; ?></td>


                 <td>Ödeme Şekli</td>
                 <td><?php echo $bilgi['toplamtutar']; ?></td>
                 <td>
                  <?php if($bilgi['sepetonay'] == 1){ ?>
                  <a class="btn btn-success">Onaylandı</a>
                <?php }else{ ?>
                  <a class="btn btn-danger">Onay Bekliyor</a>
                <?php } ?>
                </td>
                 <td><a href="<?php echo base_url('yonetim/gsiparisedit/' . $bilgi['id']. ''); ?>">

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
