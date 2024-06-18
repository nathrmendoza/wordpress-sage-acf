<section class="basic-hero">
    <div class="main-container">
        <h1>{{$heading}}</h1>
        @if (!empty($image))
            <img 
                src="{{$image['url']}}" 
                alt="{{$image['alt']}}" 
                width="1920" 
                height="auto">
        @endif
    </div>
</section>