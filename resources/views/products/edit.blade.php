@extends('products.layout')
@section('content')
<div class="row my-4">
<div class="col-lg-9"><h4>اطلاعات درخواستی را ویرایش نمائید (آپدیت)</h4></div>
<div class="col-lg-3"><a href="{{route('products.index')}}" class="btn btn-primary">بازگشت به صفحه اصلی</a></div>
</div>
@if ($errors->any())
<div class="alert alert-danger">خطاهای زیر را رفع نمائید:
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{route('products.update',$product->id)}}" method="post" style='padding:50px 50px'>
@csrf
@method('put')
<div class="mb-4"><b>نام محصول:</b><input class="form-control @error('name') is-invalid @enderror"type="text" name='name'  value="{{$product->name}}">
@if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif
<div class="mb-4"><b>توضیحات:</b><textarea class="form-control @error('details') is-invalid @enderror" name="details" id="" cols="" rows="" >{{$product->details}}</textarea>@if ($errors->has('details'))
<div class="alert alert-danger">{{ $errors->first('details') }}</div>
@endif
<button class="btn btn-info" type="submit">ثبت اطلاعات</button>
</form>

@endsection('content')

