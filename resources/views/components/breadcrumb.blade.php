  @props(['title', 'sub_title', 'page_action'])
  <!-- Start:: breadcrumb, btn action, and quick tab bar -->
  <div class="page-header pattern-bg">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 mb-2">
          <ol class="breadcrumb mb-2">
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
          </ol>
          <div class="d-flex justify-content-between align-items-center">
            <h1 class="h2 mb-md-0 text-white fw-light">{{ $sub_title }}</h1>
            @isset($page_action)
              {{ $page_action }}
            @endisset




          </div>

        </div>
      </div> <!-- row:: End -->
    </div>
  </div>
