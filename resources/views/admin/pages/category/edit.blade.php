@extends('admin.master')
@section('AdminContent')
<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>تعديل قسم </h2>
                            <p>قم بتعديل الاقسام هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('category.update', ['categoryId' => $category->id]) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- تحديد طريقة HTTP كـ PUT -->
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="name">اسم القسم</label>
                            <input type="text" name="name" id="name" value="{{ $category->name }}" placeholder="اسم القسم...">
                        </div>
                        <div class="admin_create_inputs">
                            <button type="submit" class="btn btn-primary">تعديل قسم</button>
                        </div>
                    </form>
                        <div class="admin_create_inputs">
                            <form action="{{ route('category.delete',['categoryId' => $category->id]) }}">
                                @csrf
                                @method('delete')
                                <button style="background: rgb(161, 37, 37)" type="submit" class="btn btn-primary">حذف القسم قسم</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
