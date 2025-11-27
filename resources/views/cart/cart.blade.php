@extends('Base.base')

@section('title', 'سبد خرید شما')

@section('content')
    <section class="container-xxl" style="margin-top: 30px; height: 100vh;">
        <div
            style="width: 100%; padding: 10px; display: flex; justify-content: space-between; align-items: center; background-color: #0068C8; border-radius: 8px;">
            <h3 style="color: white;">سبد خرید شما</h3>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3"
                    viewBox="0 0 16 16" style="color: white;">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
            </div>
        </div>

        <div class="item_cart">
            <div class="row">
                @if ($data && count($data) > 0)
                    @foreach ($data as $d)
                        <div class="col item_cart3">
                            <img id="item{{ $d->product_id }}" src="/storage/{{$d->img}}"
                                alt="{{ $d->product_name }}" style="width: 250px; height: 250px; cursor: pointer;"
                                onclick="delete_cart({{ $d->id }}, {{ $d->product_id }})">
                            <h3 style="font-size: 14px;" id="t{{ $d->product_id }}">{{ $d->name }}</h3>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <button class="btn btn-danger"
                                    onclick="delete_cart({{ $d->id }}, {{ $d->product_id }})">حذف</button>
                                <div>
                                    <span>تعداد:</span>
                                    <span>{{ $d->count }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div style="display: flex; justify-content: center; margin-top: 20px;">
                        <a href="{{route('payingGet')}}" class="btn btn-danger" style="background-color: #0068C8;border-color:#0068C8;">تسویه حساب</a>
                    </div>
                @else
                    <div style="width: 100%; height: 50vh; display: flex; justify-content: center; align-items: center;">
                        <span>سبد خرید خالی است</span>
                    </div>
                @endif
            </div>
        </div>

        <script>
            function delete_cart(o_id, p_id) {
                $.ajax({
                    url: `http://192.168.1.134:8000/api/cart/delete/${p_id}/${o_id}`,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log('دریافت موفق: ', response);
                        console.log(response['msg']);
                        // به‌روزرسانی UI بعد از حذف  
                        document.getElementById(`item${p_id}`).parentElement.remove();
                 
                        
                    },
                    error: function(xhr, status, error) {
                        console.error('خطا در دریافت داده: ', error);
                    }
                });
                location.reload();

            }
        </script>
    </section>
@endsection
