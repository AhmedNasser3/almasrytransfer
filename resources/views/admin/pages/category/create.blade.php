@extends('admin.master')
@section('AdminContent')
<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>انشاء قسم جديد</h2>
                            <p>قم بانشاء الاقسام هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="name">اسم القسم</label>
                            <input type="text" name="name" id="name" placeholder="اسم القسم...">
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
