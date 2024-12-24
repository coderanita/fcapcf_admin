<x-app-layout title="" sub_title="">


    <x-breadcrumb title="" sub_title="Announcements">
        <x-slot name="page_action">
            <div class="page-action">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle after-none rounded-pill" data-bs-toggle="dropdown">
                        <span class="me-1 d-none d-lg-inline-block">Filter</span>
                        <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 1.00018C0 0.867575 0.0526784 0.740398 0.146447 0.64663C0.240215 0.552862 0.367392 0.500183 0.5 0.500183H12.5C12.6326 0.500183 12.7598 0.552862 12.8536 0.64663C12.9473 0.740398 13 0.867575 13 1.00018V3.00018C13 3.12349 12.9544 3.24244 12.872 3.33418L8.5 8.19218V13.0002C8.49992 13.1051 8.46685 13.2073 8.40547 13.2924C8.3441 13.3774 8.25752 13.441 8.158 13.4742L5.158 14.4742C5.08287 14.4992 5.00288 14.506 4.9246 14.4941C4.84632 14.4821 4.772 14.4518 4.70775 14.4055C4.6435 14.3592 4.59116 14.2983 4.55504 14.2279C4.51893 14.1574 4.50006 14.0794 4.5 14.0002V8.19218L0.128 3.33418C0.0456082 3.24244 2.21504e-05 3.12349 0 3.00018V1.00018ZM1 1.50018V2.80818L5.372 7.66618C5.45439 7.75792 5.49998 7.87688 5.5 8.00018V13.3062L7.5 12.6402V8.00018C7.50002 7.87688 7.54561 7.75792 7.628 7.66618L12 2.80818V1.50018H1Z"
                                fill="white"></path>
                        </svg>
                    </button>
                    <ul class="dropdown-menu border-0 shadow">
                        <li>
                            <a class="dropdown-item" href="#" wire:click.prevent="sortBy('created_at')">By
                                Registration Date</a>
                        </li>
                    </ul>
                </div>

            </div>
        </x-slot>
    </x-breadcrumb>

    <!-- start: page body -->
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="inbox d-flex flex-nowrap align-items-start">
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card">
                                        @livewire('staff.announcements.manage')
                                    </div>
                                </div>
                            </div>
                        </div>
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
