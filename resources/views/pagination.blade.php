@if ($paginator->lastPage() > 1)
<div class="row pagination-wrap">
    <div class="col-full">
        <nav class="pgn" data-aos="fade-up">
            <ul>
                <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                    <a href="{{ $paginator->url(1) }}" class="pgn__prev">Previous</a>
                </li>
                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    <li>
                        <a href="{{ $paginator->url($i) }}" class="pgn__num {{ ($paginator->currentPage() == $i) ? ' current' : '' }}">{{ $i }}</a>
                    </li>
                    @endfor
                    <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                        <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="pgn__next">Next</a>
                    </li>
            </ul>
            @endif
            <div class="row pagination-wrap">
                <div class="col-full">
