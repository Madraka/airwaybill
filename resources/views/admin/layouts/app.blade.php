<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="x-ua-compatible" content="ie=edge">

     <title>@yield('title')</title>
     <link rel="icon" type="image/png" href="{{ asset('/assets/images/settings/'. $sitesetting->favicon) }}"/>
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/fontawesome-free/css/all.min.css">
     <!-- overlayScrollbars -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/dist/css/adminlte.min.css">
     <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
     <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Other package css -->
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
     <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
     <!-- custom css -->
     <link rel="stylesheet" href="{{ asset('assets/admin') }}/dist/css/admin.css">
     <link rel="stylesheet" href="{{ asset('css/print.min.css') }}">
     <style>
          .w-90{
               width:90% !important;
          }
     </style>
     @yield('style')

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
     <div class="wrapper">
          <div id="app">
          <!-- Navbar -->
          @include('admin.layouts.header')
          <!-- /.navbar -->

          <!-- Main Sidebar Container -->
          @include('admin.layouts.sidebar')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
               @yield('content')
          </div>
          <!-- /.content-wrapper -->

          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
               <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->

          <!-- Main Footer -->
          @include('admin.layouts.footer')
          </div>
     </div>
     <!-- ./wrapper -->

     <!-- REQUIRED SCRIPTS -->
     <!-- jQuery -->
     <script src="{{ asset('assets/admin') }}/plugins/jquery/jquery.min.js"></script>
     <!-- Bootstrap -->
     <script src="{{ asset('assets/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

     <script src="/js/app.js"></script>
     <!-- overlayScrollbars -->
     <script src="{{ asset('assets/admin') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('assets/admin') }}/dist/js/adminlte.js"></script>
     <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

     <!-- OPTIONAL SCRIPTS -->
     <script src="{{ asset('assets/admin') }}/dist/js/demo.js"></script>

     <!-- PAGE PLUGINS -->
     <!-- jQuery Mapael -->
     <script src="{{ asset('assets/admin') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
     <script src="{{ asset('assets/admin') }}/plugins/raphael/raphael.min.js"></script>
     <script src="{{ asset('assets/admin') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
     <script src="{{ asset('assets/admin') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
     <!-- ChartJS -->
     <script src="{{ asset('assets/admin') }}/plugins/chart.js/Chart.min.js"></script>

     <!-- PAGE SCRIPTS -->
     <script src="{{ asset('assets/admin') }}/dist/js/pages/dashboard2.js"></script>

     <!-- Other plugins -->
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
     <script>
     $(document).ready(function() {
          $('#datatable').DataTable();
     });
     </script>
     <script>
     $(document).ready(function() {
          $('#summernote').summernote();
          $('#summernote2').summernote();
     });
     </script>
     <script>
     // Display a success toast, with a title
     @if(Session::has('success'))    
          toastr.success("{{ Session::get('success') }}",'Success')  
     @endif
     // Display a Warning toast, with a title
     @if(Session::has('warning'))    
          toastr.warning("{{ Session::get('warning') }}",'Warning')  
     @endif
     // Display a Error toast, with a title
     @if(Session::has('error'))    
           toastr.error("{{ Session::get('error') }}",'Error')  
     @endif
     </script>
     {{--<script>--}}
          {{--var i =1;--}}
          {{--$(document).ready(function() {--}}
              {{--//Try to get tbody first with jquery children. works faster!--}}
          {{--var tbody = $('#myTable').children('tbody');--}}

          {{--//Then if no tbody just select your table--}}
          {{--var table = tbody.length ? tbody : $('#myTable');--}}
          {{--table.append('<tr><td>'+i+'</td><td><input class="form-control w-90" type="number" name="length[]"/></td><td><input class="form-control w-90" type="number" name="breadth[]"/></td><td><input class="form-control w-90" type="number" name="height[]"/></td></tr>');--}}


          {{--$('#add-row').click(function(){--}}
          {{--i = i+1;--}}
          {{--//Add row--}}
          {{--table.append('<tr><td>'+i+'</td><td><input class="form-control w-90" type="number" name="length[]"/></td><td><input class="form-control w-90" type="number" name="breadth[]"/></td><td><input class="form-control w-90" type="number" name="height[]"/></td><td>   <button id="delete-row" type="button">Delete row</button></td></tr>');--}}
          {{--})--}}
          {{--});--}}
          {{--$("#delete-row").click(function(){--}}
              {{--alert("working");--}}
              {{--$("table tbody").find('input[name="length"]').each(function(){--}}
                      {{--$(this).parents("tr").remove();--}}
              {{--});--}}
          {{--});--}}
        {{--</script>--}}

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script>
     var service_id = $('input[name="service_id"]:checked').val();
     getAwb(service_id)
     function getAwb(id) {
        $.ajax({
           type:'GET',
           url:'/atlas/admin/awb/'+id,
           success:function(data) {
               $('input[name="awb_no"]').val(data)  
           }
        });
     }
  </script>
  <script>
       function getref(cusId){
          $.ajax({
           type:'GET',
           url:'/atlas/admin/cus_ref/'+cusId,
           success:function(data) {
               $('input[name="customer_reference"]').val(data) 
           }
        });
       }
  </script>
  <script src = "{{asset('js/print.min.js')}}">
  </script>
  <script>
       function print(){
          printJS({
               printable: "{{asset('/images/fedex_test.jpeg')}}", type: 'image',
               })
       }
  </script>
</body>

</html>