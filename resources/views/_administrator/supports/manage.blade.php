<div>
    <div class="card-header bg-body px-3">
        <div class="d-flex flex-wrap flex-grow-1 align-items-center">
            <div class="form-check mb-0 me-lg-3 me-2">
                {{-- <input class="form-check-input" type="checkbox" value="" id="checkall"> --}}
                <label class="form-check-label" for="checkall">{{ $status }}</label>
            </div>
            <button class="btn btn-sm btn-outline-secondary" type="button"><i class="fa fa-refresh"></i></button>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-muted me-2">{{ $supports->firstItem() }}-{{ $supports->lastItem() }} of
                {{ $supports->total() }}</span>
            <button class="btn btn-sm btn-outline-secondary" wire:click="previousPage"
                {{ $supports->onFirstPage() ? 'disabled' : '' }}><i class="fa fa-angle-left"></i></button>
            <button class="btn btn-sm btn-outline-secondary" wire:click="nextPage"
                {{ !$supports->hasMorePages() ? 'disabled' : '' }}><i class="fa fa-angle-right"></i></button>
            <button class="btn btn-sm d-block d-lg-none btn-primary inbox-list-toggle ms-3" type="button"><i
                    class="fa fa-bars"></i></button>
        </div>
    </div>

    <ul class="list-group list-group-flush list-group-custom">
        @forelse ($supports as $support)
            <li class="row g-0 list-group-item d-flex align-items-start py-3">
                <div class="col-auto d-none d-sm-block">
                    <div class="d-flex align-items-center">
                        <div class="form-check mb-0">
                            <input class="form-check-input" type="checkbox" value="">
                        </div>
                        <a href="{{ route('administrator.supports.details', $support) }}" class="ms-2 me-3"><i
                                class="fa fa-star"></i></a>
                    </div>
                </div>
                <div class="col col-md-9 col-xxl-10">
                    <div class="row">
                        <div class="col-md-4 col-xl-4 col-xxl-3 mb-1 mb-md-0">
                            @if ($status == 'Sent')
                                <a href="{{ route('administrator.supports.details', $support) }}"
                                    class="d-flex text-primary text-truncate" title="">
                                    <div class="ms-2 mb-0">{{ $support->email }}</div>
                                </a>
                            @else
                                <a href="{{ route('administrator.support.edit', $support) }}"
                                    class="d-flex text-primary text-truncate" title="">
                                    <div class="ms-2 mb-0">{{ $support->email }}</div>
                                </a>
                            @endif
                        </div>
                        <div class="col">
                            <p class="i-msg mb-0 text-muted">{!! $support->message !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-auto ms-auto d-flex flex-column justify-content-between small small">
                    {{ \Carbon\Carbon::parse($support->created_at)->format('M j') }}
                </div>
            </li>
        @empty
            <li class="list-group-item text-center">No support tickets available.</li>
        @endforelse
    </ul>

</div>
