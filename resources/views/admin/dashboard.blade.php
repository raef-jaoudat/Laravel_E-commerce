@extends('admin.master')
@section('title')
    dashboard
@stop
@section('css')
    <style>
        th,
        td {
            border: 1px solid #ddd;
            /* إضافة حد حول الخلايا */
            /* padding: 8px; إضافة حشو داخل الخلايا */
            text-align: center !important;
            /* محاذاة النص أفقياً في الوسط */
            /* vertical-align: middle; */
            /* محاذاة النص عموديًا في الوسط */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/admin/style.css') }}">
@stop
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> {{ trans('admin_sidebar_trans.Dashboard') }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ trans('website_navbar.Home') }}</a></li>
                            <li class="breadcrumb-item active"> {{ trans('admin_sidebar_trans.Dashboard') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="main"> --}}


        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">{{ $visit_count }}</div>
                    <div class="cardName">Visits</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">{{ $totalSold }}</div>
                    <div class="cardName">Sales</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">284</div>
                    <div class="cardName">Comments</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">${{ $totalSalesAmount }}</div>
                    <div class="cardName">Earning</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Recent Orders</h2>
                    <a href="#" class="btn" id="toggleButton">View All</a>


                </div>
                {{-- ///////////// --}}
                <div id="contentToShow" style="display:none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Total Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($allOrders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->product->name }}</td>
                                    {{-- <td>{{ $order->quantity }}</td> --}}
                                    {{-- <td>{{ $order->product->selling_price }}</td> --}}
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->sold_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- ////////////// --}}
                <div id="contentToHide">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Total Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($lastOrders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->product->name }}</td>
                                    {{-- <td>{{ $order->quantity }}</td> --}}
                                    {{-- <td>{{ $order->product->selling_price }}</td> --}}
                                    <td>{{ $order->total }}</td>
                                    <td>{{ $order->sold_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- ================= New Customers ================ -->
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h2>Recent Customers</h2>
                </div>

                <table>
                    @foreach ($last_buyers as $sale)
                        <tr>


                            <td width="60px">
                                <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="">
                            </td>
                            <td>
                                <h4>{{ $sale->user->fname }}</h4>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#toggleButton').click(function(event) {
                event.preventDefault(); // منع الرابط من الانتقال إلى صفحة أخرى

                // إظهار الـ div الأول وإخفاء الـ div الثاني
                $('#contentToShow').toggle(); // إظهار أو إخفاء الـ div الأول
                $('#contentToHide').toggle(); // إخفاء أو إظهار الـ div الثاني
                if ($('#contentToShow').is(':visible')) {
                    $('#toggleButton').text('Show last Orders'); // عند إظهار آخر المبيعات
                } else {
                    $('#toggleButton').text('View All Orders'); // عند إخفاء آخر المبيعات
                }
            });
        });
    </script>
    <script src="{{ asset('assets/js/admin/main.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@stop
