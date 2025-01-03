@props(['title'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <x-meta-tags />
    <!-- Scripts -->

    @stack('styles')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Jquery Core Js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Styles -->
    <!-- Application vendor css url -->
    <link rel="stylesheet" href="{{ asset('cssbundle/dataTables.min.css') }}">
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('css/avio-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastify.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cssbundle/summernote.min.css') }}">
    <style>
        .modal-open .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.5) !important;
            opacity: 1 !important;
        }
    </style>

</head>

<body data-avio="theme-indigo">
    <div class="avio">
        @livewire('navigation-menu')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Start:: footer link and more -->
        <div class="page-footer bg-card mt-4">
            <div class="container-fluid">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-2">
                    <p class="col-md-5 mb-0 text-muted">© 2024 <a href="javascript:void(0)">First Child & Prisoner Care
                            Foundation</a>. <span class="fa fa-heart text-danger"></span> </p>
                    {{-- <ul class="nav col-md-7 justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Support</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Purchase</a></li>
                    </ul> --}}
                </footer>
            </div>
        </div>
        @livewireScripts
        <script type='text/javascript' src="{{ asset('js/toastify-js.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script>
            window.addEventListener('alert', (event) => {
                let data = event.detail;
                Toastify({
                    text: data.msg,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    className: "bg-" + data.type,
                }).showToast();
            });


            function copyToClipboard(text) {
                navigator.clipboard.writeText(text);
                Toastify({
                    text: 'Copied : ' + text,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    className: "bg-success",
                }).showToast();

            }
        </script>

        @if (session('message'))
            <script>
                Toastify({
                    text: "Staff successfully added",
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    className: "bg-success",
                }).showToast();
            </script>
        @endif

        @stack('scripts')
</body>

</html>
