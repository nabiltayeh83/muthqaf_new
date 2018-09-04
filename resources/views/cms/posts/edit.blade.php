@extends('layouts.app')

@section('title', 'تعديل مقال')


@section('content')

@if(isset($result))
@foreach($result as $r)
    
    
   
{!! Form::open(['route' => ['posts.update', $r->id], 'method' => 'POST']) !!}
{{csrf_field()}}
{{method_field('PUT')}}

{{ Form::label('title_itm', 'التصنيف') }}
<select name="category_id" class="form-control" style="margin-bottom:10px; padding:2px;">
@foreach($categories as $c)
<option value="{{$c->id}}" {{$c->id==$r->category_id?"selected":""}}>{{$c->title}}</option>
@endforeach
</select>

{{ Form::label('title_itm', 'عنوان المقال') }}
{{ Form::text('title', $r->title, ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}

{{ Form::label('title_itm', 'التفاصيل') }}
{{ Form::textarea('details', $r->details, ['class' => 'form-control', 'style' => 'margin-bottom:10px; height:70px;']) }}

{{ Form::label('title_itm', 'الصورة') }}
{{ Form::text('image', $r->image, ['class' => 'form-control', 'style' => 'margin-bottom:10px;']) }}


{{ Form::label('title_itm', 'مفعل') }}
{{ Form::checkbox('status', 1, '', [$r->status?"checked":"" ,'style' => 'margin-bottom:18px;']) }}

<br>

<a href="/cms/posts" class="btn btn-default">إلغاء</a>
{{ Form::submit('تعديل', ['class' => 'btn btn-primary']) }}

{!! Form::close() !!}
    
@endforeach
@endif

@endsection