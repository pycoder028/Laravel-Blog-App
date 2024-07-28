<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.homecss')
    <style type="text/css">
    .post_deg{
        padding: 30px;
        text-align: center;
    }
    .title_deg{
        font-size: 30px;
        font-weight: bold;
        padding: 15px;
        color: white;
    }
    .desc_deg{
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
        color: whitesmoke;
    }
    .img_deg{
        height: 200px;
        width: 300px;
        padding: 30px;
        margin:auto;
    }
    </style>
   </head>
   <body>
    @include('sweetalert::alert')
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif
        @foreach ($data as $data)
        <div class="post_deg">
            <img class="img_deg" src="/postimage/{{ $data->image }}" alt="">
            <h4 class="title_deg">{{ $data->title }}</h4>
            <p class="desc_deg">{{ $data->description }}</p>

            <a onclick="return confirm('Are you sure to delete this?')" href="{{ url('my_post_del',$data->id) }}" class="btn btn-outline-danger">Delete</a>

        </div>
        @endforeach


      
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      @include('home.copyright')
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('home.scripts')
   </body>
</html>