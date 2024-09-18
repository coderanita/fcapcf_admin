<div>
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
              <table class="myDataTable table table-hover mb-0">
                <thead>
                  <tr>
                    <th>S/N</th>
                    <th>Name</th>
                    <th>Account Type</th>
                    <th>Assigned Program</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = $users->firstItem();
                @endphp

                  @foreach ($users     as $user)
                      
                  
                  <tr>
                    <td>  {{ $i++ }}</td>
                    <td>{{$user->fullName()}}</td>
                    <td>{{ucwords($user->role->name)}}</td>
                    <td><span class="badge bg-primary">MCA - Nasarawa</span></td>
                    <td>404-447-6013</td>
                    <td>
                      <button type="button" class="btn btn-link btn-sm" data-bs-toggle="modal"
                        data-bs-target="#add_user" title="Update User"><i class="fa fa-pencil"></i></button>
                      <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                      <a href="user-profile.html">
                        <button type="button" class="btn btn-link btn-sm" data-bs-toggle="tooltip"
                          data-bs-placement="top" title="View"><i class="fa fa-eye"></i></button>
                      </a>
                    </td>

                  </tr>

                  @endforeach
                </tbody>
              </table>

              <div class="mt-5">
                {{ $users->links() }}
              </div>
            </div>
          </div>
        </div>




      </div> <!-- .row end -->
    </div>
  </div>

</div>
@assets
  <script src="{{ asset('js/bundle/dataTables.bundle.js') }}"></script>
@endassets
@script
  <!-- Plugin Js -->
  <!-- Jquery Page Js -->
  <script>
    $('.myDataTable').addClass('nowrap').dataTable({
      responsive: true,
      searching: true,
      paging: false,
      ordering: true,
      info: false,
    });
    $('#myDataTable_no_filter').addClass('nowrap').dataTable({
      responsive: true,
      searching: false,
      paging: false,
      ordering: false,
      info: false,
    });
    $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
      $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
    });
  </script>
@endscript
