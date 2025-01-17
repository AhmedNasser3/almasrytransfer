@extends('admin.master')
@section('AdminContent')
<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>انشاء امانة شخصية جديد</h2>
                            <p>قم بانشاء الامانات الالشخصية هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('personal.store') }}" method="POST">
                    @csrf
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="amount">المبلغ</label>
                            <input type="text" name="amount" id="amount" placeholder="اسم القسم...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="rate">سعر الصرف </label>
                            <input type="text" name="rate" id="rate" placeholder="اسم القسم...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="currency">العملة</label>
                            <select name="currency" id="currency">
                                @foreach (config('currencies.list') as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="admin_create_inputs">
                            <label for="reason">السبب</label>
                            <input type="text" name="reason" id="reason" placeholder="اسم القسم...">
                        </div>
                        <div class="admin_create_inputs">
                            <button type="submit" class="btn btn-primary">إنشاء قسم</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
