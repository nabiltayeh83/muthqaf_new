@extends('layouts.app')

@section('title', 'إضافة تصنيف')


@section('content')


{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
{{csrf_field()}}

{{ Form::label('title_itm', 'عنوان التصنيف') }}
{{ Form::text('title', '', ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}

{{ Form::label('title_itm', 'مفعل') }}
{{ Form::checkbox('status', 1, 1, ['style' => 'margin-bottom:18px;']) }}

{{ Form::hidden('created_by',  Auth::user()->id) }}

<br>

<a href="/cms/categories" class="btn btn-default">إلغاء</a>
{{ Form::submit('إضافة', ['class' => 'btn btn-primary']) }}


{!! Form::close() !!}


@endsection