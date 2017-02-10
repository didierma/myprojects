<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')

<body>

<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    @include('layouts.partials.sidebarLeft')
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        @include('layouts.partials.verticalMenu')


        @yield('content')
        <!-- START PRELOADS -->
            <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
            <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
            <!-- END PRELOADS -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

@include('layouts.partials.logout_alert')

@include('layouts.partials.script')
</body>


</html>






