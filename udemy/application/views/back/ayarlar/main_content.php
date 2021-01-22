<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Site Genel Ayarlar Listesi</h3>
           </div>

           <?php echo $this->session->flashdata('durum'); ?>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th>S. No</th>
                 <th>Site Title</th>
                 <th>Site Url</th>
                 <th>Site Telefon</th>
                 <th>Site Adres</th>
                 <th>İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $bilgi['id']; ?></td>
                 <td><?php echo $bilgi['site_title']; ?></td>
                 <td><?php echo $bilgi['site_url']; ?></td>
                 <td><?php echo $bilgi['site_tlf']; ?></td>
                 <td><?php echo $bilgi['site_adres']; ?></td>
                 <td><a href="<?php echo base_url('yonetim/gayaredit/' . $bilgi['id']. ''); ?>">

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
