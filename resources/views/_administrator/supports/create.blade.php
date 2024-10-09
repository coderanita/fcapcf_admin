<div>
    <x-breadcrumb title="" sub_title="New Support"></x-breadcrumb>

    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="inbox">
                        <div class="d-flex flex-nowrap align-items-start">
                            <div class="order-1 sticky-lg-top shadow-sm">
                                <ul class="menu-list list-unstyled mb-0">
                                    <li><a class="m-link pt-0" href="{{ route('administrator.support.create') }}"><span
                                                class="btn bg-secondary text-light w-100 mb-3">New Message</span></a>
                                    </li>
                                    <li><a class="m-link active" href="{{ route('administrator.supports') }}"><i
                                                class="fa fa-inbox"></i><span>Inbox</span><span
                                                class="badge bg-light text-dark ms-2 ms-auto">{{count($count)}}</span></a></li>
                                    <li><a class="m-link" href="#"><i
                                                class="fa fa-send"></i><span>Sent</span></a></li>
                                </ul>
                            </div>
                            <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <a href="{{ route('administrator.supports') }}"><i class="fa fa-arrow-left me-2"></i>Back to
                                                    Inbox</a>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="card-title">New Message</h6>
                                                <div class="form-floating mb-1">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="Email To" wire:model="email">
                                                    <label>Email To</label>
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text"
                                                        class="form-control @error('subject') is-invalid @enderror"
                                                        placeholder="Subject" wire:model="subject">
                                                    <label>Subject</label>
                                                    @error('subject')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div wire:ignore>
                                                    <div class="summernote"></div>
                                                    <input type="hidden" wire:model="message" id="message"
                                                        class="form-control @error('message') is-invalid @enderror">
                                                </div>
                                                @error('message')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="card-body">
                                                <button type="button" class="btn btn-primary"
                                                    wire:click.prevent="save">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plugin Js -->
                    @push('scripts')
                        <script src="{{ asset('js/bundle/summernote.bundle.js') }}"></script>
                        <script>
                            // Initialize Summernote and sync with Livewire model
                            function initSummernote() {
                                $('.summernote').summernote({
                                    tabsize: 2,
                                    height: 300,
                                    callbacks: {
                                        onChange: function(contents, $editable) {
                                            // Update Livewire model
                                            console.log(contents);
                                            @this.set('message', contents);
                                        }
                                    }
                                });
                            }
                            $(document).ready(function() {
                                initSummernote();
                                Livewire.on('alert', () => {
                                    $('.summernote').summernote('code', ''); // Clears the content
                                });
                            });
                        </script>
                    @endpush
                </div>
            </div>
        </div>
    </div>
</div>
