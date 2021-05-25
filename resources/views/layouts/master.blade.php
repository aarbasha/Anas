<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.css')
</head>

<body>

    <div class="wrapper">

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>



            @include('layouts.navbar')

            @include('layouts.sidebar')

                <!-- main-content -->
                @yield('content')
                <!--=================================

                @include('layouts.footer')
                <!-- Footer closed -->
    </div>

        @include('layouts.js')


</body>

</html>
