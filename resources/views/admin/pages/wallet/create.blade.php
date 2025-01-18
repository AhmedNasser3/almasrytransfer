@extends('admin.master')
@section('AdminContent')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="admin_create">
    <div class="admin_create_container">
        <div class="admin_create_content">
            <div class="admin_create_data">
                <div class="admin_create_title">
                    <div class="notify_title_cn">
                        <div class="notify_title">
                            <h2>انشاء معاملة جديدة</h2>
                            <p>قم بانشاء المعاملات هنا</p>
                        </div>
                        <div class="notify_btn">
                            <button><a href="{{ route('home.page') }}">الرجوع إلى الصفحة الأخيرة</a></button>
                        </div>
                    </div>
                </div>
                <form action="{{ route('wallet.store') }}" method="POST">
                    @csrf
                    <div class="admin_create_box">
                        <div class="admin_create_inputs">
                            <label for="category_id">القسم</label>
                            <select name="category_id" aria-placeholder="القسم" id="">
                                <option value="">القسم</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex" style="display: flex;justify-content:center;">
                            <div class="admin_create_inputs">
                                <label for="section_1_name">المبلغ</label>
                                <input type="number" step="0.01" name="section_1_name" id="section_1_name" placeholder="المبلغ...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_1_currency">العملة</label>
                                <select name="section_1_currency" id="section_1_currency">
                                    @foreach (config('currencies.list') as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex" style="display: flex;justify-content:center;">
                            <div class="admin_create_inputs">
                            <label for="section_1_rate">سعر الصرف</label>
                            <input type="text" name="section_1_rate" id="section_1_rate" placeholder="سعر الصرف القسم...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="section_2_name">المبلغ</label>
                            <input type="number" step="0.01" name="section_2_name" id="section_2_name" placeholder="المبلغ...">
                        </div>
                        <div class="admin_create_inputs">
                            <label for="section_2_currency">العملة</label>
                            <select name="section_2_currency" id="section_2_currency">
                                @foreach (config('currencies.list') as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="flex" style="display: flex;justify-content:center;">
                            <div class="admin_create_inputs">
                                <label for="section_2_rate">سعر الصرف</label>
                                <input type="text" name="section_2_rate" id="section_2_rate" placeholder="سعر الصرف القسم...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_3_name">المبلغ</label>
                                <input type="number" step="0.01" name="section_3_name" id="section_3_name" placeholder="المبلغ...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_3_currency">العملة</label>
                                <select name="section_3_currency" id="section_3_currency">
                                    @foreach (config('currencies.list') as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <div class="flex" style="display: flex;justify-content:center;">

                            <div class="admin_create_inputs">
                                <label for="section_3_rate">سعر الصرف</label>
                                <input type="text" name="section_3_rate" id="section_3_rate" placeholder="سعر الصرف القسم...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_4_name">المبلغ</label>
                                <input type="number" step="0.01" name="section_4_name" id="section_4_name" placeholder="المبلغ...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_4_currency">العملة</label>
                                <select name="section_4_currency" id="section_4_currency">
                                    @foreach (config('currencies.list') as $code => $name)
                                    <option value="{{ $code }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="flex" style="display: flex;justify-content:center;">

                            <div class="admin_create_inputs">
                                <label for="section_4_rate">سعر الصرف</label>
                                <input type="text" name="section_4_rate" id="section_4_rate" placeholder="سعر الصرف القسم...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_5_name">المبلغ</label>
                                <input type="number" step="0.01" name="section_5_name" id="section_5_name" placeholder="المبلغ...">
                            </div>
                            <div class="admin_create_inputs">
                                <label for="section_5_currency">العملة</label>
                            <select name="section_5_currency" id="section_5_currency">
                                @foreach (config('currencies.list') as $code => $name)
                                <option value="{{ $code }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        </div>
                        <div class="flex" style="display: flex;justify-content:center;">

                            <div class="admin_create_inputs">
                                <label hidden for="section_5_rate">سعر الصرف</label>
                                <input value="1" hidden type="text" name="section_5_rate" id="section_5_rate" placeholder="سعر الصرف القسم...">
                            </div>

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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // عناصر المدخلات
        const section1Amount = document.getElementById('section_1_name');
        const section1Rate = document.getElementById('section_1_rate');
        const section2Amount = document.getElementById('section_2_name');
        const section2Rate = document.getElementById('section_2_rate');
        const section3Amount = document.getElementById('section_3_name');
        const section3Rate = document.getElementById('section_3_rate');
        const section4Amount = document.getElementById('section_4_name');
        const section4Rate = document.getElementById('section_4_rate');
        const section5Amount = document.getElementById('section_5_name');
        const section5Rate = document.getElementById('section_5_rate');
        const profitField = document.getElementById('net_profit');  // تأكد من وجود حقل صافي الربح
        // دالة التحديث
        function updateAmounts() {
            const section1Value = parseFloat(section1Amount.value) || 0;
            const section1Exchange = parseFloat(section1Rate.value) || 1;
            const section2Exchange = parseFloat(section2Rate.value) || 1;
            const section3Exchange = parseFloat(section3Rate.value) || 1;
            const section4Exchange = parseFloat(section4Rate.value) || 1;
            const section5Exchange = parseFloat(section5Rate.value) || 1;
            // الحسابات بين الأقسام
            const section2Value = (section1Value / section1Exchange) * section2Exchange; // قسمة القسم الأول على سعر الصرف الأول ثم ضربه في سعر الصرف الثاني
            const section3Value = section2Value / section3Exchange;
            const section4Value = section3Value * section4Exchange;
            const section5Value = section4Value / section5Exchange;
            // عرض النتائج في الحقول
            section2Amount.value = section2Value.toFixed(2);
            section3Amount.value = section3Value.toFixed(2);
            section4Amount.value = section4Value.toFixed(2);
            section5Amount.value = section5Value.toFixed(2);
            const netProfit = section1Value - section4Value;
            profitField.value = netProfit.toFixed(2);  // تحديث الحقل لصافي الربح
        }
        // إضافة مستمعين للأحداث على الحقول
        section1Amount.addEventListener("input", updateAmounts);
        section1Rate.addEventListener("input", updateAmounts);
        section2Rate.addEventListener("input", updateAmounts);
        section3Rate.addEventListener("input", updateAmounts);
        section4Rate.addEventListener("input", updateAmounts);
        section5Rate.addEventListener("input", updateAmounts);
        // التحديث الأول عند تحميل الصفحة
        updateAmounts();
    });
</script>
@endsection


