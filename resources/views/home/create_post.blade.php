<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.homecss')
    <style type="text/css">
        .post_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            color: rgb(240, 132, 132);
            margin-top: 20px;
        }
        .div_center{
            text-align: center;
            padding: 20px;
        }
        label{
            display: inline-block;
            width: 200px;
            color: white;
        }
        </style>
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->

      <div>
        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif
        <h2 class="post_title">Add Post</h2>
        <form action="{{ url('user_post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="div_center">
                <label>Post Title</label>
                <input type="text" name="title">
            </div>
            <div class="div_center">
                <label>Post Description</label>
                <textarea name="description" id="" cols="30" rows="3"></textarea>
            </div>
            <div class="div_center">
                <label>Add Image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input type="submit" class="btn btn-primary" value="Add Post">
            </div>
        </form>
      </div>
      
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