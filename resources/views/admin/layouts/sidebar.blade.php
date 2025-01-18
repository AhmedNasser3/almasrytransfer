<div class="sidebar" style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }};">
    <div class="sidebar_container">
        <div class="sidebar_content">
            <div class="sidebar_data">
                <div class="sidebar_logo">
                    <h3>المصري</h3>
                    {{--  <img src="{{ asset('images/الشعار.png') }}" alt="">  --}}
                </div>
                <div class="sidebar_title">
                    <h4>لوحة تحكم</h4>
                    <div class="sidebar_links">
                        <ul style="direction: {{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                            <li>
                                <a href="#" class="sidebar_link">ادارة <span class="arrow"><i class="fa-solid fa-arrow-down"></i></span></a>
                                <ul class="sidebar_link_bg">
                                    <a href="{{ route('internal.create') }}"><li>ديون داخلية</li></a>
                                    <a href="{{ route('external.create') }}"><li>ديون خارجية</li></a>
                                    <a href="{{ route('wallet.all') }}"><li>جميع المعاملات</li></a>
                                    <a href=""><li>امانات (شخصية)</li></a>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="sidebar_link">اضف مستخدمين <span class="arrow"><i class="fa-solid fa-arrow-down"></i></span></a>
                                <ul class="sidebar_link_bg">
                                    <a href="{{ route('user.view') }}"><li>مشاهدة جميع المستخدمين</li></a>
                                    <a href="{{ route('user.create') }}"><li>انشيئ مستخدم</li></a>

                                </ul>
                            </li>
                            @if (auth()->check())
                            <li>
                                <a href="{{ route('profile.show') }}" class="sidebar_link">حسابي<span class="arrow"><i class="fa-regular fa-user"></i></span></a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="sidebar_link"> دخول<span class="arrow"><i class="fa-regular fa-user"></i></span></a>
                            </li>
                            {{--  <li>
                                <a href="{{ route('register') }}" class="sidebar_link">تسجيل<span class="arrow"><i class="fa-regular fa-user"></i></span></a>
                            </li>  --}}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
