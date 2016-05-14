<ul class="breadcrumb">
    @foreach($breadcrumbs as $breadcrumb)
        @if(isset($breadcrumb['link']))
            <li class="{{ $breadcrumb['active'] ? 'active' : ''}}"><a href="#">{{ $breadcrumb['title'] }}</a></li>
        @else
            <li class="{{ $breadcrumb['active'] ? 'active' : ''}}">{{ $breadcrumb['title'] }}</li>
        @endif
    @endforeach
</ul>