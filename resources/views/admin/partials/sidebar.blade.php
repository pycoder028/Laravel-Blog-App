@php
    $id = Auth::user()->id;
    $profileData = App\Models\User::find($id);
@endphp

<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="https://avatars.githubusercontent.com/u/127476745?v=4" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">{{ $profileData->name }}</h1>
        <p>Sr. Manager</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
            <li><a href="{{ url('post_page') }}"> <i class="icon-grid"></i>Add Post</a></li>
            <li><a href="{{ url('show_post') }}"> <i class="fa fa-bar-chart"></i>Show Post </a></li>
            <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
    </ul><span class="heading">Extras</span>
    <ul class="list-unstyled">
      <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
      <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
    </ul>
</nav>