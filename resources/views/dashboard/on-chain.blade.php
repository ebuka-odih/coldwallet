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
                            <form action="{{ route('user.processOnchain') }}" method="POST" >
                                @csrf
                                <h2 class="content-heading pt-0 text-center">Crypto Assets</h2>
                                <div  class="row" data-select2-id="11">
                                    <div style="visibility: hidden" class="col-lg-4">
                                        <p class="text-muted">
                                            Default select input turns into a searchable and dynamic list
                                        </p>
                                    </div>
                                    <div class="col-lg-8 col-xl-5" data-select2-id="10">
                                        <div class="mb-4" data-select2-id="9">
                                            <select name="coin_id" class="form-control form-select"   style="width: 100%;" >
                                                <option >Choose Token</option>
                                                @foreach($wallets as $item)
                                                <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Proceed</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>

@endsection
