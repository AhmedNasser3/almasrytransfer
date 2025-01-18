@extends('admin.master')
@section('AdminContent')
<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>إنشاء مستخدم جديد</h2>
                            <p>قم بإنشاء مستخدم جديد هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة السابقة</a></button>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('user.storeUser') }}">
                    @csrf
                    <div class="admin_create_box">
                        <!-- اسم المستخدم -->
                        <div class="admin_create_inputs">
                            <label for="name">اسم المستخدم</label>
                            <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- البريد الإلكتروني -->
                        <div class="admin_create_inputs">
                            <label for="email">البريد الإلكتروني</label>
                            <input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- كلمة المرور -->
                        <div class="admin_create_inputs">
                            <label for="password">كلمة المرور</label>
                            <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- تأكيد كلمة المرور -->
                        <div class="admin_create_inputs">
                            <label for="password_confirmation">تأكيد كلمة المرور</label>
                            <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- زر الإرسال -->
                        <div class="admin_create_inputs">
                            <button type="submit" class="btn btn-primary">إنشاء مستخدم</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
