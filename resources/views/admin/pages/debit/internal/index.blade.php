
<div class="account_title">
    <h3>الديون الداخلية</h3>
</div>
<div class="home_content">
    <div class="home_data">
        <div class="home_cn">
            <a href="{{ route('internal.create') }}">
                <div class="home_bg" style="background-color: #1b2d68;">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i style="background-color: #ffffff;color: #334da0;" class="fa-solid fa-plus"></i></div>
                        </div>
                        <h2 style="color: #fff;">
                            اضف معاملة جديدة <span>عدد الديون الداخلية - {{ count($internals) }}</span>
                        </h2>
                    </div>
                </div>
            </a>
            @foreach($internals as $key => $internal)
            <a href="{{ route('internal.edit',['InternalId' => $internal->id]) }}">
                <div class="home_bg">
                    <div class="home_title">
                        <div class="home_icons">
                            <div class="home_icon"><i class="fa-solid fa-bars"></i></div>
                        </div>
                        <h2> {{ $internal->amount }} <span> {{ $key+1 }}</span></h2>
                        <h2> {{ $internal->reason }} <span> {{ $key+1 }}</span></h2>
                        <h2> {{ $internal->currency }} <span> {{ $key+1 }}</span></h2>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
