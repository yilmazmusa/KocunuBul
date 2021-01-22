 $(document).ready(function () {

   $('.toggle_check').bootstrapToggle();
   $('.toggle_check').change(function(){

      var durum = $(this).prop('checked');

      var id = $(this).attr('dataID');

      var base_url = $(this).attr('dataURL');

      $.post(base_url, {id:id, durum:durum}, function(response) {});



   });

     $('.sidebar-menu').tree()
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })

    CKEDITOR.replace('editor1');

    CKEDITOR.replace('editor2');


 })
