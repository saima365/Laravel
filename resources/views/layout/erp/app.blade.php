
@include("layout.erp.partials.header")
            <!-- page wrapper -->
            <div class="adminuiux-wrap">

                <!-- Standard sidebar -->
                <!-- Standard sidebar -->
@include("layout.erp.partials.sidebar")

@yield("content")

            </div>

            <!-- page footer -->
            <!-- standard footer -->
@include("layout.erp.partials.footer")



<!-- theming action-->
@include("layout.erp.partials.personalize")


<script src="{{ asset('assets/js/component/component-dataTable.js') }}"></script>
