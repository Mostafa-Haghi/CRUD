@extends('products.layout')
@section('content')
<div class="row my-4">
    <div class="col-lg-9">
        <h4>اطلاعات کامل محصول (متد شو)</h4>
    </div>
    <div class="col-lg-3">
        <a href="{{route('products.index')}}" class="btn btn-primary">بازگشت به صفحه اصلی</a>
    </div>
</div>
<table  class="table table-bordered mt-5">
<tr class="table-primary">
<td><b>نام محصول:</b></td>
<td>{{$product->name}}</td>
</tr>
<tr class="table-secondary">
<td><b>توضیحات:</b></td>
<td>{{$product->details}}</td>
</tr>
</table>
@endsection('content')