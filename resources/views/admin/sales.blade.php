@extends('admin.master')

@section('title')
    {{trans('sales')}}
@stop

@section('css')
<style>
    table {
    width: 100%; /* يسمح للجدول بالتكيف مع عرض الصفحة */
    border-collapse: collapse; /* إزالة المسافات بين الخلايا */
    table-layout: auto; /* ضبط عرض الأعمدة حسب المحتوى */
}

th, td {
    padding: 8px; /* مسافة داخلية للخلية */
    text-align: center; /* محاذاة النص لليسار (يمكنك تغييره حسب الاتجاه) */
    white-space: nowrap; /* منع التفاف النص داخل الخلية */
    max-width: 2px !important;
}

td {
    max-width: 2px !important;
    overflow: hidden; /* إخفاء المحتوى الزائد */
    text-overflow: ellipsis; /* عرض النقاط الثلاثة إذا تجاوز النص العرض */
}

.container
{
width:100% ;
max-width: 100%;
}

</style>
@stop

@section('title_page')
    {{trans('admin_title_page_trans.Product')}}
@endsection

@section('content')
<div class="container content-wrapper" >
    <h2>قائمة المبيعات</h2>

    <!-- جدول لعرض المبيعات -->
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('admin_sales_trans.Product') }}</th>
                <th>{{ __('admin_sales_trans.Category') }}</th>
                <th>{{ __('admin_sales_trans.User') }}</th>
                <th>{{ __('admin_sales_trans.Quantity') }}</th>
                <th>{{ __('admin_sales_trans.Price') }}</th>
                <th>{{ __('admin_sales_trans.Total') }}</th>
                <th>{{ __('admin_sales_trans.Date') }}</th>


            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->product->name }}</td>
                    <td>{{ $sale->category->name }}</td>
                    <td>{{ $sale->user->fname }}</td>
                    <td>{{ $sale->quantity }}</td>
                    <td>{{ $sale->price }} $</td>
                    <td>{{ $sale->total }} $</td>
                    <td>{{ $sale->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
