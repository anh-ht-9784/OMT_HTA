@if ($paginator->hasPages())
<style>
    .pagination .page-link{
       background-color:rgb(194, 189, 189) !important;
    }
    .pagination .page-link:hover{
       background-color:rgb(43, 127, 223) !important;
    }
    .pagination{
        margin-top:2rem;
    }
    .active .page-link{
        background-color:rgb(34, 126, 231) !important;
    }
</style>
<nav aria-label="Page navigation example" >
    <ul class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">@lang('frontend.previous')</a>
            </li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">@lang('frontend.previous')</a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled">{{ $element }}</li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a class="page-link ">{{ $page }}</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('frontend.next')</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link" href="#">@lang('frontend.next')</a>
            </li>
        @endif
    </ul>
@endif