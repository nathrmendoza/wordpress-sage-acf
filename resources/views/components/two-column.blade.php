<section class="two-column">
    <div class="main-container">
        @if (!empty($heading))
            <h3>{{ $heading }}</h3>
        @endif
        <div class="two-col-flex">
            @if (!empty($lcol['text_content']) || !empty($lcol['image']))
                <div class="left-col">
                    @if(!empty($lcol['text_content']))
                        {!! $lcol['text_content'] !!}
                    @endif
                    @if(!empty($lcol['image']))
                        <img 
                            src="{{$lcol['image']['url']}}" 
                            alt="{{$lcol['image']['alt']}}" 
                            width="640" 
                            height="auto" >
                    @endif
                </div>
            @endif
            @if (!empty($rcol['text_content']) || !empty($rcol['image']))
            <div class="right-col">
                @if(!empty($rcol['text_content']))
                    {!! $rcol['text_content'] !!}
                @endif
                @if(!empty($rcol['image']))
                    <img 
                        src="{{$rcol['image']['url']}}" 
                        alt="{{$rcol['image']['alt']}}" 
                        width="640" 
                        height="auto" >
                @endif
            </div>
            @endif
        </div>
    </div>
</section>