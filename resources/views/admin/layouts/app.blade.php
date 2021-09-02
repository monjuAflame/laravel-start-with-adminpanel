<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
        @include('admin.layouts.includes.header')
        <body class="hold-transition sidebar-mini layout-fixed dark-mode">
      
            @include('admin.layouts.includes.nav')
            @include('admin.layouts.includes.sidebar')
            
            <div class="content-wrapper">
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        @yield('page-title')
                    </div>
                </div>
                </section>
                <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        @yield('content')   
                    </div>
                </div>
                </section>
            </div>
        
            @include('admin.layouts.includes.footer')
            @include('admin.layouts.includes.scripts')
        
            @yield('js')
    </body>

</html>