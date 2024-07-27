<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.homecss')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
      </div>

      <div style="text-align: center;" class="col-md-12">
        <div><img style="margin-bottom: 10px; padding:20px; height:400px; width:550px; margin:auto;" src="/postimage/{{ $post->image }}"></div>
        <h3><b>{{ $post->title }}</b></h3>
        <h4>{{ $post->description }}</h4>
        <p>Posted by <b style="color: red;">{{ $post->name }}</b></p>
        <div class="btn_main"><a href="{{ url('/')}}">HOME</a></div>
     </div>



      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      @include('home.copyright')
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('home.scripts')
   </body>
</html>