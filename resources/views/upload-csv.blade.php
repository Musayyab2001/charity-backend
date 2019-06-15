@extends('layouts.index') @section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="card mrg_bottom">
            <div class="page_title_block">
                <div class="col-md-5 col-xs-12">
                    <div class="page_title">Sponsoren</div>
                </div>
            </div>

            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

            @endif

            @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif
            <div class="col-md-12 mrg-top mrg_bottom">
                <form action="{{ route('csv.file.upload.post') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <td>
                        <input type="file" name="file" class="form-control">
                    </td>

                    <td>
                        <button type="submit" name="insert" id="insert" class="btn btn-success btn-md">Upload</button>
                    </td>

                </form>
            </div>




            <div class="clearfix"></div>
        </div>
    </div>
</div>



@endsection
