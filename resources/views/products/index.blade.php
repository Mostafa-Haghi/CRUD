@extends('products.layout')
@section('content')
<div class='row mt-3 mb-1'>
    <div class='col-lg-1'>
        <h4>کراد</h4>
    </div>
    <div class='col-lg-8'>
        <h4> (کریئیت + رتریو + آپدیت + دیلیت)</h4>
    </div>
    <div class='col-lg-3'>
        <a style="width:250px" class='btn btn-primary' href="{{route('products.create')}}">محصول جدید</a>
    </div>
</div>

@if ($message=Session::get('success'))
<div class='alert alert-success'>
    <p>{{$message}}</p>
</div>
@endif
<table class="table table-hover">
    <tr>
        <th>ردیف</th>
        <th>نام محصول</th>
        <th>جزئیات</th>
        <th>نمایش - ویرایش - حذف</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->details}}</td>

        <td>

            <form action='{{route('products.destroy',$product->id)}}' method='post'>

                <div class='row' style="flex-wrap: nowrap;">

                    <div class='col-md-4'><button type='submit' class='btn btn-danger'>حذف</button></div>

                    <div class='col-md-4'><a class='btn btn-info' href="{{route('products.show',$product->id)}}">نمایش</a></div>

                    <div class='col-md-4'><a class='btn btn-secondary' href="{{route('products.edit',$product->id)}}">ویرایش</a></div>

                    @csrf
                    @method('delete')
                </div>

            </form>
        </td>

    </tr>
    @endforeach
</table>

<div class="d-flex">
    <div class="mx-auto">
        {{$products->links()}}
    </div>
</div>

@endsection('content')