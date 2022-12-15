@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Users</h3>
                </div>
                <div class="block-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>Joined At</th>
                                <th >Name</th>
                                <th >Email</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $item)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ date('d-m, Y', strtotime($item->created_at)) }}
                                    </td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <form method="POST" action="{!! route('admin.deleteUser', $item->id) !!}" accept-charset="UTF-8">
                                                <input name="_method" value="DELETE" type="hidden">
                                                {{ csrf_field() }}

                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <button type="submit" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled"  onclick="return confirm(&quot;Delete News?&quot;)">
                                                        <i class="fa fa-times"></i>
                                                    </button>

                                                </div>

                                            </form>
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
