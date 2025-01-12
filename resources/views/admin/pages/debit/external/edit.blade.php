@extends('admin.master')
@section('AdminContent')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>تعديل دين خارجي</h2>
                            <p>قم بتعديل معلومات الدين الخارجي هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('external.update', ['ExternalId' => $debt->id]) }}" method="post">
                    @csrf
                    @method('PUT') <!-- إضافة هذه السطر لتحديد الطريقة PUT -->
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="amount">المبلغ</label>
                            <input type="text" name="amount" id="amount" value="{{ $debt->amount }}" placeholder="أدخل المبلغ...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="receiver">المستلم</label>
                            <input type="text" name="receiver" id="receiver" value="{{ $debt->receiver }}" placeholder="أدخل اسم المستلم...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="currency">العملة</label>
                            <select name="currency" id="currency">
                                @foreach (config('currencies.list') as $code => $name)
                                <option value="{{ $code }}" {{ $debt->currency == $code ? 'selected' : '' }}>
                                    {{ $name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="admin_create_inputs">
                            <label for="reason">السبب</label>
                            <input type="text" name="reason" id="reason" value="{{ $debt->reason }}" placeholder="أدخل السبب...">
                        </div>
                        <div class="admin_create_inputs">
                            <button type="submit" class="btn btn-primary">تحديث الدين</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
