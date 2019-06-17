@push('scripts')
    <script>
        $("#preloader").css('top',$(document).height()/2);
        $(document).ready(function(){
            $(".page").show(1000);
            $("#preloader").remove();
        });
    </script>
@endpush
<div id="preloader">
    <div class="progress">
        <div class="indeterminate"></div>
    </div>
</div>