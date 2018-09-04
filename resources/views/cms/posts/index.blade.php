@extends('layouts.app')

@section('title', 'إدارة المقالات')


@section('content')

<a href="/cms/posts/recyclebin">
<button class="btn btn-danger" type="button">
<span class="badge">{{$deleted}}</span>  المهملات 
</button></a>

<a href="/cms/posts/create" class="btn btn-primary">مقال جديد</a>


<br><br>

@if(isset($results))

 	    <div class="row marketing btn-primary" style="padding:12px;">
		<div class="col-lg-2" style="text-align:right;"></div>
        <div class="col-lg-1" style="text-align:right;">فعال</div>
        <div class="col-lg-8" style="text-align:right;">عنوان المقال</div>
        <div class="col-lg-1" style="text-align:right;">#</div>
	    </div>

	@php $i = 1; @endphp

	@foreach($results as $r)
 
    @php $i++; @endphp
        <div class="row marketing" style="padding:10px; border-bottom:1px dashed #CCCCCC;">
		<div class="col-lg-2" style="text-align:right;">
        
        <a href="/cms/posts/isdelete/{{$r->id}}/" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
        <a href="/cms/posts/{{$r->id}}/edit" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
        
        </div>
        <div class="col-lg-1" style="text-align:right;">
        
            @if( $r->status == 1)
        	<span class="glyphicon glyphicon-eye-open btn-lg" style="color:#06C;"></span>
     		@else
        	<span class="glyphicon glyphicon-eye-close btn-lg" style="color:#999;"></span>
        	@endif 
        
        </div>
        <div class="col-lg-8" style="text-align:right;">{{$r->title}}</div>
        <div class="col-lg-1" style="text-align:right;">{{$i}}</div>
	    </div>

    @endforeach
@endif

@endsection