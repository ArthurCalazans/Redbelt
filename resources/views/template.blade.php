<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//PT"  "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    @include('comuns.head')
    <body>        
        @include('comuns.preloader')
        <div class="page" style="display: none">
            @yield('content')
            @include('comuns.footer')
        </div>            
        @include('comuns.bottom')
    </body>
</html>
