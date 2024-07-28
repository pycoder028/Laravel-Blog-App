<!DOCTYPE html>
<html>
  <head> 
    {{-- sweet alert cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{ session()->get('message') }}
        </div>
        @endif
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
                  <th style="color: white">Delete</th>
                  <th style="color: white">Edit</th>
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
                    <td><a href="{{ url('delete_post',$post->id) }}" class="btn btn-sm btn-danger" onclick="confirmation(event)">Delete</a></td>
                    <td><a href="{{ url('edit_post',$post->id) }}" class="btn btn-sm btn-success">Edit</a></td>
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

    {{-- sweet alert script --}}
    <script type="text/javascript">
    function confirmation(ev){
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');

      console.log(urlToRedirect);

      swal({
        title : "Are you sure to delete this ",
        text : "You won't be able to revert this delete",
        icon : 'warning',
        buttons : true,
        dangerMode : true,

      })
      .then((willCancel) => {
        if(willCancel){
          window.location.href = urlToRedirect;
        }
      });

    }
    </script>


  </body>
</html>