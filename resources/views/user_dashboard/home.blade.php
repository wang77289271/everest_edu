<!DOCTYPE html>
<html lang="en">
    <head>
        @include('user_dashboard.css')
    </head>
    <body>
        <div class="wrapper">
            <div class="body-overlay"></div>
            <!-- Sidebar  -->
            @include('user_dashboard.sidebar')
            <!-- Page Content  -->
            <div id="content">
                <!-- header -->
                @include('user_dashboard.header')

                <div class="main-content">
                    @include('user_dashboard.body')
                </div>
            </div>
        </div>
        @include('user_dashboard.script')
    </body>
</html>