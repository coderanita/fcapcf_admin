<div class="body-header sticky-md-top">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <x-link-brand />


            <!-- Header:: Menu and Mega menu link -->
            <div class="menu-link flex-fill">
                <!-- Start:: dashboard link -->
                <div class="dropdown menu-apps">
                    <a href="{{ url('/') }}" class="btn btn-link">
                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path class="fill-secondary"
                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
                            </path>
                            <path class="fill-muted" fill-rule="evenodd"
                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
                            </path>
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </div>
                <!-- Start:: application link -->
                <div class="dropdown menu-apps">
                    <a href="dashboard.html#" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path class="fill-muted"
                                d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                            </path>
                            <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        </svg>
                        <span>Project</span>
                    </a>
                    <div class="dropdown-menu mega-dropdown p-4 shadow">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <ul class="list-unstyled mb-0 animation_delay">
                                    <li>
                                        <a href="{{ route('administrator.projects') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path class="fill-secondary"
                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                                    </path>
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Manage Projects</h6>
                                                <small class="text-muted">Manage your projects beautifully.</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('administrator.project.categories') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                    </path>
                                                    <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Manage Project Categories</h6>
                                                <small class="text-muted">Create and manage project categories</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('administrator.regions') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                                    <path class="fill-secondary"
                                                        d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Manage Regions</h6>
                                                <small class="text-muted">Create and manage project regions</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('administrator.file-managers') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                                    <path class="fill-secondary"
                                                        d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Document Management</h6>
                                                <small class="text-muted">Manage and Upload documents</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Start:: extra pages link -->
                <div class="dropdown menu-pages">
                    <a href="#" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path class="fill-secondary" fill-rule="evenodd"
                                d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z">
                            </path>
                            <path class="fill-muted"
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z">
                            </path>
                            <path class="fill-muted"
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                            </path>
                        </svg>
                        <span>Staff</span>
                    </a>
                    <div class="dropdown-menu mega-dropdown p-4 shadow">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <ul class="list-unstyled mb-0 animation_delay">
                                    <li>
                                        <a href="{{ route('administrator.users') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path class="fill-secondary"
                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                                    </path>
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Staff Management</h6>
                                                <small class="text-muted">Create and manage system users</small>
                                            </div>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ route('administrator.staffs.create') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path class="fill-secondary"
                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                                    </path>
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Create a New Staff User</h6>
                                                <small class="text-muted">Create and manage system users</small>
                                            </div>
                                        </a>
                                    </li> --}}

                                    <li>
                                        <a href="{{ route('administrator.roles') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">User Roles and Priviledges</h6>
                                                <small class="text-muted">Manage user roles including user
                                                    priviledges</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="dropdown menu-pages">
                    <a href="" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path class="fill-secondary" fill-rule="evenodd"
                                d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z">
                            </path>
                            <path class="fill-muted"
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z">
                            </path>
                            <path class="fill-muted"
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                            </path>
                        </svg>
                        <span>Beneficiary</span>
                    </a>
                    <div class="dropdown-menu mega-dropdown p-4 shadow">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <ul class="list-unstyled mb-0 animation_delay">
                                    <li>
                                        <a href="{{ route('administrator.beneficiaries') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path class="fill-secondary"
                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                                    </path>
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Beneficiary List</h6>
                                                <small class="text-muted">List all beneficiaries</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('administrator.beneficiaries.create') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">New Beneficiary</h6>
                                                <small class="text-muted">Create a new beneficiary</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Start:: document &  resources link-->
                <div class="dropdown menu-resources">
                    <a href="dashboard.html#" class="btn btn-link dropdown-toggle after-none"
                        data-bs-toggle="dropdown">
                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path class="fill-secondary"
                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path class="fill-muted"
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z">
                            </path>
                            <path class="fill-muted"
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                            </path>
                        </svg>
                        <span>Messaging</span>
                    </a>
                    <div class="dropdown-menu mega-dropdown p-4 shadow">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <ul class="list-unstyled mb-0 animation_delay">
                                    <li>
                                        <a href="{{ route('administrator.announcements') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path class="fill-secondary"
                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                                    </path>
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Announcements</h6>
                                                <small class="text-muted">Create and manage announcements</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('administrator.supports') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                                    <path class="fill-secondary"
                                                        d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Support</h6>
                                                <small class="text-muted">Create and manage supports</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('administrator.audit.logs') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Audit Log</h6>
                                                <small class="text-muted">See System Log</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="dropdown menu-resources">
                    <a href="#" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
                        <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path class="fill-secondary"
                                d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z">
                            </path>
                            <path class="fill-muted"
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z">
                            </path>
                            <path class="fill-muted"
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                            </path>
                        </svg>
                        <span>Reports</span>
                    </a>
                    <div class="dropdown-menu mega-dropdown p-4 shadow">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <ul class="list-unstyled mb-0 animation_delay">
                                    <li>
                                        <a href="{{ route('administrator.report.projects') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path class="fill-secondary"
                                                        d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                                    </path>
                                                    <path
                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Project Reports</h6>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('administrator.report.users') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z" />
                                                    <path class="fill-secondary"
                                                        d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-4-4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">User Reports</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('administrator.report.beneficiaries') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                    fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                                    </path>
                                                    <path class="fill-secondary"
                                                        d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">Beneficiaries Reports</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Header:: icon and user profile -->
            <ul class="nav navbar-right d-flex align-items-center mb-0 list-unstyled">
                <li>
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#main_search">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary"
                                d="M19.8765 6.43047C18.7214 5.14266 5.68328 3.32801 4.2308 4.2529C2.77831 5.17778 8.55395 11.6168 11.1616 11.9798C13.7692 12.3427 21.0316 7.71828 19.8765 6.43047C18.7214 5.14266 5.68328 3.32801 4.2308 4.2529Z" />
                            <path class="fill-muted"
                                d="M14.6775 12.93C15.8879 11.2784 16.43 9.23062 16.1954 7.19644C15.9608 5.16226 14.9668 3.29168 13.4122 1.95892C11.8577 0.626155 9.85721 -0.070492 7.81107 0.00834944C5.76493 0.0871909 3.824 0.935706 2.37661 2.38414C0.929213 3.83257 0.0820868 5.7741 0.00470953 7.8203C-0.0726677 9.86649 0.62541 11.8665 1.95928 13.4201C3.29316 14.9737 5.16445 15.9663 7.1988 16.1995C9.23314 16.4326 11.2805 15.8891 12.9313 14.6775H12.93C12.9675 14.7275 13.0075 14.775 13.0525 14.8213L17.865 19.6338C18.0994 19.8683 18.4174 20.0001 18.749 20.0003C19.0805 20.0004 19.3986 19.8688 19.6331 19.6344C19.8677 19.4 19.9995 19.082 19.9997 18.7504C19.9998 18.4189 19.8682 18.1008 19.6338 17.8663L14.8213 13.0538C14.7766 13.0085 14.7285 12.9667 14.6775 12.9288V12.93ZM15 8.125C15 9.02784 14.8222 9.92184 14.4767 10.756C14.1312 11.5901 13.6248 12.348 12.9864 12.9864C12.348 13.6248 11.5901 14.1312 10.756 14.4767C9.92186 14.8222 9.02786 15 8.12502 15C7.22219 15 6.32819 14.8222 5.49408 14.4767C4.65996 14.1312 3.90207 13.6248 3.26366 12.9864C2.62526 12.348 2.11885 11.5901 1.77335 10.756C1.42785 9.92184 1.25002 9.02784 1.25002 8.125C1.25002 6.30164 1.97435 4.55296 3.26366 3.26364C4.55298 1.97433 6.30166 1.25 8.12502 1.25C9.94839 1.25 11.6971 1.97433 12.9864 3.26364C14.2757 4.55296 15 6.30164 15 8.125V8.125Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                        <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#"
                            role="button" data-bs-toggle="dropdown">

                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="avatar lg img-thumbnail rounded-circle shadow"
                                    src="{{ auth()->user()->profile_photo_url }}"
                                    alt="{{ auth()->user()->fullName() }}">
                            @else
                                <span class="text-start ms-xl-2">

                                    <span
                                        class="d-block ms-1 fs-12 user-name-sub-text">{{ strtoupper(auth()->user()->role->name) }}</span>
                                </span>
                            @endif



                        </a>
                        <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                            <div class="card w240 overflow-hidden">
                                <div class="card-body">
                                    <h6 class="card-title mb-0">{{ auth()->user()->fname }}</h6>
                                    <p class="text-muted">{{ auth()->user()->email }}</p>

                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <a class="btn bg-secondary text-light text-uppercase w-100"
                                            @click.prevent="$root.submit();">
                                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                            <span class="align-middle" data-key="t-logout">
                                                {{ __('Sign out') }}
                                            </span>
                                        </a>




                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>


        </div>
    </div>
</div>
