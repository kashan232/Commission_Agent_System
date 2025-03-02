@include('admin_panel.include.header_include')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin_panel.include.admin_sidebar_include')
            <div class="layout-page">
            @include('admin_panel.include.navbar_include')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-icon">
                                            <span class="badge bg-label-success rounded-pill p-2">
                                                <i class="ti ti-credit-card ti-sm"></i>
                                            </span>
                                        </div>
                                        <h5 class="card-title mb-0 mt-2">97.5k</h5>
                                        <small>Revenue Generated</small>
                                    </div>
                                    <div id="revenueGenerated"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('admin_panel.include.copyright_include')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
    @include('admin_panel.include.footer_include')
