<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
        
        <!-- Styles -->
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <!-- STYPLES FOR CLIENT -->    
        <!-- ======================================================================================================================== -->        
        <!-- Favicon  -->
        <link rel="icon" href="../../assets/img/core-img/favicon.ico">
        <!-- Core Style CSS -->
        <link rel="stylesheet" href="../../assets/css/core-style.css">
        <link rel="stylesheet" href="../../assets/style.css">
        <!-- Responsive CSS -->
        <link href="../../assets/css/responsive.css" rel="stylesheet">
        <!-- ======================================================================================================================== -->


        <!-- STYPLES FOR ADMIN -->  
        <!-- ======================================================================================================================== -->
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/admin/images/favicon.png" />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/admin/libs/select2/dist/css/select2.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/admin/libs/jquery-minicolors/jquery.minicolors.css" />
        <link rel="stylesheet" type="text/css" href="/assets/admin/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/admin/libs/quill/dist/quill.snow.css" />
        <link rel="stylesheet" type="text/css" href="/assets/admin/extra-libs/multicheck/multicheck.css" />
        <link href="/assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
        <link href="/assets/admin/dist/css/style.min.css" rel="stylesheet" />
        <!-- ======================================================================================================================== -->

    </head>
    <body>
        <div id="app">
          <example-component></example-component>
        </div>
        
        <!-- Script -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

        <!-- SCRIPTS FOR CLIENT -->
        <!-- ======================================================================================================================== -->
            <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="../../assets/js/jquery/jquery-2.2.4.min.js"></script>
            <!-- Popper js -->
        <script src="../../assets/js/popper.min.js"></script>
            <!-- Bootstrap js -->
        <script src="../../assets/js/bootstrap.min.js"></script>
            <!-- Plugins js -->
        <script src="../../assets/js/plugins.js"></script>
            <!-- Active js -->
        <script src="../../assets/js/active.js"></script>
        <!-- ======================================================================================================================== -->

        <!-- SCRIPTS FOR ADMIN -->  
        <!-- ======================================================================================================================== -->
        <script src="/assets/admin/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="/assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="/assets/admin/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="/assets/admin/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/assets/admin/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="/assets/admin/dist/js/custom.min.js"></script>
        <!-- This Page JS -->
        <script src="/assets/admin/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <script src="/assets/admin/dist/js/pages/mask/mask.init.js"></script>
        <script src="/assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
        <script src="/assets/admin/libs/select2/dist/js/select2.min.js"></script>
        <script src="/assets/admin/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
        <script src="/assets/admin/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
        <script src="/assets/admin/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
        <script src="/assets/admin/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
        <script src="/assets/admin/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="/assets/admin/libs/quill/dist/quill.min.js"></script>
        <script src="/assets/admin/extra-libs/multicheck/datatable-checkbox-init.js"></script>
        <script src="/assets/admin/extra-libs/multicheck/jquery.multicheck.js"></script>
        <script src="/assets/admin/extra-libs/DataTables/datatables.min.js"></script>
        <!-- ======================================================================================================================== -->

    </body>
</html>