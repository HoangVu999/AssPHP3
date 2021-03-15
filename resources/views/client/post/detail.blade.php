@extends('client.layouts.main')
@section('content-main')
<main class="bg-grey pb-30">
    <div class="container single-content">
        <div class="entry-header entry-header-style-1 mb-50 pt-50">
            <h1 class="entry-title mb-50 font-weight-900" id="post__title">{{$post->title}}  
                <span style="float: right; font-size: 15px; font-family: 'Courier New', Courier, monospace" class="">  {{$totalViews}} Views</span></h1>
        </div>
        <!--end single header-->
        <figure class="image mb-30 m-auto text-center border-radius-10" id="image__post">
            <img class="border-radius-10" src="{{ asset('storage/postImage/' . $post->image) }}" alt="post-title" width="1000px" height="600px">
        </figure>
        <!--figure-->
        <article class="entry-wraper mb-50">
            <div class="excerpt mb-30" id="excerpt">
                {!! $post->content !!}
            </div>
        </article>
    </div>
</main>
<div class="site-bottom pt-50 pb-50">
    <div class="container">
        <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
            <div class="widget-header-2 position-relative mb-30">
                <h5 class="mt-5 mb-30">Bài viết liên quan</h5>
            </div>
            <div class="carausel-3-columns">
                @foreach ($postCate as $item)
                <div class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                    <div class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                        <a class="color-white" href="{{route('post.detail', ['id' => $item->id])}}s">
                            <img src="{{ asset('storage/postImage/' . $item->image) }}" alt="">
                        </a>
                    </div>
                    <div class="post-content media-body">
                        <h6> <a href="{{route('post.detail', ['id' => $item->id])}}">{{ $item->title }}</a> </h6>
                        <p class="text-muted font-small">{{ $item->short_desc }}</p>
                    </div>
                </div>                
                @endforeach
            </div>
        </div>
    </div>
    <!--container-->
</div>
{{-- @section('page-script') --}}
{{-- <script>
    let increaseViewUrl = "{{route('post.detail')}}";
    const data = {
        id: {{$product->id}},
        _token: "{{csrf_token()}}"
    };
    setTimeout(() => {
        fetch(increaseViewUrl, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
        .then(responseData => responseData.json())
        .then(productObj => {
            console.log(productObj);
        })
    }, 3000);
</script> --}}
    
@endsection