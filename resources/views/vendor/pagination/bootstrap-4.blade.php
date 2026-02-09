<style>
    /* Styling Pagination */
    .custom-pagination .page-link {
        color: #47245c;
        /* Warna ungu untuk teks */
        border: none;
        /* Menghilangkan border */
    }

    .custom-pagination .page-link:hover {
        background-color: #47245c;
        /* Warna ungu saat hover */
        color: #ffffff;
        /* Warna teks putih saat hover */
        border-radius: 5px;
        /* Membulatkan sudut */
    }

    .custom-pagination .page-item.active .page-link {
        background-color: #47245c;
        /* Background warna ungu untuk halaman aktif */
        color: #ffffff;
        /* Warna teks putih */
        border-radius: 5px;
        /* Membulatkan sudut */
    }

    /* Styling Icon Pagination */
    .custom-pagination .page-item .page-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        padding: 0;
    }
</style>

@if ($paginator->hasPages())
    <nav>
        <ul class="pagination custom-pagination">
            {{-- Tombol Previous --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Halaman --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Tombol Next --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
