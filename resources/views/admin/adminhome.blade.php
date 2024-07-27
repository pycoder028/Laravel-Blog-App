<!DOCTYPE html>
<html>
  <head> 
    @include('admin.partials.css')
  </head>
  <body>
    @include('admin.partials.header')
    
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.partials.sidebar')
      <!-- Sidebar Navigation end-->
        @include('admin.partials.body')

        @include('admin.partials.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.partials.scripts')
  </body>
</html>