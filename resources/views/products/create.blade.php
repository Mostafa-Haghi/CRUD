@extends('products.layout')
@section('content')
<div class='row my-4'>
    <div class='col-lg-9'>
        <h4>محصول جدید را ایجاد نمایید (کریئیت)</h4>
    </div>
    <div class='col-lg-3'><a class='btn btn-primary' href="{{route('products.index')}}">بازگشت به صفحه اصلی</a></div>
</div>
@if ($errors->any())
<div class='alert alert-danger'>
<p>خطاهای زیر را رفع نمائید:</p>
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

<form style="padding:50px 30px;"action='{{route('products.store')}}' method='post'>
   
    
        @csrf
        
        <b> نام محصول :</b>
        <div class='mb-3'>
            <input value="{{ old('name') }}" class='form-control @error('name') is-invalid @enderror' type="text"  name="name" placeholder="نام محصول">
            @if ($errors->has('name'))
<div class="alert alert-danger">{{ $errors->first('name') }}</div>
@endif
        </div>

        <b> توضیحات :</b>
        <div class='mb-3'>
            <textarea  placeholder='جزئیات محصول' name='details' class="form-control @error('details') is-invalid @enderror">{{ old('details') }}</textarea>
            @error('details')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        </div>
        <button class='btn btn-info' type="submit">ثبت اطلاعات</button>
    
</form>

@endsection('content')