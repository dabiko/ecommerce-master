<!DOCTYPE html>
<html lang="en">
 @include('frontend.dashboard.layouts.head-script')
<body>

@include('frontend.dashboard.layouts.header')

<!--=============================
  DASHBOARD START
==============================-->
<section id="wsus__dashboard">
    <div class="container-fluid">
        @include('frontend.dashboard.layouts.side-bar')

        <div class="row">
            <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">

                @yield('content')

            </div>
        </div>
    </div>
</section>
<!--=============================
  DASHBOARD START
==============================-->

@include('frontend.dashboard.layouts.foot-script')
</body>

</html>
