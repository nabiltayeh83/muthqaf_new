@extends('layouts.app')

@section('title', 'تعديل تصنيف')


@section('content')

@if(isset($result))
@foreach($result as $r)
    
    
   
{!! Form::open(['route' => ['categories.update', $r->id], 'method' => 'POST']) !!}
{{csrf_field()}}
{{method_field('PUT')}}

{{ Form::label('title_itm', 'عنوان التصنيف') }}
{{ Form::text('title', $r->title, ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}

{{ Form::label('title_itm', 'مفعل') }}
{{ Form::checkbox('status', 1, '', [$r->status?"checked":"" ,'style' => 'margin-bottom:18px;']) }}

<br>

<a href="/cms/categories" class="btn btn-default">إلغاء</a>
{{ Form::submit('تعديل', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
    
@endforeach
@endif

@endsection