@extends('dashboard.layout.app')
@section('content')

<main id="main-container">
    <!-- Page Content -->
    <div class="row g-0 flex-md-grow-1">
        <div class="col-md-4 col-lg-5 col-xl-3 order-md-1">
            <div class="content">


                <!-- Storage Info -->
                <div id="side-content" class="d-none d-md-block push">
                    <!-- Current Status -->
                    <div class="block block-rounded">
                        <div class="block-content">
                            <h4 class="h5 text-muted mb-2">Storage</h4>
                            <p class="h1 fw-bold mb-1">
                                920GB
                                <span class="fs-sm text-muted">of 1TB</span>
                            </p>
                            <div class="progress push" style="height: 5px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="fs-sm text-muted">
                                <a href="javascript:void(0)">Upgrade Plan?</a>
                            </p>
                        </div>
                    </div>
                    <!-- END Current Status -->

                    <!-- Storage Stats -->
                    <div class="block block-rounded mb-2">
                        <div class="block-content border-bottom">
                            <h4 class="h5 text-muted mb-2">Documents</h4>
                            <p class="h2 fw-bold mb-1">
                                80GB
                                <span class="fs-sm text-muted">of 1TB</span>
                            </p>
                            <div class="progress push" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="block-content border-bottom">
                            <h4 class="h5 text-muted mb-2">Photos</h4>
                            <p class="h2 fw-bold mb-1">
                                40GB
                                <span class="fs-sm text-muted">of 1TB</span>
                            </p>
                            <div class="progress push" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="block-content border-bottom">
                            <h4 class="h5 text-muted mb-2">Videos</h4>
                            <p class="h2 fw-bold mb-1">
                                780GB
                                <span class="fs-sm text-muted">of 1TB</span>
                            </p>
                            <div class="progress push" style="height: 5px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="block-content">
                            <h4 class="h5 text-muted mb-2">Audio</h4>
                            <p class="h2 fw-bold mb-1">
                                20GB
                                <span class="fs-sm text-muted">of 1TB</span>
                            </p>
                            <div class="progress push" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <!-- END Storage Stats -->
                </div>
                <!-- END Storage Status -->
            </div>
        </div>
        <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
            <div class="content">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb">
                    <p>Welcome {{ auth()->user()->name }}</p>
                </nav>
                <!-- END Breadcrumb -->

                <div class="row items-push">
                    <div class="col-sm-6 col-xl-3">
                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                            <div class="block-content block-content-full flex-grow-1">
                                <div class="item rounded-3 bg-body mx-auto my-3">
                                    <i class="fa fa-users fa-lg text-primary"></i>
                                </div>
                                <div class="fs-1 fw-bold">2,388</div>
                                <div class="text-muted mb-3">Stored Assets</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                            <div class="block-content block-content-full flex-grow-1">
                                <div class="item rounded-3 bg-body mx-auto my-3">
                                    <i class="fa fa-level-up-alt fa-lg text-primary"></i>
                                </div>
                                <div class="fs-1 fw-bold">14.6%</div>
                                <div class="text-muted mb-3">Bounce Rate</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                            <div class="block-content block-content-full flex-grow-1">
                                <div class="item rounded-3 bg-body mx-auto my-3">
                                    <i class="fa fa-chart-line fa-lg text-primary"></i>
                                </div>
                                <div class="fs-1 fw-bold">386</div>
                                <div class="text-muted mb-3">Confirmed Asset</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                            <div class="block-content block-content-full">
                                <div class="item rounded-3 bg-body mx-auto my-3">
                                    <i class="fa fa-wallet fa-lg text-primary"></i>
                                </div>
                                <div class="fs-1 fw-bold">$4,920</div>
                                <div class="text-muted mb-3">Total Earnings</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Folders -->
                <h2 class="content-heading border-black-op">
                    <i class="far fa-fw fa-folder me-1"></i> Folders (4)
                </h2>
                <div class="row items-push">
                    <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
                        <!-- Inspiration Folder -->
                        <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
                            <!-- Inspiration Folder Block -->
                            <div class="options-item block block-rounded block-transparent mb-0 w-100">
                                <div class="block-content text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-folder fa-4x text-info"></i>
                                    </p>
                                    <p class="fw-semibold fs-lg mb-0">
                                        Crypto
                                    </p>

                                </div>
                            </div>
                            <!-- END Inspiration Folder Block -->

                            <!-- Inspiration Folder Hover Options -->
                            <div class="options-overlay rounded bg-primary-dark-op">
                                <div class="options-overlay-content">
                                    <div class="mb-3">
                                        <a class="btn btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-share opacity-50 me-1"></i> Open
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-pencil-alt me-1"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-trash me-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Inspiration Folder Hover Options -->
                        </div>
                        <!-- END Inspiration Folder -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
                        <!-- Source Code Folder -->
                        <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
                            <!-- Source Code Folder Block -->
                            <div class="options-item block block-rounded block-transparent mb-0 w-100">
                                <div class="block-content text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-folder fa-4x text-info"></i>
                                    </p>
                                    <p class="fw-semibold fs-lg mb-0">
                                        DeFi
                                    </p>
                                </div>
                            </div>
                            <!-- END Source Code Folder Block -->

                            <!-- Source Code Folder Hover Options -->
                            <div class="options-overlay rounded bg-primary-dark-op">
                                <div class="options-overlay-content">
                                    <div class="mb-3">
                                        <a class="btn btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-share opacity-50 me-1"></i> Open
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-pencil-alt me-1"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-trash me-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Source Code Folder Hover Options -->
                        </div>
                        <!-- END Source Code Folder -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
                        <!-- PSDs Folder -->
                        <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
                            <!-- PSDs Folder Block -->
                            <div class="options-item block block-rounded block-transparent mb-0 w-100">
                                <div class="block-content text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-folder fa-4x text-info"></i>
                                    </p>
                                    <p class="fw-semibold fs-lg mb-0">
                                        NFT
                                    </p>
                                </div>
                            </div>
                            <!-- END PSDs Folder Block -->

                            <!-- PSDs Folder Hover Options -->
                            <div class="options-overlay rounded bg-primary-dark-op">
                                <div class="options-overlay-content">
                                    <div class="mb-3">
                                        <a class="btn btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-share opacity-50 me-1"></i> Open
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-pencil-alt me-1"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-trash me-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END PSDs Folder Hover Options -->
                        </div>
                        <!-- END PSDs Folder -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-3 d-flex flex-column">
                        <!-- Backup Folder -->
                        <div class="options-container w-100 flex-grow-1 rounded bg-body d-flex align-items-center">
                            <!-- Backup Folder Block -->
                            <div class="options-item block block-rounded block-transparent mb-0 w-100">
                                <div class="block-content text-center">
                                    <p class="mb-2">
                                        <i class="fa fa-folder fa-4x text-info"></i>
                                    </p>
                                    <p class="fw-semibold fs-lg mb-0">
                                        Unnamed
                                    </p>
                                </div>
                            </div>
                            <!-- END Backup Folder Block -->

                            <!-- Backup Folder Hover Options -->
                            <div class="options-overlay rounded bg-primary-dark-op">
                                <div class="options-overlay-content">
                                    <div class="mb-3">
                                        <a class="btn btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-share opacity-50 me-1"></i> Open
                                        </a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-pencil-alt me-1"></i>
                                        </a>
                                        <a class="btn btn-sm btn-primary" href="javascript:void(0)">
                                            <i class="fa fa-trash me-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Backup Folder Hover Options -->
                        </div>
                        <!-- END Backup Folder -->
                    </div>
                </div>
                <!-- END Folders -->

            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>

@endsection
