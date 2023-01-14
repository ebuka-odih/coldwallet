@extends('dashboard.layout.app')
@section('content')

    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">

    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Transactions
                    </h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full dataTable no-footer" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr>
                                        <th class="text-center sorting sorting_asc"  tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Asset</th>
                                        <th class="d-none d-sm-table-cell sorting"  tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Quantity</th>
                                        <th class="d-none d-sm-table-cell sorting"  tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">USD</th>
                                        <th class="d-none d-sm-table-cell sorting"  tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Status</th>
                                        <th style="width: 15%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($history as $item)
                                    <tr class="even">
                                        <td class="text-center sorting_1">{{ date('Y, M d', strtotime($item->updated_at)) }}</td>
                                        <td class="fw-semibold">
                                            <a href="{{ route('user.waiting', $item->id) }}">{{ $item->coin->name }}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            {{ auth()->user()->showRate($item->amount) }}
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            ${{ $item->amount ? : "0.00" }}
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            {!! $item->status() !!}
                                        </td>
                                        <td>
                                            <a href="{{ route('user.waiting', $item->id) }}" class="btn btn-sm btn-primary">View</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END Dynamic Table Full -->


        </div>
        <!-- END Page Content -->
    </main>
    <!-- jQuery (required for DataTables plugin) -->

@endsection
