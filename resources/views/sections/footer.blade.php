<footer class="content-info">
  @if(!empty(get_field('footer_logo', 'option')))
    @php($ftrLogo = get_field('footer_logo', 'option'))
    <img 
      src="{{$ftrLogo['url']}}" 
      alt="{{$ftrLogo['alt']}}" 
      width="240" 
      height="auto">  
  @else
    FOOTER LOGO PLACEHOLDER
  @endif
</footer>
