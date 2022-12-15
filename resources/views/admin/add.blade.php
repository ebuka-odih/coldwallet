@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Coin</h3>
                </div>
                <div class="block-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.coins.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <!-- Basic Elements -->
                        <div class="row push">

                            <div class="col-lg-10 col-xl-8 offset-xl-1">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Coin Name</label>
                                    <input type="text" class="form-control" id="example-text-input" name="name" >
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="example-email-input">Coin Icon</label>
                                    <input type="file" class="form-control" id="example-email-input" name="icon">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="example-password-input">Coin Address</label>
                                    <input type="text" class="form-control" id="example-password-input" name="address" >
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
            <!-- END Elements -->
        </div>

    </main>

@endsection
