@extends('layouts.index') @section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="card mrg_bottom">
            <div class="page_title_block">
                <div class="col-md-5 col-xs-12">
                    <div class="page_title">Spendenempfaenger</div>
                </div>
                <div class="col-md-7 col-xs-12">
                    <div class="search_list">
                        <button type="button" name="add" id="add" class="btn btn-info">Add</button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row mrg-top">
                <div class="col-md-12">

                    <div class="col-md-12 col-sm-12">

                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

            <img src="images/{{ Session::get('image') }}">@endif @if (count($errors) > 0)

            <div class="alert alert-danger">

                <strong>Whoops!</strong> There were some problems with your input.

                <ul>

                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif


            <div class="col-md-12 mrg-top">
                <div id="alert_message"></div>
                <table id="user_data" class="table table-striped table-bordered table-hover dataTable no-footer"
                    role="grid" aria-describedby="user_data_info" style="width: 1648px;">
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="user_data" rowspan="1" colspan="1"
                                style="width: 529px;" aria-label="Name: activate to sort column ascending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="user_data" rowspan="1" colspan="1"
                                style="width: 442px;" aria-label="Bild: activate to sort column ascending">Bild</th>
                            <th class="sorting" tabindex="0" aria-controls="user_data" rowspan="1" colspan="1"
                                style="width: 561px;" aria-label="Action: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <td contenteditable="" spellcheck="false">
                                    <input type="text" name="name" value="">
                                </td>

                                <td>
                                    <input type="file" name="image" class="form-control">
                                </td>

                                <td>
                                    <button type="submit" name="insert" id="insert"
                                        class="btn btn-success btn-xs">Insert</button>
                                </td>

                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>



@endsection
