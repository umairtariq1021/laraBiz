@extends('layouts.app')
@section('content')
  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Listing<span><a class="btn btn-white float-right" href="/dashboard">Go Back</a></span></div>

                <div class="card-body">
   {!! Form::open(['action' => 'ListingsController@store', 'method','POST']) !!}
      {{ Form::bsText('name','', ['placeholder' => 'Company Name']) }}
       {{ Form::bsText('email','', ['placeholder' => 'Contact Email']) }}
        {{ Form::bsText('website','', ['placeholder' => 'Website']) }}
        {{ Form::bsText('phone','', ['placeholder' => 'Phone Num']) }}
         {{ Form::bsText('address','', ['placeholder' => 'Business Address']) }}
      {{ Form::bsTextArea('bio','',['placeholder'=>'About This Business']) }}
      {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection