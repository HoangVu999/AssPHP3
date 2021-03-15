@extends('client.layouts.main')
@section('content-main')
<div class="container">
    <div class="loop-list loop-list-style-1">
        <div class="row">
            @foreach ($postItemNew as $item)
            <article class="col-md-6 mb-40 wow fadeInUp  animated">
                <div class="post-card-1 border-radius-10 hover-up">
                    <div class="post-thumb thumb-overlay img-hover-slide position-relative">
                        <a class="img-link" href="{{route('post.detail', ['id' => $item->id])}}">
                            <img src="{{ asset('storage/postImage/' . $item->image) }}" alt="" class="post-thumb thumb-overlay img-hover-slide position-relative" width="538">
                        </a>
                    </div>
                    <div class="post-content p-30">
                        <div class="entry-meta meta-0 font-small mb-10">
                            <a href="javascript:;"><span class="post-cat text-info">{{ $item->author }}</span></a>
                        </div>
                        <div class="d-flex post-card-content">
                            <h5 class="post-title mb-20 font-weight-900">
                                <a href="{{route('post.detail', ['id' => $item->id])}}">{{ $item->title }}</a>
                            </h5>
                            <div class="post-excerpt mb-25 font-small text-muted">
                                <p>{{ $item->short_desc }}</p>
                            </div>
                            {{-- <span class="hit-count has-dot">{{$totalViews}} Views</span> --}}
                        </div>
                    </div>
                </div>
            </article>    
            @endforeach
        </div>
    </div>
    <div class="row mt-50">
        <div class="col-12">
            <div class="pagination-area mb-30 wow fadeInUp animated">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        {{$postItemNew->links()}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>        <!-- End feature -->
@endsection
