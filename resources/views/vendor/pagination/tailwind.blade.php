@if ($paginator->hasPages())
    <div style="display: flex; align-items: center; justify-content: center; gap: 30px; padding: 20px 0;">
        {{-- Results Summary --}}
        <div style="color: #666; font-size: 14px; font-family: system-ui, -apple-system, sans-serif;">
            Showing <span style="font-weight: 600; color: #0a2a20;">{{ $paginator->firstItem() ?? 0 }}</span> to 
            <span style="font-weight: 600; color: #0a2a20;">{{ $paginator->lastItem() ?? 0 }}</span> of 
            <span style="font-weight: 600; color: #0a2a20;">{{ $paginator->total() }}</span> results
        </div>

        {{-- Navigation Controls --}}
        <div style="display: flex; align-items: center; gap: 8px;">
            {{-- Previous Page Button --}}
            @if ($paginator->onFirstPage())
                <button disabled style="display: inline-flex; height: 40px; padding: 0 16px; cursor: not-allowed; align-items: center; justify-content: center; border-radius: 8px; border: 1px solid #e5e7eb; background-color: #f9fafb; color: #9ca3af; font-size: 14px; font-weight: 500; transition: all 0.2s;">
                    ← Previous
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" style="display: inline-flex; height: 40px; padding: 0 16px; align-items: center; justify-content: center; border-radius: 8px; border: 1px solid rgba(232, 169, 12, 0.4); background-color: white; color: #0a2a20; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.2s; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    ← Previous
                </a>
            @endif

            {{-- Page Numbers --}}
            <div style="display: flex; align-items: center; gap: 4px;">
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <span style="display: inline-flex; height: 40px; width: 40px; align-items: center; justify-content: center; border-radius: 8px; border: 1px solid #e5e7eb; background-color: white; color: #6b7280; font-size: 14px; font-weight: 500;">
                            ...
                        </span>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <span style="display: inline-flex; height: 40px; width: 40px; cursor: default; align-items: center; justify-content: center; border-radius: 8px; background-color: #0f3b2e; color: white; font-size: 14px; font-weight: 600; box-shadow: 0 2px 4px rgba(15, 59, 46, 0.3);">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" style="display: inline-flex; height: 40px; width: 40px; align-items: center; justify-content: center; border-radius: 8px; border: 1px solid rgba(232, 169, 12, 0.4); background-color: white; color: #0a2a20; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.2s; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                                    {{ $page }}
                                </a>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>

            {{-- Next Page Button --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" style="display: inline-flex; height: 40px; padding: 0 16px; align-items: center; justify-content: center; border-radius: 8px; border: 1px solid rgba(232, 169, 12, 0.4); background-color: white; color: #0a2a20; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.2s; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    Next →
                </a>
            @else
                <button disabled style="display: inline-flex; height: 40px; padding: 0 16px; cursor: not-allowed; align-items: center; justify-content: center; border-radius: 8px; border: 1px solid #e5e7eb; background-color: #f9fafb; color: #9ca3af; font-size: 14px; font-weight: 500; transition: all 0.2s;">
                    Next →
                </button>
            @endif
        </div>
    </div>
@endif 