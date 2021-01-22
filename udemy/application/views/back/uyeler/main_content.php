<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Üye Listesi</h3>
           </div>

           <?php echo $this->session->flashdata('durum'); ?>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>S. No</th>
                 <th>İsim Soyisim </th>
                 <th>Email Adresi</th>
                 <th>Şehir</th>
                 <th style="width: 150px"> Durum</th>
                 <th >İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $sayi++; ?></td>
                 <td><?php echo $bilgi['adsoyad']; ?></td>
                 <td><?php echo $bilgi['email']; ?></td>
                 <td><?php echo $bilgi['il']; ?></td>
                 <td><input name="" class="toggle_check"
                  data-onstyle="success"
                  data-on="Aktif"
                  data-off="Pasif"
                  data-offstyle="danger"
                  type="checkbox"
                  data-toggle="toggle"
                  dataID = "<?php echo $bilgi['id']; ?>"
                  dataURL = "<?php echo base_url('yonetim/uyeset'); ?>"
                  <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>

                   <td>


                 <a href="<?php echo base_url('yonetim/uyeedit/' . $bilgi['id']. ''); ?>"><button type="button" class="btn btn-info" name="button">Bilgileri Oku</button> </a>
                <a href="<?php echo base_url('yonetim/uyesil/' . $bilgi['id'] . '/id/uyeler'); ?>" class="btn btn-danger  pull-right" style="margin-left: 9px !important;">K.Yasakla</a>
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
