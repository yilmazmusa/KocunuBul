<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Mesajlar Listesi</h3>
           </div>

           <?php echo $this->session->flashdata('durum'); ?>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>S. No</th>
                 <th>Gönderen</th>
                 <th>Email Adresi</th>
                 <th>Konu</th>
                 <th>Durum</th>
                 <th>İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php $sayi = 1; foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $sayi++; ?></td>
                 <td><?php echo $bilgi['adsoyad']; ?></td>
                 <td><?php echo $bilgi['email']; ?></td>
                 <td><?php echo word_limiter($bilgi['konu'],  5); ?></td>
                 <td>
                  <?php if($bilgi['durum'] == 1){ ?>
                  <a class="btn btn-success">Mesaj Okunmuş</a>
                <?php }else{ ?>
                  <a class="btn btn-danger">Mesaj Okunmamış</a>
                <?php } ?>
                </td>

                 <td><a href="<?php echo base_url('yonetim/mesajedit/' . $bilgi['id']. ''); ?>"><button type="button" class="btn btn-info" name="button">Oku</button> </a></td>
                 <td><a href="<?php echo base_url('yonetim/mesajsil/' . $bilgi['id']. '/id/mesajlar'); ?>"><button type="button" class="btn btn-warning" name="button">Sil</button> </a></td>
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
