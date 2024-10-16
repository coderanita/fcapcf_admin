<div>
    <div class="carousel vertical slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row g-2">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0 text-white">Project Stat.</h6>
                            {{-- <a class="text-decoration-underline text-secondary small" href="">View</a> --}}
                        </div>
                    </div>
                    @foreach ($statuses as $status)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="card">
                            <div class="card-body">
                                <p class="small text-uppercase mb-2 text-muted">{{$status->name}}
                                </p>
                                <h5 class="mb-0">{{ $statusCounts[$status->id] ?? 0 }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
