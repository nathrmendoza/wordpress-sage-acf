@if(have_rows('page_components'))
    @while(have_rows('page_components')) 
    @php
        the_row();
        $layout = get_row_layout();
        $data = [];

        switch($layout) {
            case 'wysiwyg':
                $data = [
                    'content' => get_sub_field('content')
                ];   
                break;
            case 'basic-hero':
                $data = [
                    'heading' => get_sub_field('heading'),
                    'image' => get_sub_field('featured_image')
                ];
                break;
            case 'two-column':
                $data = [
                    'heading' => get_sub_field('heading'),
                    'lcol' => get_sub_field('left_column'),
                    'rcol' => get_sub_field('right_column')
                ];
                break;
            default:
                echo $layout . ' HAS NO EQUIVALENT COMPONENT FILE YET!';
                break;
        }
    @endphp
    @includeIf('components.' . $layout, $data)
    @endwhile
@endif