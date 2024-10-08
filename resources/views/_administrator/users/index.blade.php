<x-app-layout title="System Users" sub_title="Users list">
  @livewire('administrator.users.create-user')
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

              @isset($roleName)
                @livewire('administrator.users.manage-user', ['roleName' => $roleName])
              @else
                @livewire('administrator.users.manage-user')
              @endisset

            </div>
          </div>
        </div>




      </div> <!-- .row end -->
    </div>

  </div>

</x-app-layout>
