<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
  <x-meta-tags />
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- Jquery Core Js -->
  <script src="{{ asset('js/plugins.js') }}"></script>
  <!-- Styles -->
  @livewireStyles
  <!-- Application vendor css url -->
  <link rel="stylesheet" href="{{ asset('cssbundle/dataTables.min.css') }}">
  <!-- project css file  -->
  <link rel="stylesheet" href="{{ asset('css/avio-style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/toastify.min.css') }}">


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
          <ul class="nav col-md-7 justify-content-end">
            <li class="nav-item"><a href="dashboard.html#" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="dashboard.html#" class="nav-link px-2 text-muted">Support</a></li>
            <li class="nav-item"><a href="dashboard.html#" class="nav-link px-2 text-muted">Purchase</a></li>
          </ul>
        </footer>
      </div>
    </div>

    <script type='text/javascript' src="{{ asset('js/toastify-js.js') }}"></script>
    <script>
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
    @livewireScripts

    <!-- project js file url -->
    <!-- Jquery Page Js -->
    {{-- <script src="{{ asset('js/theme.js') }}"></script> --}}
    <!-- Plugin Js -->
    {{-- <script src="{{ asset('js/bundle/apexcharts.bundle.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/bundle/dataTables.bundle.js') }}"></script> --}}
    <!-- Jquery Page Js -->
    {{-- <script>
      // AVIO Revenue
      var options = {
        chart: {
          height: 260,
          type: 'line',
          toolbar: {
            show: false,
          },
        },
        colors: ['var(--chart-color1)', 'var(--chart-color5)'],
        series: [{
          name: 'Donations',
          type: 'line',
          data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
        }, {
          name: 'Support Given',
          type: 'line',
          data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }],
        stroke: {
          width: [2, 2]
        },
        labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001',
          '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'
        ],
        xaxis: {
          type: 'datetime'
        },
        yaxis: [{
          title: {
            text: 'Donations',
          },
        }, {
          opposite: true,
          title: {
            text: 'Support Given'
          }
        }]
      }
      var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
      chart.render();
      // Sales by Category
      var options = {
        chart: {
          height: 280,
          type: 'donut',
        },
        dataLabels: {
          enabled: false,
        },
        legend: {
          position: 'bottom',
          horizontalAlign: 'center',
          show: true,
        },
        colors: ['var(--chart-color1)', 'var(--chart-color2)'],
        series: [65, 35],
      }
      var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
      chart.render();
      // Uses of Energy
      $(document).ready(function() {
        var options = {
          chart: {
            height: 335,
            type: 'heatmap',
            toolbar: {
              show: false,
            },
          },
          dataLabels: {
            enabled: false
          },
          grid: {
            padding: {
              right: 0
            }
          },
          colors: ["#ffc122"],
          series: [{
            name: 'Kitchen',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Apple Tv',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Sound Ststem',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Air Conditioner',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Fridge',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Washing Machine',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Bath Room',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Garden',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }, {
            name: 'Store Room',
            data: generateHeatmapData(8, {
              min: 0,
              max: 90
            })
          }],
        }
        var chart = new ApexCharts(document.querySelector("#apex-UsesofEnergy"), options);

        function generateHeatmapData(count, yrange) {
          var i = 0;
          var series = [];
          while (i < count) {
            var x = 'D' + (i + 1).toString();
            var y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
            series.push({
              x: x,
              y: y
            });
            i++;
          }
          return series;
        }
        chart.render();
      });
    </script> --}}
</body>

</html>
