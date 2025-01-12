@extends('admin.master')
@section('AdminContent')
<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>تعديل دين داخلي</h2>
                            <p>قم بتعديل الديون الداخلية هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('internal.update', $internalDebt->id) }}" method="put">
                    @csrf
                    @method('PUT')
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="amount">المبلغ</label>
                            <input type="text" name="amount" id="amount" value="{{ old('amount', $internalDebt->amount) }}" placeholder="أدخل المبلغ...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="currency">العملة</label>
                            <select name="currency" id="currency">
                                @foreach (config('currencies.list') as $code => $name)
                                    <option value="{{ $code }}" {{ $internalDebt->currency == $code ? 'selected' : '' }}>{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="admin_create_inputs">
                            <label for="reason">السبب</label>
                            <input type="text" name="reason" id="reason" value="{{ old('reason', $internalDebt->reason) }}" placeholder="أدخل السبب...">
                        </div>
                        <div class="admin_create_inputs">
                            <button type="submit" class="btn btn-primary">تعديل الدين</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
