@extends('layouts.app')

@section('title', 'إضافة مقال')


@section('content')


{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
{{csrf_field()}}

{{ Form::label('title_itm', 'التصنيف') }}
<select name="category_id" class="form-control" style="margin-bottom:10px; padding:2px;">
@foreach($categories as $c)
<option value="{{$c->id}}">{{$c->title}}</option>
@endforeach
</select>

{{ Form::label('title_itm', 'عنوان المقال') }}
{{ Form::text('title', '', ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}

{{ Form::label('title_itm', 'التفاصيل') }}
{{ Form::textarea('details', '', ['class' => 'form-control', 'style' => 'margin-bottom:10px; height:70px;']) }}

{{ Form::label('title_itm', 'الصورة') }}
{{ Form::text('image', '', ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}


{{ Form::label('title_itm', 'مفعل') }}
{{ Form::checkbox('status', 1, 1, ['style' => 'margin-bottom:18px;']) }}

{{ Form::hidden('created_by',  Auth::user()->id) }}

<br>

<a href="/cms/posts" class="btn btn-default">إلغاء</a>
{{ Form::submit('إضافة', ['class' => 'btn btn-primary']) }}


{!! Form::close() !!}


@endsection