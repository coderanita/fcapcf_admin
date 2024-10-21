<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-meta-tags />
{{-- @livewireStyles --}}
<!-- project css file  -->
<link rel="stylesheet" href="{{ asset('css/avio-style.css') }}">
<!-- Jquery Core Js -->
<script src="{{ asset('js/plugins.js') }}"></script>

</head>

<body data-avio="theme-indigo">
  <!-- start: body area -->
  <div class="avio">
    <!-- Start:: main page body area -->
    <div class="page-body auth">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="card shadow p-4 p-md-5 m-auto" style="max-width: 32rem;">
              {{-- <x-validation-errors class="mb-4" /> --}}

              @session('status')
                <div class="mb-4 font-medium text-sm text-success">
                  {{ $value }}
                </div>
              @endsession
              {{ $slot }}

            </div>
          </div> <!-- End Row -->
        </div>
      </div>
    </div>
    {{-- @livewireScripts --}}
    <!-- Jquery Page Js -->
    <script src="{{ asset('js/theme.js') }}"></script>
    <!-- Plugin Js -->
</body>

</html>
