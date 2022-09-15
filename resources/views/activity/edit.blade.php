@extends('layouts.default')
@section('content')

<div class="small-header transition animated fadeIn">
    <div class="hpanel">
        <div class="panel-body panel-body_head">
            <h2 class="font-light m-b-xs">
                Activity Management
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">
    <div class="row">
        <div class="col-md-8 mx-auto" style="">
            <div class="hpanel">
                <div class="panel-heading sub-title">
                  Update Activity
                </div>
                <div class="panel-body">
                    {!! Form::model($target, array('route' => array('activity.update', $target->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'id' => 'userId')) !!}

                    <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="name">{!!trans('english.NAME')!!} :<span class="text-danger">*</span></label>
                        <div class="col-md-6">
                            {!! Form::text('name', old('name'), array('id'=> 'name', 'class' => 'form-control', 'required' => 'true')) !!}
                            <span class="form-error text-danger">{!! $errors->first('name') !!}</span>
                        </div>
                    </div>
                     <div class="row form-group mb-3"><label class="control-label col-xs-12 col-sm-3 no-padding-right text-end pt-2 fw-bold" for="description">{!!trans('english.INFO')!!} :</label>
                        <div class="col-md-6">
                            {!! Form::textarea('description', old('description'), array('id'=> 'description', 'rows' => '3', 'class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="row form-group">
                      <div class="col-md-3">

                      </div>
                        <div class="col-sm-8 ">
                            <button type="submit" class="btn btn-info">{!!trans('english.SAVE')!!}</button>
                            <button type="button" class="btn btn-default cancel">{!!trans('english.CANCEL')!!}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
