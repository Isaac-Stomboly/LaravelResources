@extends('/layout.app')

@section('content')
    <h1>Edit Customer</h1>
    {!! Form::open(['action' => ['CustomersController@update', $customer->custID], 'method' => 'put']) !!}
    <div class="form-group">
        {{Form::label('firstName', 'First Name', ['class' => 'control-label'])}}
        {{Form::text('firstName', $cust->firstName, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastName', 'Last Name', ['class' => 'control-label'])}}
        {{Form::text('lastName', $cust->lastName, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('address', 'Address', ['class' => 'control-label'])}}
        {{Form::text('address', $cust->address, ['class' => 'form-control'])}}
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {{Form::label('city', 'City', ['class' => 'control-label'])}}
            {{Form::text('city', $cust->city, ['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('state', 'State', ['class' => 'control-label'])}}
            {{Form::text('state', $cust->state, ['class' => 'form-control'])}}
        </div>
        <div class="form-group col-md-2">
            {{Form::label('zip', 'zip', ['class' => 'control-label'])}}
            {{Form::text('zip', $cust->zip, ['class' => 'form-control'])}}
        </div>
    </div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection