<x-app-layout title="Capacity for which users will operate" sub_title="User Roles">
  @livewire('administrator.roles.create-role')
  <!-- start: page body -->
  <div class="page-body">
    <div class="container-fluid">
      <!-- .card: tab -->
      <div class="row">
        <div class="col-12">
        </div>
      </div> <!-- .row end -->
      <!-- .card: small widgets -->
      <div class="row g-3">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
              {{-- <livewire:administrator.roles.manage-role @saved="$refresh"> --}}
              @livewire('administrator.roles.manage-role')
            </div>
          </div>
        </div>




      </div> <!-- .row end -->
    </div>

  </div>

</x-app-layout>
