<div>

    @livewire('administrator.project-document.create')
    <div class="page-body page-layout-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="file-manager d-flex flex-nowrap align-items-start">
                        <div class="order-1 sticky-lg-top shadow-sm">


                            <button type="button" class="btn bg-secondary text-light mb-3 w-100" data-bs-toggle="modal"
                                data-bs-target="#add_document">Create New</button>
                            <ul class="nav nav-tabs menu-list list-unstyled mb-0 border-0" role="tablist">

                                <li class="divider mt-4 py-2 border-top text-uppercase text-muted">
                                    <small>FOLDERS</small></li>
                                <li><a class="m-link" href="file-mamager#"><i
                                            class="fa fa-folder"></i><span>Images</span></a></li>
                                <li><a class="m-link" href="file-mamager#"><i
                                            class="fa fa-folder"></i><span>Documents</span></a></li>
                                <li><a class="m-link" href="file-mamager#"><i
                                            class="fa fa-folder"></i><span>Videos</span></a></li>
                            </ul>
                        </div>
                        <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="drive_mydrive" role="tabpanel">
                                    <div class="card mb-5">
                                        <div class="card-header">
                                            <h4 class="mb-0">My Drive</h4>
                                        </div>

                                    </div>
                                    <div class="row g-2 mt-5">
                                        <div class="col-12">
                                            <div class="row-title">
                                                <div>
                                                    <h6 class="fw-bold mb-0">Recent Activity</h6>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <table class="table align-middle card-table mb-0 myDataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Date Uploaded</th>
                                                        <th>Location</th>
                                                        <th>Uploaded By</th>
                                                        <th>Size</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span class="me-4 ms-2">Web Design</span>
                                                        </td>
                                                        <td>12 April 2021</td>
                                                        <td>Kwara, Ijeilasha South</td>
                                                        <td>
                                                            Rachael Blessing
                                                        </td>
                                                        <td>40MB</td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-link btn-sm text-danger"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Delete"><i class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <i class="fa fa-file-excel-o"></i>
                                                            <span class="me-4 ms-2">Marketing Strategy</span>
                                                        </td>
                                                        <td>Today</td>
                                                        <td>Abuja, benind Dominos Pizza</td>
                                                        <td>
                                                            Damian Philip
                                                        </td>
                                                        <td>12MB</td>
                                                        <td>
                                                            <button type="button"
                                                                class="btn btn-link btn-sm text-danger"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Delete"><i class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- .row end -->
                                </div>
                                <div class="tab-pane fade" id="drive_withme" role="tabpanel">
                                    <div class="card mb-4">
                                        <div class="card-header bg-transparent">
                                            <h4 class="mb-0">Shared with Me</h4>
                                            <button class="btn btn-sm d-block d-lg-none btn-primary file-list-toggle"
                                                type="button"><i class="fa fa-bars"></i></button>
                                        </div>
                                    </div>
                                    <div class="row g-2 row-deck">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="card p-3">
                                                <i class="fa fa-folder fa-2x chart-text-color2"></i>
                                                <div class="mt-3">
                                                    <h5>Birthday Party</h5>
                                                    <div
                                                        class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">
                                                        Files: <span>648</span></div>
                                                    <div
                                                        class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">
                                                        Size: <span>850MB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="card p-3">
                                                <i class="fa fa-folder fa-2x chart-text-color3"></i>
                                                <div class="mt-3">
                                                    <h5>1 Day Outing</h5>
                                                    <div
                                                        class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">
                                                        Files: <span>172</span></div>
                                                    <div
                                                        class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">
                                                        Size: <span>790MB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="card p-3">
                                                <i class="fa fa-folder fa-2x chart-text-color5"></i>
                                                <div class="mt-3">
                                                    <h5>Templates</h5>
                                                    <div
                                                        class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">
                                                        Files: <span>890</span></div>
                                                    <div
                                                        class="d-flex text-muted flex-wrap justify-content-between small text-uppercase">
                                                        Size: <span>506MB</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- .row end -->
                                </div>


                            </div>
                        </div>
                    </div>
                    <script src="assets/js/bundle/dataTables.bundle.js"></script>
                    <!-- Jquery Page Js -->
                    <script>
                        $('.file-manager .file-list-toggle').on('click', function() {
                            $('.file-manager .order-1').toggleClass('open');
                        });
                        $('.myDataTable').addClass('nowrap').dataTable({
                            responsive: true,
                            searching: false,
                            paging: false,
                            ordering: true,
                            info: false,
                        });
                        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                            $($.fn.dataTable.tables(true)).DataTable().columns.adjust().responsive.recalc();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
