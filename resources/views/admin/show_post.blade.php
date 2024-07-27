<!DOCTYPE html>
<html>
  <head> 
    @include('admin.partials.css')
    <style type="text/css">
    .title_deg{
        font-size: 30px;
        font-weight: bold;
        color: white;
        padding: 30px;
        text-align: center;
    }
    .img_deg{
        height: 100px;
        width: 100px;
        padding: 10px;
    }
    </style>
  </head>
  <body>
    @include('admin.partials.header')
    
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
        @include('admin.partials.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <h1 class="title_deg">All Post</h1>
        <div class="container table-responsive"> 
            <table class="table table-striped">
              <thead>
                <tr style="background-color: rgb(141, 55, 55);">
                  <th style="color: white">Post Title</th>
                  <th style="color: white">Description</th>
                  <th style="color: white">Posted by</th>
                  <th style="color: white">Post Status</th>
                  <th style="color: white">UserType</th>
                  <th style="color: white">Image</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($post as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->post_status }}</td>
                    <td>{{ $post->usertype }}</td>
                    <td>
                        <img class="img_deg" src="postimage/{{ $post->image }}" alt="">
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
      </div>

        @include('admin.partials.footer')
    </div>
    <!-- JavaScript files-->
    @include('admin.partials.scripts')
  </body>
</html>