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
                {{-- <div class="dropdown menu-apps">
          <a href="#" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
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
                    <a href="projects.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
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
                        <h6 class="mb-0">Create Project</h6>
                        <small class="text-muted">Manage your projects beautifully.</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="project-category.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                          <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                          </path>
                          <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        </svg>
                      </div>
                      <div class="flex-fill ms-3 text-truncate">
                        <h6 class="mb-0">Manage Project Categories</h6>
                        <small class="text-muted">Create and manage project categories</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="regions.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
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
                    <a href="file-manager.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
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
        </div> --}}
                <!-- Start:: extra pages link -->
                {{-- <div class="dropdown menu-pages">
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
            <span>User Management</span>
          </a>
          <div class="dropdown-menu mega-dropdown p-4 shadow">
            <div class="row g-3">
              <div class="col-lg-7">
                <ul class="list-unstyled mb-0 animation_delay">
                  <li>
                    <a href="{{route('volunteer.users')}}" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
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
                        <h6 class="mb-0">User Management</h6>
                        <small class="text-muted">Create and manage system users</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="beneficiaries.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
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
                        <h6 class="mb-0">Beneficiary Management</h6>
                        <small class="text-muted">Create and manage beneficiaries</small>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="user-roles.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
                          <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                          </path>
                          <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        </svg>
                      </div>
                      <div class="flex-fill ms-3 text-truncate">
                        <h6 class="mb-0">User Roles and Priviledges</h6>
                        <small class="text-muted">Manage user roles including user priviledges</small>
                      </div>
                    </a>
                  </li>

                </ul>
              </div>

            </div>
          </div>
        </div> --}}
                {{-- <!-- Start:: document &  resources link-->
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
            <span>Messaging</span>
          </a>
          <div class="dropdown-menu mega-dropdown p-4 shadow">
            <div class="row g-3">
              <div class="col-lg-7">
                <ul class="list-unstyled mb-0 animation_delay">
                  <li>
                    <a href="announcement.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
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
                    <a href="support.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
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
                    <a href="audit-log.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
                          <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                          </path>
                          <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
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
        </div> --}}

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
                                        <a href="{{ route('volunteer.file-managers') }}"
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

                <!-- Start:: document &  resources link-->
                <div class="dropdown menu-resources">
                    <a href="dashboard.html#" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
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
                                        <a href="{{ route('volunteer.announcements') }}"
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
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Start:: document &  resources link-->
                <div class="dropdown menu-resources">
                    <a href="#" class="btn btn-link dropdown-toggle after-none" data-bs-toggle="dropdown">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary"
                                d="M18.2218 11.6571C16.9027 9.85952 12.8108 7.20851 11.5455 8.22534C10.2803 9.24216 9.31114 15.9605 10.6302 17.7581C11.9494 19.5557 18.1949 20.0278 19.4602 19.011C20.7254 17.9941 19.5409 13.4547 18.2218 11.6571C16.9027 9.85952 12.8108 7.20851 11.5455 8.22534L18.2218 11.6571Z">
                            </path>
                            <path class="fill-muted"
                                d="M10 5.9425C9.46717 5.9425 8.93955 6.04746 8.44727 6.25136C7.95499 6.45527 7.50769 6.75415 7.13092 7.13092C6.75415 7.50769 6.45527 7.95499 6.25136 8.44727C6.04746 8.93955 5.9425 9.46717 5.9425 10C5.9425 10.5328 6.04746 11.0605 6.25136 11.5527C6.45527 12.045 6.75415 12.4923 7.13092 12.8691C7.50769 13.2459 7.95499 13.5447 8.44727 13.7486C8.93955 13.9526 9.46717 14.0575 10 14.0575C11.0761 14.0575 12.1082 13.63 12.8691 12.8691C13.63 12.1082 14.0575 11.0761 14.0575 10C14.0575 8.92389 13.63 7.89185 12.8691 7.13092C12.1082 6.36999 11.0761 5.9425 10 5.9425ZM7.19251 10C7.19251 9.25541 7.48829 8.54131 8.0148 8.0148C8.54131 7.48829 9.25541 7.19251 10 7.19251C10.7446 7.19251 11.4587 7.48829 11.9852 8.0148C12.5117 8.54131 12.8075 9.25541 12.8075 10C12.8075 10.7446 12.5117 11.4587 11.9852 11.9852C11.4587 12.5117 10.7446 12.8075 10 12.8075C9.25541 12.8075 8.54131 12.5117 8.0148 11.9852C7.48829 11.4587 7.19251 10.7446 7.19251 10Z">
                            </path>
                            <path class="fill-muted"
                                d="M12.245 1.67874C11.5862 -0.558765 8.41374 -0.558765 7.75498 1.67874L7.63749 2.07749C7.59148 2.23368 7.51111 2.37759 7.40226 2.49868C7.29341 2.61978 7.15884 2.71497 7.00841 2.7773C6.85799 2.83963 6.69552 2.8675 6.53293 2.85888C6.37033 2.85026 6.21173 2.80537 6.06874 2.72749L5.70374 2.52749C3.65374 1.41249 1.41249 3.65499 2.52874 5.70374L2.72749 6.06874C2.80537 6.21173 2.85026 6.37033 2.85888 6.53293C2.8675 6.69552 2.83963 6.85799 2.7773 7.00841C2.71497 7.15884 2.61978 7.29341 2.49868 7.40226C2.37759 7.51111 2.23368 7.59148 2.07749 7.63749L1.67874 7.75498C-0.558765 8.41374 -0.558765 11.5862 1.67874 12.245L2.07749 12.3625C2.23368 12.4085 2.37759 12.4889 2.49868 12.5977C2.61978 12.7066 2.71497 12.8411 2.7773 12.9916C2.83963 13.142 2.8675 13.3044 2.85888 13.467C2.85026 13.6296 2.80537 13.7882 2.72749 13.9312L2.52749 14.2962C1.41249 16.3462 3.65374 18.5887 5.70374 17.4712L6.06874 17.2725C6.21173 17.1946 6.37033 17.1497 6.53293 17.1411C6.69552 17.1325 6.85799 17.1603 7.00841 17.2227C7.15884 17.285 7.29341 17.3802 7.40226 17.5013C7.51111 17.6224 7.59148 17.7663 7.63749 17.9225L7.75498 18.3212C8.41374 20.5587 11.5862 20.5587 12.245 18.3212L12.3625 17.9225C12.4085 17.7663 12.4889 17.6224 12.5977 17.5013C12.7066 17.3802 12.8411 17.285 12.9916 17.2227C13.142 17.1603 13.3044 17.1325 13.467 17.1411C13.6296 17.1497 13.7882 17.1946 13.9312 17.2725L14.2962 17.4725C16.3462 18.5887 18.5887 16.345 17.4712 14.2962L17.2725 13.9312C17.1946 13.7882 17.1497 13.6296 17.1411 13.467C17.1325 13.3044 17.1603 13.142 17.2227 12.9916C17.285 12.8411 17.3802 12.7066 17.5013 12.5977C17.6224 12.4889 17.7663 12.4085 17.9225 12.3625L18.3212 12.245C20.5587 11.5862 20.5587 8.41374 18.3212 7.75498L17.9225 7.63749C17.7663 7.59148 17.6224 7.51111 17.5013 7.40226C17.3802 7.29341 17.285 7.15884 17.2227 7.00841C17.1603 6.85799 17.1325 6.69552 17.1411 6.53293C17.1497 6.37033 17.1946 6.21173 17.2725 6.06874L17.4725 5.70374C18.5887 3.65374 16.345 1.41249 14.2962 2.52874L13.9312 2.72749C13.7882 2.80537 13.6296 2.85026 13.467 2.85888C13.3044 2.8675 13.142 2.83963 12.9916 2.7773C12.8411 2.71497 12.7066 2.61978 12.5977 2.49868C12.4889 2.37759 12.4085 2.23368 12.3625 2.07749L12.245 1.67874ZM8.95374 2.03249C9.26124 0.988735 10.7387 0.988735 11.0462 2.03249L11.1637 2.43124C11.2625 2.76634 11.435 3.0751 11.6686 3.33486C11.9023 3.59462 12.191 3.79881 12.5138 3.93246C12.8366 4.06611 13.1852 4.12582 13.5341 4.10722C13.883 4.08863 14.2232 3.99219 14.53 3.82499L14.8937 3.62499C15.8487 3.10624 16.8937 4.14999 16.3737 5.10624L16.175 5.47123C16.008 5.77802 15.9118 6.11827 15.8934 6.46705C15.875 6.81584 15.9349 7.16432 16.0687 7.48697C16.2024 7.80961 16.4067 8.09824 16.6665 8.33171C16.9262 8.56517 17.2349 8.73756 17.57 8.83624L17.9675 8.95374C19.0112 9.26124 19.0112 10.7387 17.9675 11.0462L17.5687 11.1637C17.2336 11.2625 16.9249 11.435 16.6651 11.6686C16.4053 11.9023 16.2012 12.191 16.0675 12.5138C15.9339 12.8366 15.8742 13.1852 15.8927 13.5341C15.9113 13.883 16.0078 14.2232 16.175 14.53L16.375 14.8937C16.8937 15.8487 15.85 16.8937 14.8937 16.3737L14.53 16.175C14.2232 16.0078 13.8828 15.9114 13.5339 15.8929C13.1849 15.8744 12.8363 15.9342 12.5135 16.068C12.1907 16.2017 11.9019 16.4061 11.6683 16.666C11.4348 16.9259 11.2624 17.2348 11.1637 17.57L11.0462 17.9675C10.7387 19.0112 9.26124 19.0112 8.95374 17.9675L8.83624 17.5687C8.73742 17.2338 8.56493 16.9252 8.3314 16.6656C8.09787 16.406 7.80922 16.2018 7.4866 16.0682C7.16397 15.9346 6.81554 15.8748 6.46682 15.8933C6.1181 15.9118 5.77794 16.008 5.47123 16.175L5.10624 16.375C4.15124 16.8937 3.10624 15.85 3.62624 14.8937L3.82499 14.53C3.99242 14.2232 4.08905 13.8828 4.10777 13.5338C4.12649 13.1848 4.06683 12.836 3.93317 12.513C3.7995 12.1901 3.59523 11.9012 3.33533 11.6675C3.07544 11.4338 2.76652 11.2612 2.43124 11.1625L2.03249 11.045C0.988735 10.7375 0.988735 9.25998 2.03249 8.95249L2.43124 8.83498C2.76599 8.73612 3.07441 8.56366 3.33391 8.33022C3.59342 8.09678 3.79744 7.80827 3.93105 7.4858C4.06466 7.16334 4.12448 6.81508 4.10613 6.46651C4.08778 6.11794 3.99172 5.77789 3.82499 5.47123L3.62499 5.10624C3.10624 4.15124 4.14999 3.10624 5.10624 3.62624L5.47123 3.82499C5.77794 3.99195 6.1181 4.0882 6.46682 4.10668C6.81554 4.12515 7.16397 4.06538 7.4866 3.93176C7.80922 3.79813 8.09787 3.59402 8.3314 3.33439C8.56493 3.07475 8.73742 2.76617 8.83624 2.43124L8.95374 2.03249Z">
                            </path>
                        </svg>
                        <span>Setting</span>
                    </a>
                    <div class="dropdown-menu mega-dropdown p-4 shadow">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <ul class="list-unstyled mb-0 animation_delay">
                                    <li>
                                        <a href="{{ route('volunteer.account.show') }}"
                                            class="d-flex align-items-center py-2 rounded">
                                            <div class="avatar rounded no-thumbnail bg-light">
                                                <svg viewBox="0 0 16 16" width="18" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-secondary" fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z">
                                                    </path>
                                                    <path
                                                        d="M7.5 11C7.5 11 7 11 7 10.5C7 10 7.5 8.5 10 8.5C12.5 8.5 13 10 13 10.5C13 11 12.5 11 12.5 11H7.5ZM10 8C10.3978 8 10.7794 7.84196 11.0607 7.56066C11.342 7.27936 11.5 6.89782 11.5 6.5C11.5 6.10218 11.342 5.72064 11.0607 5.43934C10.7794 5.15804 10.3978 5 10 5C9.60218 5 9.22064 5.15804 8.93934 5.43934C8.65804 5.72064 8.5 6.10218 8.5 6.5C8.5 6.89782 8.65804 7.27936 8.93934 7.56066C9.22064 7.84196 9.60218 8 10 8Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h6 class="mb-0">My Account</h6>
                                                <small class="text-muted">update personal info and security
                                                    setting</small>
                                            </div>
                                        </a>
                                    </li>

                                    {{-- <li>
                    <a href="support.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
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
                    <a href="audit-log.html" class="d-flex align-items-center py-2 rounded">
                      <div class="avatar rounded no-thumbnail bg-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor"
                          viewBox="0 0 16 16">
                          <path
                            d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                          </path>
                          <path class="fill-secondary" d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        </svg>
                      </div>
                      <div class="flex-fill ms-3 text-truncate">
                        <h6 class="mb-0">Audit Log</h6>
                        <small class="text-muted">See System Log</small>
                      </div>
                    </a>
                  </li> --}}

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Header:: icon and user profile -->
            <ul class="nav navbar-right d-flex align-items-center mb-0 list-unstyled">
                {{-- <li>
                    <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#main_search">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-secondary"
                                d="M19.8765 6.43047C18.7214 5.14266 5.68328 3.32801 4.2308 4.2529C2.77831 5.17778 8.55395 11.6168 11.1616 11.9798C13.7692 12.3427 21.0316 7.71828 19.8765 6.43047C18.7214 5.14266 5.68328 3.32801 4.2308 4.2529Z" />
                            <path class="fill-muted"
                                d="M14.6775 12.93C15.8879 11.2784 16.43 9.23062 16.1954 7.19644C15.9608 5.16226 14.9668 3.29168 13.4122 1.95892C11.8577 0.626155 9.85721 -0.070492 7.81107 0.00834944C5.76493 0.0871909 3.824 0.935706 2.37661 2.38414C0.929213 3.83257 0.0820868 5.7741 0.00470953 7.8203C-0.0726677 9.86649 0.62541 11.8665 1.95928 13.4201C3.29316 14.9737 5.16445 15.9663 7.1988 16.1995C9.23314 16.4326 11.2805 15.8891 12.9313 14.6775H12.93C12.9675 14.7275 13.0075 14.775 13.0525 14.8213L17.865 19.6338C18.0994 19.8683 18.4174 20.0001 18.749 20.0003C19.0805 20.0004 19.3986 19.8688 19.6331 19.6344C19.8677 19.4 19.9995 19.082 19.9997 18.7504C19.9998 18.4189 19.8682 18.1008 19.6338 17.8663L14.8213 13.0538C14.7766 13.0085 14.7285 12.9667 14.6775 12.9288V12.93ZM15 8.125C15 9.02784 14.8222 9.92184 14.4767 10.756C14.1312 11.5901 13.6248 12.348 12.9864 12.9864C12.348 13.6248 11.5901 14.1312 10.756 14.4767C9.92186 14.8222 9.02786 15 8.12502 15C7.22219 15 6.32819 14.8222 5.49408 14.4767C4.65996 14.1312 3.90207 13.6248 3.26366 12.9864C2.62526 12.348 2.11885 11.5901 1.77335 10.756C1.42785 9.92184 1.25002 9.02784 1.25002 8.125C1.25002 6.30164 1.97435 4.55296 3.26366 3.26364C4.55298 1.97433 6.30166 1.25 8.12502 1.25C9.94839 1.25 11.6971 1.97433 12.9864 3.26364C14.2757 4.55296 15 6.30164 15 8.125V8.125Z" />
                        </svg>
                    </a>
                </li> --}}
                <li>
                    <div class="dropdown morphing scale-left user-profile mx-lg-3 mx-2">
                        <a class="nav-link dropdown-toggle rounded-circle after-none p-0" href="#"
                            role="button" data-bs-toggle="dropdown">

                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                {{-- {{ Auth::user()->profile_pic }} --}}
                                <img class="avatar lg img-thumbnail rounded-circle shadow"
                                    src="{{ 'https://console.fcapcf.org/storage/app/public/' . Auth::user()->profile_pic }}"
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
                                    {{-- <h6 class="card-title mb-0">{{ auth()->user()->fname }}</h6> --}}
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
