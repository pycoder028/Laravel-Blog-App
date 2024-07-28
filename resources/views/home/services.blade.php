<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Blog Posts</h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">
            @foreach ($post as $post)
             <div class="col-md-4 mb-5">
                <div><img style="margin-bottom: 10px;" src="/postimage/{{ $post->image }}" class="services_img"></div>
                <h4>{{ $post->title }}</h4>
                <p>Posted by <b style="color: red;">{{ $post->name }}</b></p>
                <div class="btn_main"><a href="{{ url('post_details',$post->id) }}">Read More</a></div>
             </div>
            @endforeach
          </div>
       </div>
    </div>
</div>