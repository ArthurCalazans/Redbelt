<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('select').formSelect();
  });
  </script>
@stack('scripts')
