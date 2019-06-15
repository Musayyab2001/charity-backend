@extends('layouts.index') @section('content')

<div class="col-md-12">
    <div class="card">
        <div class="page_title_block">
            <div class="col-md-5 col-xs-12">
                <div class="page_title">Basic</div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row mrg-top">
            <div class="col-md-12">
                <div class="col-md-12 col-sm-12"></div>
            </div>
        </div>

        @if(isset($disziplinen, $startgeld, $ablauf, $leistungen))

        <div class="card-body mrg_bottom">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#app_settings" aria-controls="app_settings" role="tab" data-toggle="tab">Basic</a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="app_settings">

                    {!! Form::open(['action' => ['CityBasicDataController@updateBasicData'], 'method' => 'POST',
                    'class'
                    =>
                    'form form-horizontal']) !!}
                    <div class="section">
                        <div class="section-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label"></label>
                                <div class="col-md-6">
                                    <input type="hidden" name="id" value="1" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Disziplinen :</label>
                                <div class="col-md-6">
                                    {{Form::textarea('disziplinen', $disziplinen, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Startgeld :</label>
                                <div class="col-md-6">
                                    {{Form::textarea('startgeld', $startgeld, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Ablauf des Charity Walk's :</label>
                                <div class="col-md-6">
                                    {{Form::textarea('ablaufCharityWalk', $ablauf, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Leistungen :</label>
                                <div class="col-md-6">
                                    {{Form::textarea('leistungen', $leistungen, ['class' => 'form-control'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    {{-- {{Form::hidden('_method', 'PUT')}} --}}
                                    {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @else

        <div class="card-body mrg_bottom">
            <h2>No Data found!</h2>
        </div>

        @endif

    </div>
</div>

@endsection
