<ul class="breadcrumb">
    @foreach($breadcrumbs as $breadcrumb)
        @if(isset($breadcrumb['link']))
            <li class="{{ isset($breadcrumb['active']) ? 'active' : ''}}"><a href="{{ $breadcrumb['link'] }}">{{ $breadcrumb['title'] }}</a></li>
        @else
            <li class="{{ isset($breadcrumb['active']) ? 'active' : ''}}">{{ $breadcrumb['title'] }}</li>
        @endif
    @endforeach
</ul>