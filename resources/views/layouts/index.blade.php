<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

@stack('before-style')
@include('includes.style')
@stack('after-style')

<body>
    @include('includes.sidebar')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        @include('includes.navbar')
        <!-- Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
