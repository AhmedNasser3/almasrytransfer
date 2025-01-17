@extends('admin.master')
@section('AdminContent')
<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>تعديل امانة شخصية </h2>
                            <p>قم بتعديل الامانات الالشخصية هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('personal.update',['PersonalHonestyId' => $personalHonesty->id]) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="amount">المبلغ</label>
                            <input type="text" name="amount" value="{{ $personalHonesty->amount }}" id="amount" placeholder="اسم الدين...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="rate">سعر الصرف </label>
                            <input type="text" name="rate" value="{{ $personalHonesty->rate }}" id="rate" placeholder="اسم الدين...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="currency">العملة</label>
                            <select name="currency" id="currency">
                                @foreach (config('currencies.list') as $code => $name)
                                    <option value="{{ $code }}" {{ $personalHonesty->currency == $code ? 'selected' : '' }}>
                                        {{ $name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="admin_create_inputs">
                            <label for="reason">السبب</label>
                            <input type="text" name="reason" value="{{ $personalHonesty->reason }}" id="reason" placeholder="اسم الدين...">
                        </div>
                        <div class="admin_create_inputs">
                            <button type="submit" class="btn btn-primary">تعديل الدين</button>
                        </div>
                    </div>
                </form>
                <div class="admin_create_inputs">
                    <form action="{{ route('personal.delete',['PersonalHonestyId' => $personalHonesty->id]) }}">
                        @csrf
                        @method('delete')
                        <button style="background: rgb(187, 61, 61)" type="submit" class="btn btn-primary">حذف الدين</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
