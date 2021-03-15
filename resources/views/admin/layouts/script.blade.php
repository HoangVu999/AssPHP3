<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('admin-press/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin-press/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin-press/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('admin-press/assets/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin-press/assets/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('admin-press/assets/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('admin-press/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('admin-press/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('admin-press/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('admin-press/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin-press/js/custom.min.js')}}"></script>
<!-- This is data table -->
<script src="{{asset('admin-press/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!-- chartist chart -->
<script src="{{asset('admin-press/assets/plugins/chartist-js/dist/chartist.min.js')}}"></script>
<script
    src="{{asset('admin-press/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
<!--morris JavaScript -->
<script src="{{asset('admin-press/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('admin-press/assets/plugins/morrisjs/morris.min.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('admin-press/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('admin-press/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('admin-press/assets/js/dashboard2.js')}}"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{asset('admin-press/assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/hov9al58x1upblz9mwft0r631ri4xuyp8r6d1qbvl72x3pgc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- ============================================================ -->
<!-- Swel js -->
<!-- ============================================================ -->
<script src="{{asset('admin-press\assets\plugins\sweetalert\sweetalert.min.js')}}"></script>
<!-- Style switcher -->
<script src="{{asset('admin-press\assets\js\app.js')}}"></script>


<script>
    var editor_config = {
      path_absolute : "/",
      selector: 'textarea.my-editor',
      relative_urls: false,
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      file_picker_callback : function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
  
        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }
  
        tinyMCE.activeEditor.windowManager.openUrl({
          url : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no",
          onMessage: (api, message) => {
            callback(message.content);
          }
        });
      }
    };
  
    tinymce.init(editor_config);
  </script>