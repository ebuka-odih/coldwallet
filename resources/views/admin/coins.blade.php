@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Coins</h3>
                </div>
                <div class="block-content">
                    <a href="{{ route('admin.coins.create') }}" class="btn btn-primary m-4">Add Coin</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Icon</th>
                                <th >Wallet</th>
                                <th >Address</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coins as $item)
                            <tr>
                                <td class="fw-semibold">
                                    <img src="{{ asset('files/'.$item->icon ) }}" height="50" width="50" alt="">
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    {{ $item->address }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Elements -->
        </div>

    </main>

@endsection
