@extends('admin.master')
@section('AdminContent')
<div class="home" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <div class="home_container">
        <div class="home_alarm">
            <div class="home_container_container">
                <div class="home_container_title">
                    <h2>
                        <span>
                            <i class="fa-solid fa-circle-info"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        مرحبا بك  {{ auth()->check() ? auth()->user()->name : 'لست مسجل في الموقع' }}
                    </h2>
                <i id="home_toggle" class="fa-solid fa-x"></i> <!-- Toggle Icon -->
            </div>
        </div>
    </div>
    <div class="account_title">
        <h3>الاقسام</h3>
    </div>
    <div class="home_content">
        <div class="home_data">
            {{--  analytics  --}}
            <div class="home_cn">
                <a href="{{ route('category.create') }}">
                    <div class="home_bg" style="background-color: #1b2d68;">
                        <div class="home_title">
                            <div class="home_icons">
                                <div class="home_icon"><i style="background-color: #ffffff;color: #334da0;" class="fa-solid fa-plus"></i></div>
                            </div>
                            <h2 style="color: #fff;">
                                اضف قسم جديد <span>عدد الاقسام الحالية - {{ count($categories) }}</span>
                                {{ auth()->check() ? 'الكاش' : '' }}<span>{{ auth()->check() ? auth()->user()->cash : '' }} / MRU</span>
                            </h2>
                        </div>
                    </div>
                </a>
            @foreach($categories as $key => $category)
            <div class="home_bg">
                <div class="home_title">
                    <div class="home_icons">
                        <div class="home_icon"><i class="fa-solid fa-bars"></i></div>
                    </div>
                    <h2> {{ $category->name }} <span> {{ $key+1 }}</span></h2>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="account_title">
    <h3>المعاملات</h3>
</div>
<div class="home_content">
    <div class="home_data">
        {{--  analytics  --}}
        <div class="home_cn">
            <a href="{{ route('wallet.create') }}">
                <div class="home_bg" style="background-color: #1b2d68;">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i style="background-color: #ffffff;color: #334da0;" class="fa-solid fa-plus"></i></div>
                        </div>
                        <h2 style="color: #fff;">
                            اضف معاملة جديدة <span>عدد المعاملات - {{ count($wallets) }}</span>
                        </h2>
                    </div>
                </div>
            </a>
            @foreach($wallets as $key => $wallet)
            <div class="home_bg">
                <div class="home_title">
                    <div class="home_icons">
                        <div class="home_icon"><i class="fa-solid fa-bars"></i></div>
                    </div>
                    @php
                        $result = $wallet['section_1_name'] - $wallet['section_5_name'];
                    @endphp
                    <h2> {{ $result }} <span> {{ $key+1 }}</span></h2>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</div>
@include('admin.pages.debit.external.index')
@include('admin.pages.debit.internal.index')
</div>
</div>
@endsection
