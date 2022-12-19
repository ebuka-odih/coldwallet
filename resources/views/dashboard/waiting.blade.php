@extends('dashboard.layout.app')
@section('content')

    <main id="main-container">
        <!-- Page Content -->
        <div class="row g-0 flex-md-grow-1">

            <div class="col-md-8 col-lg-7 col-xl-9 order-md-0 bg-body-dark">
                <div class="content">

                    <div class="col-xl-10">
                        <!-- Mini -->
                        <div class="block block-rounded h-100 mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">
                                    Details
                                </h3>
                            </div>
                            @if($fund->status < 1)
                            <div class="block-content">

                                <div class="progress push" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 20%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <hr>
                                <h4>Initial LTV: <span class="small">Your asset wil appear here when it's confirmed in the blockchain</span></h4>
                                <table class="table" style="width:100%">
                                    <tr>
                                        <th>Asset:</th>
                                        <td>{{ $fund->coin->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Amount:</th>
                                        <td>NaN</td>
                                    </tr>
                                    <tr>
                                        <th>Status:</th>
                                        <td>{!! $fund->status() !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Address:</th>
                                        <td>{{ $fund->coin->address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Date:</th>
                                        <td>{{ date('d M, Y', strtotime($fund->updated_at)) }}</td>
                                    </tr>
                                </table>
                            </div>
                           <div class="block-content">
                            @else
                               <div class="progress push" style="height: 10px;">
                                   <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                               <hr>
                              <table class="table" style="width:100%">
                                        <tr>
                                            <th>Asset:</th>
                                            <td>{{ $fund->coin->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount:</th>
                                            <td>NaN</td>
                                        </tr>
                                        <tr>
                                            <th>Status:</th>
                                            <td>{!! $fund->status() !!}</td>
                                        </tr>
                                        <tr>
                                            <th>Address:</th>
                                            <td>{{ $fund->coin->address }}</td>
                                        </tr>
                                        <tr>
                                            <th>Date:</th>
                                            <td>{{ date('d M, Y', strtotime($fund->updated_at)) }}</td>
                                        </tr>
                                    </table>
                            @endif
                           </div>
                        </div>
                        <!-- END Mini -->
                    </div>

                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>

@endsection
