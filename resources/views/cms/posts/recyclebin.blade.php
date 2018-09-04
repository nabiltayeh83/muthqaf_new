@extends('layouts.app')

@section('title', 'إدارة التصنيفات / المهملات')


@section('content')



@if(isset($results))

 	    <div class="row marketing btn-danger" style="padding:12px;">
		<div class="col-lg-4" style="text-align:right;"></div>
        <div class="col-lg-2" style="text-align:right;"></div>
        <div class="col-lg-4" style="text-align:right;">عنوان المقال</div>
        <div class="col-lg-2" style="text-align:right;">#</div>
	    </div>

	@php $i = 0; @endphp

	@foreach($results as $r)
 
    @php $i++; @endphp
        <div class="row marketing" style="padding:10px; border-bottom:1px dashed #CCCCCC;">
		<div class="col-lg-4" style="text-align:right;">
        
        <a href="/cms/posts/delete/{{$r->id}}/" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
        
        </div>
        <div class="col-lg-2" style="text-align:right;">
        <a href="/cms/posts/recovery/{{$r->id}}" class="btn btn-default">إستعادة</a>
        </div>
        <div class="col-lg-4" style="text-align:right;">{{$r->title}}</div>
        <div class="col-lg-2" style="text-align:right;">{{$i}}</div>
	    </div>

    @endforeach
@endif

@endsection