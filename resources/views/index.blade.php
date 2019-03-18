@extends('layouts.master')
@section('content')

<section class="s-featured">
    <div class="row">
        <div class="col-full">
            <div class="featured-slider featured" data-aos="zoom-in">

                @foreach ($postsSlide as $postSlide)
                <div class="featured__slide">
                    <div class="entry">
                        <div class="entry__background" style="background-image:url('{{ Voyager::image($postSlide->image) }}');"></div>
                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">Article Post</a></span>
                            <h1><a href="#0" title="">{{$postSlide->title}}</a></h1>
                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <img class="avatar" src="{{ Voyager::image($postSlide->authorId->avatar) }}" alt="">
                                </a>
                                <ul class="entry__meta">
                                    <li><a href="#0">{{ $postSlide->authorId->name }}</a></li>
                                    <li>{{ date_format($postSlide->updated_at, 'F, d Y' ) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section class="s-content">
    <div class="row entries-wrap wide">
        <div class="entries">

            @foreach ($postAll as $post)
            <article class="col-block">
                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a href="/detail-post/{{$post->id}}" class="item-entry__thumb-link">
                            <img src="{{ Voyager::image($post->image) }}" alt="">
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
    {{ $postAll->links('pagination') }}
</section>

@endsection
