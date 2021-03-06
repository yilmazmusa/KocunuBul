
<section class="content">
     <div class="row">
       <div class="col-xs-12">

         <div class="box">
           <div class="box-header">
             <h3 class="box-title">Sosyal Medya Listesi</h3>
             <a href="<?php echo base_url('yonetim/smedyaekle'); ?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Ekle </a>
           </div>

           <?php echo $this->session->flashdata('durum'); ?>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th style="width:20px">S. No</th>
                 <th>Başlık</th>
                 <th>URL</th>
                 <th>Durum</th>
                 <th style="width:150px">İşlemler</th>
               </tr>
               </thead>
               <tbody>
                 <?php foreach ($bilgi as $bilgi) { ?>

               <tr>
                 <td><?php echo $bilgi['id']; ?></td>
                 <td><?php echo $bilgi['title']; ?></td>
                 <td><?php echo $bilgi['url']; ?></td>

                 <td><input name="" class="toggle_check"
                  data-onstyle="success"
                  data-on="Aktif"
                  data-off="Pasif"
                  data-offstyle="danger"
                  type="checkbox"
                  data-toggle="toggle"
                  dataID = "<?php echo $bilgi['id']; ?>"
                  dataURL = "<?php echo base_url('yonetim/smedyaset'); ?>"
                  <?php echo ($bilgi['durum'] == 1) ? "checked" : ""; ?>
                   ></td>

                 <td>

                   <a href="<?php echo base_url('yonetim/smedyaedit/' . $bilgi['id']. ''); ?>">

                     <button type="button" class="btn btn-primary" name="button">

                       Düzenle

                     </button>

                   </a>

                   <a href="<?php echo base_url('yonetim/smedyasil/' . $bilgi['id']. '/id/sosyalmedya'); ?>">

                     <button type="button" class="btn btn-warning" name="button">

                       Sil

                     </button>

                   </a>

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
