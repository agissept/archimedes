@extends('layouts.master')
@section('content')


<style type="text/css" media="screen">
    .s-styles {
        background: #f0f0f0;
        padding-top: 16.2rem;
        padding-bottom: 12rem;
    }

    .s-styles .section-intro h1 {
        margin-top: 0;
    }

</style>


<section id="styles" class="s-styles">

    <div class="row narrow section-intro add-bottom text-center">
        <div class="col-twelve tab-full">
            <h1 class="display-1 display-1--with-line-sep">Gallery</h1>
        </div>
    </div>

    <div class="row half-bottom">
        <div class="col-six tab-full">
            <h3 class="add-bottom">Responsive Image</h3>
            <p><img src="images/wheel-500.jpg" srcset="images/wheel-1000.jpg 1000w, 
                                images/wheel-500.jpg 500w"
                    sizes="(max-width: 1000px) 100vw, 1000px" alt=""></p>
        </div>

        <div class="col-six tab-full">
            <h3 class="add-bottom">Responsive video</h3>
            <div class="video-container">
                <iframe src="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39"
                    width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
        </div>

        <div class="row half-bottom">
            <div class="col-six tab-full">
                <h3 class="add-bottom">Responsive Image</h3>
                <p><img src="images/wheel-500.jpg" srcset="images/wheel-1000.jpg 1000w, 
                                images/wheel-500.jpg 500w"
                        sizes="(max-width: 1000px) 100vw, 1000px" alt=""></p>
            </div>
        </div>
    </div>

</section>

@endsection
