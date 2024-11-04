<x-app-layout title="" sub_title="">

    <x-breadcrumb title="" sub_title="Support">

    </x-breadcrumb>


    <!-- start: page body -->
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="inbox d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">
                            <ul class="menu-list list-unstyled mb-0">
                                <li><a class="m-link pt-0" href="{{ route('administrator.support.create') }}"><span
                                            class="btn bg-secondary text-light w-100 mb-3">New Message</span></a>
                                </li>
                                <li><a class="m-link active" href="{{ route('administrator.supports') }}"><i
                                            class="fa fa-inbox"></i><span>Inbox</span></a></li>
                                <li><a class="m-link" href="#"><i class="fa fa-send"></i><span>Sent</span><span
                                            class="badge bg-light text-dark ms-2 ms-auto">{{ $supportCount }}</span></a>
                                </li>
                            </ul>
                        </div>
                        @if (Route::is(['administrator.supports']))
                            <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <div class="card">
                                            @livewire('administrator.supports.manage')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif (Route::is('administrator.supports.details'))
                            @livewire('administrator.supports.view')
                        @else
                            @livewire('administrator.supports.create')
                        @endif
                    </div>
                    <script>
                        $('.inbox .inbox-list-toggle').on('click', function() {
                            $('.inbox .order-1').toggleClass('open');
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
