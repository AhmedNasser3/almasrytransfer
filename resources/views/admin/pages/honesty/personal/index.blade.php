
<div class="account_title">
    <h3>الامانات (الشخصية)</h3>
</div>
<div class="home_content">
    <div class="home_data">
        {{--  analytics  --}}
        <div class="home_cn">
            <a href="{{ route('personal.create') }}">
                <div class="home_bg" style="background-color: #1b2d68;">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i style="background-color: #ffffff;color: #334da0;" class="fa-solid fa-plus"></i></div>
                        </div>
                        <h2 style="color: #fff;">
                            اضف معاملة جديدة <span>عدد الامانات (الشخصية) - {{ count($externals) }}</span>
                        </h2>
                    </div>
                </div>
            </a>
            @foreach($personalHonesties as $key => $personalHonesty)
            <a href="{{ route('personal.edit',['PersonalHonestyId' => $personalHonesty->id]) }}">
                <div class="home_bg">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i class="fa-solid fa-bars"></i></div>
                        </div>
                        <h2> {{ $personalHonesty->amount }} <span> {{ $key+1 }}</span></h2>
                        <h2> {{ $personalHonesty->reason }} <span> {{ $key+1 }}</span></h2>
                        <h2> {{ $personalHonesty->currency }} <span> {{ $key+1 }}</span></h2>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
