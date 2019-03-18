@extends('layouts.master')
@section('content')

<section class="s-content s-content--top-padding">

    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1 class="display-1 display-1--with-line-sep">Article Post</h1>
        </div>
    </div>

    <div class="row entries-wrap add-top-padding wide">
        <div class="entries">
            @foreach ($posts as $post)

            <article class="col-block">
                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a href="/detail-post/{{$post->id}}" class="item-entry__thumb-link">
                            <img src="{{ Voyager::image($post->image) }}">
                        </a>
                    </div>
                    <div class="item-entry__text">
                        <div class="item-entry__cat">
                            <a href="category.html">Design</a>
                        </div>
                        <h1 class="item-entry__title"><a href="/detail-post/{{$post->id}}">{{ $post->title }}</a></h1>
                        <div class="item-entry__date">
                            <a href="/detail-post/{{$post->id}}">{{ date_format($post->updated_at, 'F, d Y' ) }}</a>
                        </div>
                    </div>
                </div>
            </article>
            
            @endforeach
        </div>
    </div>

    {{ $posts->links('pagination') }}


</section>
@endsection
