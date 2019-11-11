@extends('layouts.app')
@section('content')
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Listing<span><a class="btn btn-white float-right" href="/dashboard">Go Back</a></span></div>

                <div class="card-body">
   {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method','POST']) !!}
      {{ Form::bsText('name',$listing->name, ['placeholder' => 'Company Name']) }}
       {{ Form::bsText('email',$listing->email, ['placeholder' => 'Contact Email']) }}
        {{ Form::bsText('website',$listing->website, ['placeholder' => 'Website']) }}
        {{ Form::bsText('phone',$listing->phone, ['placeholder' => 'Phone Num']) }}
         {{ Form::bsText('address',$listing->address, ['placeholder' => 'Business Address']) }}
      {{ Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About This Business']) }}
      {{Form::hidden('_method','PUT')}}
      {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection