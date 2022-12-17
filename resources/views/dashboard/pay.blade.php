@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="row g-0 flex-md-grow-1">

            <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
                <div class="content">

                    <div class="block block-rounded" data-select2-id="14">
                        <div class="block-header block-header-default">
                            <h3 class="block-title text-center">On Chain Custodian Wallet</h3>
                        </div>
                        <div class="block-content block-content-full" >
                            <div class="visible-print text-center">
                                {!! QrCode::size(100)->generate($fund->coin->address); !!}

                                <p class="mt-3">{{ $fund->coin->address }} <a href=""><i class="fa fa-copy"></i></a></p>
                                <div class="mb-3 mt-5">
                                    <a href="{{ route('user.waiting', $fund->id) }}"  class="btn btn-primary">Proceed to storage</a>
                                </div>
                            </div>

                            <hr>
                            <div class="col-md-10">
                                <p class="mt-2">Transfer asset to the <span class="text-danger">{{ $fund->coin->name }}</span> address above.</p>
                                <p class="mt-2">
                                    Note: Proceed to storage if you have successfully transferred your assets
                                </p>
                            </div>
{{--                            <input class="form-control" type="text" value="{{ $fund->coin->address }}">--}}

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>

@endsection
