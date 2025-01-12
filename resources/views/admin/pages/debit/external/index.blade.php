
<div class="account_title">
    <h3>الديون الخارجية</h3>
</div>
<div class="home_content">
    <div class="home_data">
        {{--  analytics  --}}
        <div class="home_cn">
            <a href="{{ route('external.create') }}">
                <div class="home_bg" style="background-color: #1b2d68;">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i style="background-color: #ffffff;color: #334da0;" class="fa-solid fa-plus"></i></div>
                        </div>
                        <h2 style="color: #fff;">
                            اضف معاملة جديدة <span>عدد الديون الخارجية - {{ count($externals) }}</span>
                        </h2>
                    </div>
                </div>
            </a>
            @foreach($externals as $key => $external)
            <a href="{{ route('external.edit',['ExternalId' => $external->id]) }}">
                <div class="home_bg">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i class="fa-solid fa-bars"></i></div>
                        </div>
                        <h2> {{ $external->amount }} <span> {{ $key+1 }}</span></h2>
                        <h2> {{ $external->reason }} <span> {{ $key+1 }}</span></h2>
                        <h2> {{ $external->currency }} <span> {{ $key+1 }}</span></h2>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
