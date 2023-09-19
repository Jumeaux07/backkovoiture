<div class="pagination">
    @if ($paginator->hasPages())
        <ul>
            {{-- Bouton "Page précédente" --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <button wire:click="previousPage" rel="prev" aria-label="@lang('pagination.previous')">Précédent</button>
                </li>
            @endif

            {{-- Boucle sur les pages --}}
            @foreach ($elements as $element)
                {{-- Si l'élément est une chaîne, il s'agit d'un lien vers une page --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Si l'élément est un tableau, il s'agit de liens de page --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><button wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Bouton "Page suivante" --}}
            @if ($paginator->hasMorePages())
                <li>
                    <button wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">Suivant</button>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    @endif
</div>
