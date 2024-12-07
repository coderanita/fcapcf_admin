<div>
    <!-- Start:: Search bar collapse -->
    <div class="page-search collapse" id="main_search">
        <div class="container-fluid">
            <div class="py-4">
                <div class="main-search px-3 flex-fill">
                    <input class="form-control" type="text" placeholder="Enter your search key word" />
                    < </div>
                </div>
            </div>
        </div>
        <div class="page-header pattern-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-2">
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item active" aria-current="page">A sneak Peek</li>
                        </ol>
                        <div class="d-flex justify-content-between align-items-center">
                            <h1 class="h2 mb-md-0 text-white fw-light">{{ auth()->user()->role->name }}</h1>
                            <div class="page-action">
                                {{-- <a href="projects.html">
                                    <button class="btn d-none d-sm-inline-flex bg-secondary rounded-pill"
                                        type="button">
                                        <span class="me-1 d-none d-lg-inline-block">Create Project</span>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0C7.23206 0 7.45462 0.0921874 7.61872 0.256282C7.78281 0.420376 7.875 0.642936 7.875 0.875V6.125H13.125C13.3571 6.125 13.5796 6.21719 13.7437 6.38128C13.9078 6.54538 14 6.76794 14 7C14 7.23206 13.9078 7.45462 13.7437 7.61872C13.5796 7.78281 13.3571 7.875 13.125 7.875H7.875V13.125C7.875 13.3571 7.78281 13.5796 7.61872 13.7437C7.45462 13.9078 7.23206 14 7 14C6.76794 14 6.54538 13.9078 6.38128 13.7437C6.21719 13.5796 6.125 13.3571 6.125 13.125V7.875H0.875C0.642936 7.875 0.420376 7.78281 0.256282 7.61872C0.0921874 7.45462 0 7.23206 0 7C0 6.76794 0.0921874 6.54538 0.256282 6.38128C0.420376 6.21719 0.642936 6.125 0.875 6.125H6.125V0.875C6.125 0.642936 6.21719 0.420376 6.38128 0.256282C6.54538 0.0921874 6.76794 0 7 0V0Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div> <!-- row:: End -->
                <div class="row g-3 my-md-3 justify-content-between">
                    <div class="col-xxl-8 col-xl-8 col-lg-12">
                        <div class="ph-tab">
                            <input checked="checked" id="tab1" type="radio" name="pct" />
                            <input id="tab2" type="radio" name="pct" />
                            <input id="tab3" type="radio" name="pct" />
                            <nav>
                                <ul>
                                    <li class="tab1"><label for="tab1">Summary</label></li>
                                    <li class="tab3"><label for="tab3">Project</label></li>
                                </ul>
                            </nav>
                            <section>
                                <!-- tab content:: Summary -->
                                <div class="tab1 rounded-4">
                                    <div class="owl-carousel owl-theme owl_summary">
                                        <div class="item card">
                                            <div class="card-body">
                                                <svg class="mb-3" width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-muted"
                                                        d="M16 1.9L29.22 8H31C31.2652 8 31.5196 8.10536 31.7071 8.29289C31.8946 8.48043 32 8.73479 32 9V13C32 13.2652 31.8946 13.5196 31.7071 13.7071C31.5196 13.8946 31.2652 14 31 14H30V28C30.2231 28.0001 30.4397 28.0747 30.6155 28.2121C30.7912 28.3494 30.916 28.5416 30.97 28.758L31.97 32.758C32.0068 32.9054 32.0095 33.0592 31.9779 33.2078C31.9463 33.3564 31.8813 33.4958 31.7878 33.6155C31.6943 33.7352 31.5748 33.8321 31.4383 33.8987C31.3018 33.9653 31.1519 34 31 34H1C0.848102 34 0.69821 33.9653 0.561701 33.8987C0.425191 33.8321 0.305652 33.7352 0.212156 33.6155C0.11866 33.4958 0.0536638 33.3564 0.0221017 33.2078C-0.00946033 33.0592 -0.00675923 32.9054 0.03 32.758L1.03 28.758C1.08398 28.5416 1.20878 28.3494 1.38454 28.2121C1.5603 28.0747 1.77694 28.0001 2 28V14H1C0.734784 14 0.48043 13.8946 0.292893 13.7071C0.105357 13.5196 0 13.2652 0 13V9C0 8.73479 0.105357 8.48043 0.292893 8.29289C0.48043 8.10536 0.734784 8 1 8H2.78L16 1.9ZM7.552 8H24.446L16 4.1L7.552 8ZM4 14V28H6V14H4ZM8 14V28H13V14H8ZM15 14V28H17V14H15ZM19 14V28H24V14H19ZM26 14V28H28V14H26ZM30 12V10H2V12H30ZM29.22 30H2.78L2.28 32H29.72L29.22 30Z" />
                                                </svg>
                                                <p class="small text-uppercase mb-1 text-muted">Donations</p>
                                                <h5 class="mb-0">&#x20A6;0</h5>
                                            </div>
                                        </div>
                                        <div class="item card bg-secondary text-white">
                                            <div class="card-body">
                                                <svg class="mb-3" width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 19.022C11.152 20.93 12.66 22.416 15.364 22.592V24H16.564V22.582C19.364 22.386 21 20.89 21 18.718C21 16.744 19.748 15.726 17.51 15.198L16.564 14.974V11.14C17.764 11.276 18.528 11.932 18.712 12.84H20.816C20.664 11.002 19.088 9.564 16.564 9.408V8H15.364V9.438C12.974 9.672 11.344 11.11 11.344 13.144C11.344 14.944 12.556 16.088 14.57 16.558L15.364 16.754V20.822C14.134 20.636 13.32 19.962 13.136 19.022H11ZM15.354 14.69C14.174 14.416 13.534 13.858 13.534 13.018C13.534 12.078 14.224 11.374 15.364 11.168V14.688H15.354V14.69ZM16.738 17.076C18.172 17.408 18.834 17.946 18.834 18.896C18.834 19.98 18.01 20.724 16.564 20.86V17.036L16.738 17.076Z"
                                                        fill="white" />
                                                    <path
                                                        d="M16 30C12.287 30 8.72601 28.525 6.1005 25.8995C3.475 23.274 2 19.713 2 16C2 12.287 3.475 8.72601 6.1005 6.1005C8.72601 3.475 12.287 2 16 2C19.713 2 23.274 3.475 25.8995 6.1005C28.525 8.72601 30 12.287 30 16C30 19.713 28.525 23.274 25.8995 25.8995C23.274 28.525 19.713 30 16 30ZM16 32C20.2435 32 24.3131 30.3143 27.3137 27.3137C30.3143 24.3131 32 20.2435 32 16C32 11.7565 30.3143 7.68687 27.3137 4.68629C24.3131 1.68571 20.2435 0 16 0C11.7565 0 7.68687 1.68571 4.68629 4.68629C1.68571 7.68687 0 11.7565 0 16C0 20.2435 1.68571 24.3131 4.68629 27.3137C7.68687 30.3143 11.7565 32 16 32Z"
                                                        fill="white" />
                                                    <path
                                                        d="M16 27C13.0826 27 10.2847 25.8411 8.22183 23.7782C6.15893 21.7153 5 18.9174 5 16C5 13.0826 6.15893 10.2847 8.22183 8.22183C10.2847 6.15893 13.0826 5 16 5C18.9174 5 21.7153 6.15893 23.7782 8.22183C25.8411 10.2847 27 13.0826 27 16C27 18.9174 25.8411 21.7153 23.7782 23.7782C21.7153 25.8411 18.9174 27 16 27ZM16 28C17.5759 28 19.1363 27.6896 20.5922 27.0866C22.0481 26.4835 23.371 25.5996 24.4853 24.4853C25.5996 23.371 26.4835 22.0481 27.0866 20.5922C27.6896 19.1363 28 17.5759 28 16C28 14.4241 27.6896 12.8637 27.0866 11.4078C26.4835 9.95189 25.5996 8.62902 24.4853 7.51472C23.371 6.40042 22.0481 5.5165 20.5922 4.91345C19.1363 4.31039 17.5759 4 16 4C12.8174 4 9.76515 5.26428 7.51472 7.51472C5.26428 9.76515 4 12.8174 4 16C4 19.1826 5.26428 22.2348 7.51472 24.4853C9.76515 26.7357 12.8174 28 16 28Z"
                                                        fill="white" />
                                                </svg>
                                                <p class="small text-uppercase mb-1">Project Total Cost</p>
                                                <h5 class="mb-0">&#x20A6;{{ $totalProjectCost }}</h5>
                                            </div>
                                        </div>
                                        <div class="item card">
                                            <div class="card-body">
                                                <svg class="mb-3" width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-muted"
                                                        d="M16 16.1C17.3261 16.1 18.5979 15.5732 19.5355 14.6355C20.4732 13.6979 21 12.4261 21 11.1C21 9.77392 20.4732 8.50215 19.5355 7.56446C18.5979 6.62678 17.3261 6.1 16 6.1C14.6739 6.1 13.4021 6.62678 12.4645 7.56446C11.5268 8.50215 11 9.77392 11 11.1C11 12.4261 11.5268 13.6979 12.4645 14.6355C13.4021 15.5732 14.6739 16.1 16 16.1V16.1Z" />
                                                    <path class="fill-muted"
                                                        d="M2 0C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2L0 24C0 24.5304 0.210714 25.0391 0.585786 25.4142C0.960859 25.7893 1.46957 26 2 26H3C3.26522 26 3.51957 25.8946 3.70711 25.7071C3.89464 25.5196 4 25.2652 4 25C4 24.7348 4.10536 24.4804 4.29289 24.2929C4.48043 24.1054 4.73478 24 5 24C5.26522 24 5.51957 24.1054 5.70711 24.2929C5.89464 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26H25C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 26.1054 24.4804 26.2929 24.2929C26.4804 24.1054 26.7348 24 27 24C27.2652 24 27.5196 24.1054 27.7071 24.2929C27.8946 24.4804 28 24.7348 28 25C28 25.2652 28.1054 25.5196 28.2929 25.7071C28.4804 25.8946 28.7348 26 29 26H30C30.5304 26 31.0391 25.7893 31.4142 25.4142C31.7893 25.0391 32 24.5304 32 24V4C32 3.46957 31.7893 2.96086 31.4142 2.58579C31.0391 2.21071 30.5304 2 30 2H13.414L12 0.586C11.625 0.210901 11.1164 0.000113275 10.586 0H2ZM2 2H10.586L12 3.414C12.375 3.7891 12.8836 3.99989 13.414 4H30V24H29.83C29.6667 23.5387 29.3931 23.1243 29.0329 22.7929C28.6727 22.4616 28.2369 22.2235 27.7636 22.0992C27.2902 21.9749 26.7937 21.9684 26.3172 22.0801C25.8407 22.1918 25.3988 22.4183 25.03 22.74C23.77 20.446 21.108 18 16 18C10.89 18 8.228 20.448 6.972 22.74C6.60318 22.4183 6.16127 22.1918 5.6848 22.0801C5.20833 21.9684 4.71177 21.9749 4.23842 22.0992C3.76507 22.2235 3.3293 22.4616 2.96912 22.7929C2.60894 23.1243 2.33528 23.5387 2.172 24H2V2Z" />
                                                </svg>
                                                <p class="small text-uppercase mb-1 text-muted">Widows</p>
                                                <h5 class="mb-0">0</h5>
                                            </div>
                                        </div>
                                        <div class="item card">
                                            <div class="card-body">
                                                <svg class="mb-3" width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-muted"
                                                        d="M16 30C12.287 30 8.72601 28.525 6.1005 25.8995C3.475 23.274 2 19.713 2 16C2 12.287 3.475 8.72601 6.1005 6.1005C8.72601 3.475 12.287 2 16 2C19.713 2 23.274 3.475 25.8995 6.1005C28.525 8.72601 30 12.287 30 16C30 19.713 28.525 23.274 25.8995 25.8995C23.274 28.525 19.713 30 16 30ZM16 32C20.2435 32 24.3131 30.3143 27.3137 27.3137C30.3143 24.3131 32 20.2435 32 16C32 11.7565 30.3143 7.68687 27.3137 4.68629C24.3131 1.68571 20.2435 0 16 0C11.7565 0 7.68687 1.68571 4.68629 4.68629C1.68571 7.68687 0 11.7565 0 16C0 20.2435 1.68571 24.3131 4.68629 27.3137C7.68687 30.3143 11.7565 32 16 32V32Z" />
                                                    <path class="fill-muted"
                                                        d="M8.56998 19.134C8.79966 19.0014 9.0726 18.9655 9.32878 19.0341C9.58495 19.1027 9.80337 19.2703 9.93598 19.5C10.5502 20.5647 11.4341 21.4487 12.4986 22.0632C13.5632 22.6776 14.7708 23.0007 16 23C17.2291 23.0007 18.4368 22.6776 19.5013 22.0632C20.5659 21.4487 21.4498 20.5647 22.064 19.5C22.1292 19.3854 22.2164 19.2847 22.3206 19.2039C22.4248 19.1231 22.544 19.0637 22.6713 19.0292C22.7986 18.9946 22.9314 18.9856 23.0622 19.0026C23.193 19.0196 23.3191 19.0623 23.4333 19.1282C23.5475 19.1942 23.6476 19.2821 23.7277 19.3868C23.8078 19.4916 23.8664 19.6112 23.9001 19.7387C23.9338 19.8662 23.9419 19.9991 23.9241 20.1297C23.9062 20.2604 23.8627 20.3862 23.796 20.5C23.0062 21.8687 21.8699 23.0052 20.5013 23.7952C19.1327 24.5852 17.5802 25.0007 16 25C14.4198 25.0007 12.8672 24.5852 11.4987 23.7952C10.1301 23.0052 8.99373 21.8687 8.20398 20.5C8.07138 20.2703 8.03544 19.9974 8.10408 19.7412C8.17272 19.485 8.34031 19.2666 8.56998 19.134ZM14 13C14 14.656 13.104 16 12 16C10.896 16 9.99998 14.656 9.99998 13C9.99998 11.344 10.896 10 12 10C13.104 10 14 11.344 14 13ZM22 13C22 14.656 21.104 16 20 16C18.896 16 18 14.656 18 13C18 11.344 18.896 10 20 10C21.104 10 22 11.344 22 13Z" />
                                                </svg>
                                                <p class="small text-uppercase mb-1 text-muted">Prisoners</p>
                                                <h5 class="mb-0">0</h5>
                                            </div>
                                        </div>
                                        {{-- <div class="item card">
                                            <div class="card-body">
                                                <svg class="mb-3" width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path class="fill-muted"
                                                        d="M0 4C0 2.93913 0.421427 1.92172 1.17157 1.17157C1.92172 0.421427 2.93913 0 4 0H28C29.0609 0 30.0783 0.421427 30.8284 1.17157C31.5786 1.92172 32 2.93913 32 4V20C32 21.0609 31.5786 22.0783 30.8284 22.8284C30.0783 23.5786 29.0609 24 28 24H4C2.93913 24 1.92172 23.5786 1.17157 22.8284C0.421427 22.0783 0 21.0609 0 20V4ZM4 2C3.46957 2 2.96086 2.21071 2.58579 2.58579C2.21071 2.96086 2 3.46957 2 4V6H30V4C30 3.46957 29.7893 2.96086 29.4142 2.58579C29.0391 2.21071 28.5304 2 28 2H4ZM30 10H2V20C2 20.5304 2.21071 21.0391 2.58579 21.4142C2.96086 21.7893 3.46957 22 4 22H28C28.5304 22 29.0391 21.7893 29.4142 21.4142C29.7893 21.0391 30 20.5304 30 20V10Z" />
                                                    <path class="fill-muted"
                                                        d="M4 16C4 15.4696 4.21071 14.9609 4.58579 14.5858C4.96086 14.2107 5.46957 14 6 14H8C8.53043 14 9.03914 14.2107 9.41421 14.5858C9.78929 14.9609 10 15.4696 10 16V18C10 18.5304 9.78929 19.0391 9.41421 19.4142C9.03914 19.7893 8.53043 20 8 20H6C5.46957 20 4.96086 19.7893 4.58579 19.4142C4.21071 19.0391 4 18.5304 4 18V16Z" />
                                                </svg>
                                                <p class="small text-uppercase mb-1 text-muted">Expense</p>
                                                <h5 class="mb-0">&#x20A6;4,351.00</h5>
                                            </div>
                                        </div> --}}


                                    </div>
                                    <script src="{{ asset('js/bundle/owlcarousel.bundle.js') }}"></script>
                                    <script>
                                        var owl = $('.owl_summary');
                                        owl.owlCarousel({
                                            items: 4,
                                            margin: 10,
                                            autoplayTimeout: 2000,
                                            dots: false,
                                            autoplay: true,
                                            loop: true,
                                            autoplayHoverPause: true,
                                            responsive: {
                                                0: {
                                                    items: 1
                                                },
                                                768: {
                                                    items: 2
                                                },
                                                1000: {
                                                    items: 4
                                                },
                                                1300: {
                                                    items: 3
                                                },
                                                1700: {
                                                    items: 4
                                                },
                                            }
                                        });
                                    </script>
                                </div>
                                <!-- tab content::  Crypto-->

                                <!-- tab content:: Recently -->
                                <div class="tab3 rounded-4">
                                    @livewire('dashboard.project-stat')
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-12 d-none d-xl-inline-flex">
                        <img class="img-fluid mx-3" src="{{ asset('img/hero-img.svg') }}" alt="img" />
                    </div>
                </div> <!-- row:: End -->
            </div>
        </div>
        <!-- Start:: main page body area -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row g-xl-4 g-lg-3 g-2 row-deck">
                    <div class="col-xxl-8 col-xl-12 col-lg-12">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h6 class="card-title m-0">FCAPCF Chart</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-AudienceOverview"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Project by Category</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>

                                </div>
                            </div>
                            <div class="card-body">
                                <div id="apex-SalesbyCategory"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Recently Registered</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-sm table-nowrap mb-0">
                                        <tbody>

                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->fname }} {{ $user->lname }}</td>
                                                    <td>{{ $user->email ?? 'Not Added' }}</td>
                                                    <td>{{ dateToWord($user->created_at) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-12 col-lg-12 col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title m-0">Reports overview</h6>
                                <div class="dropdown morphing scale-left">
                                    <a href="#" class="card-fullscreen" data-bs-toggle="tooltip"
                                        title="Card Full-Screen"><i class="icon-size-fullscreen"></i></a>
                                    <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu shadow border-0 p-2">
                                        <li><a class="dropdown-item" href="#">File Info</a></li>
                                        <li><a class="dropdown-item" href="#">Copy to</a></li>
                                        <li><a class="dropdown-item" href="#">Move to</a></li>
                                        <li><a class="dropdown-item" href="#">Rename</a></li>
                                        <li><a class="dropdown-item" href="#">Block</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <h3>&#x20A6; {{ formatMoney($totalProjectCost) }}</h3>
                                <!-- Progress -->
                                {{-- <div class="progress rounded-pill mb-2" style="height: 5px;">
                                    <div class="progress-bar chart-color1" role="progressbar" style="width: 15%"
                                        aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar chart-color2" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar chart-color3" role="progressbar" style="width: 20%"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <span>0%</span>
                                    <span>100%</span>
                                </div> --}}
                                <!-- End Progress -->
                                <div class="table-responsive">
                                    <table class="table table-sm table-nowrap mb-0">
                                        <tbody>

                                            @foreach ($projects as $project)
                                                @php
                                                    $badge = '';
                                                    if ($project->projectStatus->name == 'Completed') {
                                                        $badge = 'success';
                                                    } elseif ($project->projectStatus->name == 'Pending') {
                                                        $badge = 'secondary';
                                                    } elseif ($project->projectStatus->name == 'Suspended') {
                                                        $badge = 'danger';
                                                    } elseif ($project->projectStatus->name == 'In-Progress') {
                                                        $badge = 'info';
                                                    }
                                                @endphp

                                                <tr>
                                                    <td><i
                                                            class="fa fa-circle me-2 chart-text-color1"></i>{{ $project->project_name }}
                                                    </td>
                                                    <td>&#x20A6;{{ $project->project_cost }}</td>
                                                    <td><span
                                                            class="badge bg-{{ $badge }}">{{ $project->projectStatus->name }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->
            </div>
        </div>
        <!-- Start:: footer link and more -->
        <div class="page-footer bg-card mt-4">
            <div class="container-fluid">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-2">
                    <p class="col-md-5 mb-0 text-muted">© 2024 <a href="javascript:void(0)">First Child & Prisoner
                            Care
                            Foundation</a>. <span class="fa fa-heart text-danger"></span> </p>
                    <ul class="nav col-md-7 justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Support</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Purchase</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>

</div>
@push('modals')
    <!-- Modal: Create project -->
    <div class="modal fade" id="create_project" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Setup new project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_scroll">
                    <ul class="nav nav-tabs tab-card px-0" role="tablist">
                        <li class="nav-item flex-fill text-center"><a class="nav-link active" href="#step1"
                                data-bs-toggle="tab" data-bs-step="1">1. Project</a></li>
                        <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step2"
                                data-bs-toggle="tab" data-bs-step="2">2. Details</a></li>
                        <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step3"
                                data-bs-toggle="tab" data-bs-step="3">3. Team</a></li>
                        <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step4"
                                data-bs-toggle="tab" data-bs-step="4">4. File</a></li>
                        <li class="nav-item flex-fill text-center"><a class="nav-link" href="#step5"
                                data-bs-toggle="tab" data-bs-step="5">5. Completed</a></li>
                    </ul>
                    <!-- start: project status progress bar -->
                    <div class="progress bg-transparent" style="height: 3px; margin-top: -2px;">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1"
                            aria-valuemax="5" style="width: 20%;"></div>
                    </div>
                    <div class="tab-content mt-3">
                        <!-- start: project type -->
                        <div class="tab-pane fade show active" id="step1">
                            <div class="card bg-body mb-2">
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Project Type</h6>
                                    <!-- Custome redio input -->
                                    <div class="c_radio d-flex flex-md-wrap">
                                        <label class="m-1 w-100" for="Personal">
                                            <input type="radio" name="plan" id="Personal" checked />
                                            <span class="card">
                                                <span class="card-body d-flex p-3">
                                                    <svg class="avatar" viewBox="0 0 16 16">
                                                        <path class="fill-muted"
                                                            d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                    </svg>
                                                    <span class="ms-3">
                                                        <span class="h6 d-flex mb-1">Personal Project</span>
                                                        <span class="text-muted">For smaller business, with simple salaries
                                                            and pay
                                                            schedules.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                        <label class="m-1 w-100" for="Team">
                                            <input type="radio" name="plan" id="Team" />
                                            <span class="card">
                                                <span class="card-body d-flex p-3">
                                                    <svg class="avatar" viewBox="0 0 16 16">
                                                        <path class="fill-muted"
                                                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                        <path class="fill-muted" fill-rule="evenodd"
                                                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                        <path class="fill-muted"
                                                            d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                    </svg>
                                                    <span class="ms-3">
                                                        <span class="h6 d-flex mb-1">Team Project</span>
                                                        <span class="text-muted">For growing business who wants to create a
                                                            rewarding place to
                                                            work.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn bg-secondary text-light next text-uppercase">Add project
                                    details</button>
                            </div>
                        </div>
                        <!-- start: project detail -->
                        <div class="tab-pane fade" id="step2">
                            <div class="card bg-body mb-2">
                                <div class="card-body">
                                    <h6 class="card-title mb-1">Project Details</h6>
                                    <p class="text-muted small">It is a long established fact that a reader will be
                                        distracted by Avio.
                                    </p>
                                    <div class="form-floating mb-2">
                                        <select class="form-select">
                                            <option selected></option>
                                            <option value="1">Lucid</option>
                                            <option value="2">AVIO</option>
                                            <option value="3">Avio</option>
                                        </select>
                                        <label>Choose a Customer *</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input type="text" class="form-control" placeholder="Project name">
                                        <label>Project name *</label>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <textarea class="form-control" placeholder="Add project details" style="height: 100px"></textarea>
                                        <label>Add project details</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control">
                                        <label>Enter release Date *</label>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="text-muted">Allow Notifications *</div>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="allow_phone"
                                                    value="option1">
                                                <label class="form-check-label" for="allow_phone">Phone</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="allow_email"
                                                    value="option2">
                                                <label class="form-check-label" for="allow_email">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn bg-secondary text-light next text-uppercase">Select project
                                    team</button>
                            </div>
                        </div>
                        <!-- start: select team -->
                        < <!-- start: Upload Files -->
                            <div class="tab-pane fade" id="step4">
                                <div class="card bg-body mb-2">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1">Upload Files</h6>
                                        <div class="mb-4">
                                            <label class="form-label small">Upload up to 10 files</label>
                                            <input class="form-control" type="file" multiple>
                                        </div>
                                        <span>Already Uploaded File</span>
                                        <ul class="list-group list-group-flush list-group-custom custom_scroll mb-0 mt-4"
                                            style="height: 300px;">
                                            <li class="list-group-item py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-file-pdf-o text-danger"></i>
                                                    </div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <p class="mb-0 color-800">Annual Sales Report 2018-19</p>
                                                        <small class="text-muted">.pdf, 5.3 MB</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-file-excel-o text-success"></i>
                                                    </div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <p class="mb-0 color-800">Complete Product Sheet</p>
                                                        <small class="text-muted">.xls, 2.1 MB</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-file-word-o text-info"></i></div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <p class="mb-0 color-800">Marketing Guidelines</p>
                                                        <small class="text-muted">.doc, 2.3 MB</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar rounded no-thumbnail"><i
                                                            class="fa fa-file-zip-o"></i></div>
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <p class="mb-0 color-800">Brand Photography</p>
                                                        <small class="text-muted">.zip, 30.5 MB</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button class="btn bg-secondary text-light next text-uppercase">Finish</button>
                                </div>
                            </div>
                            <!-- start: project setup done -->
                            <div class="tab-pane fade" id="step5">
                                <div class="card bg-body text-center">
                                    <div class="card-body">
                                        <h4 class="card-title mb-1">Project Created!</h4>
                                        <span class="text-muted">If you need more info, please check how to create
                                            project</span>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-lg btn-primary first text-uppercase">Cretae new
                                            project</button>
                                        <button class="btn btn-lg bg-secondary text-light text-uppercase">View
                                            project</button>
                                    </div>
                                    <div class="card-body">
                                        <img class="img-fluid" src="{{ asset('img/project-team.svg') }}"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: RecentChat -->
    <div class="modal fade" id="recent_chat" tabindex="-1">
        <div class="modal-dialog modal-dialog-vertical modal-dialog-scrollable">
            <div class="modal-content">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills p-3 h-100">
                        <a class="nav-link rounded-circle p-1 mb-2 active" href="javascript:void(0);"
                            data-bs-toggle="pill" data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar1.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-2" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar2.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-3" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar3.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-2" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar4.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-5" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar5.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar6.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-7" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar7.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-3" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar8.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-3" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar9.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar10.jpg.png') }}"
                                alt="avatar">
                        </a>
                        <a class="nav-link rounded-circle p-1 mb-2" href="javascript:void(0);" data-bs-toggle="pill"
                            data-bs-target="#c-user-1" title="">
                            <img class="avatar sm rounded-circle border" src="{{ asset('img/xs/avatar5.jpg.png') }}"
                                alt="avatar">
                        </a>
                    </div>
                    <div class="tab-content shadow-sm">
                        <div class="tab-pane fade show active" id="c-user-1" role="tabpanel">
                            <div class="card">
                                <!-- start: chat header -->
                                <div class="card-header border-bottom py-3">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" title="">
                                            <img class="avatar rounded-circle"
                                                src="{{ asset('img/xs/avatar1.jpg.png') }}" alt="avatar">
                                        </a>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Orlando Lentz</h6>
                                            <small class="text-muted">Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="dropdown morphing scale-left">
                                        <a class="nav-link p-2 text-secondary d-none d-xl-inline-block"
                                            href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                                        <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block"
                                            href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                                        <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none"
                                            data-bs-dismiss="modal" aria-label="Close" href="#"><i
                                                class="fa fa-close"></i></a>
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- start: chat body -->
                                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                                    <ul class="list-unstyled chat-history flex-grow-1">
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar1.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Hi Aiden, how are you?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Are we meeting today?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar1.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> It is a long established fact that a reader will
                                                        be distracted by the
                                                        readable content of a page when looking at its layout.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar1.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Contrary to popular belief, Lorem Ipsum is not
                                                        simply random text.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Yes, Orlando Allredy done <br> There are many
                                                        variations of passages
                                                        of Lorem Ipsum available</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar1.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message">
                                                        <p>Please find attached images</p>
                                                        <img class="w120 img-thumbnail"
                                                            src="{{ asset('img/gallery/3.jpg') }}" alt="">
                                                        <img class="w120 img-thumbnail"
                                                            src="{{ asset('img/gallery/4.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Okay, will check and let you know.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- start: chat footer -->
                                <div class="card-footer border-top bg-transparent py-3 px-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="c-user-2" role="tabpanel">
                            <div class="card">
                                <!-- start: chat header -->
                                <div class="card-header border-bottom py-3">
                                    <div class="d-flex">
                                        <a href="javascript:void(0);" title="">
                                            <img class="avatar rounded-circle"
                                                src="{{ asset('img/xs/avatar2.jpg.png') }}" alt="avatar">
                                        </a>
                                        <div class="ms-3">
                                            <h6 class="mb-0">Orlando Lentz</h6>
                                            <small class="text-muted">Last seen: 2 hours ago</small>
                                        </div>
                                    </div>
                                    <div class="dropdown morphing scale-left">
                                        <a class="nav-link p-2 text-secondary d-none d-xl-inline-block"
                                            href="javascript:void(0);"><i class="fa fa-camera"></i></a>
                                        <a class="nav-link p-2 me-1 text-secondary d-none d-xl-inline-block"
                                            href="javascript:void(0);"><i class="fa fa-video-camera"></i></a>
                                        <a class="nav-link py-2 px-3 text-muted d-inline-block d-xl-none"
                                            data-bs-dismiss="modal" aria-label="Close" href="#"><i
                                                class="fa fa-close"></i></a>
                                        <a href="#" class="more-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu shadow border-0 p-2">
                                            <li><a class="dropdown-item" href="#">File Info</a></li>
                                            <li><a class="dropdown-item" href="#">Copy to</a></li>
                                            <li><a class="dropdown-item" href="#">Move to</a></li>
                                            <li><a class="dropdown-item" href="#">Rename</a></li>
                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- start: chat body -->
                                <div class="card-body custom_scroll" style="height: calc(100vh - 141px);">
                                    <ul class="list-unstyled chat-history flex-grow-1">
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Are we meeting today?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar2.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Hi Aiden, how are you?</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Yes, Orlando Allredy done <br> There are many
                                                        variations of passages
                                                        of Lorem Ipsum available</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar2.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message">
                                                        <p>Please find attached images</p>
                                                        <img class="w120 img-thumbnail"
                                                            src="{{ asset('img/gallery/1.jpg') }}" alt="">
                                                        <img class="w120 img-thumbnail"
                                                            src="{{ asset('img/gallery/2.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: right -->
                                        <li class="mb-3 d-flex flex-row-reverse align-items-end">
                                            <div class="max-width-70 text-end">
                                                <div class="user-info mb-1">
                                                    <span class="text-muted small">10:12 AM, Today</span>
                                                </div>
                                                <div class="card border-0 p-3 bg-primary text-light">
                                                    <div class="message">Okay, will check and let you know.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar2.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> It is a long established fact that a reader will
                                                        be distracted by
                                                        the readable content of a page when looking at its layout.</div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Chat: left -->
                                        <li class="mb-3 d-flex flex-row align-items-end">
                                            <div class="max-width-70">
                                                <div class="user-info mb-1">
                                                    <img class="avatar xs rounded-circle me-1"
                                                        src="{{ asset('img/xs/avatar2.jpg.png') }}" alt="avatar">
                                                    <span class="text-muted small">10:10 AM, Today</span>
                                                </div>
                                                <div class="card p-3">
                                                    <div class="message"> Contrary to popular belief, Lorem Ipsum is not
                                                        simply random text.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More option -->
                                            <div class="btn-group">
                                                <a href="#" class="nav-link py-2 px-3 text-muted"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fa fa-ellipsis-v"></i></a>
                                                <ul class="dropdown-menu rounded-4 border-0 shadow">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- start: chat footer -->
                                <div class="card-footer border-top bg-transparent py-3 px-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter text here...">
                                        <button class="btn btn-primary" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal: Setting -->
@endPush
