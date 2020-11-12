<!DOCTYPE html>
<html>
@include('includes.head')

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('includes.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('includes.sidebar')
        <!-- /.sidebar -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- @yield('content-header') -->
            <section class="content-header">
                <h1>
                    Página em branco
                </h1>
            </section>
            <!-- /.Content Header -->

            <!-- Main content -->
            <section class="content">
                <!-- @yield('content') -->
                <!-- Main content -->
                <section class="content">
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Título</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            Comece a criar seu aplicativo incrível!
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            Rodapé
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('includes.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">

            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab"></div>
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    @include('includes.js')
</body>

</html>