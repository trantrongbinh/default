@foreach ($menus as $menu)
        <a href="{{trans_url($menu->url)}}" >{{$menu->name}}</a>
    @if ($menu->hasChildren())
        @include('litepie.menu.menu.sub.footer', array('menus' => $menu->getChildren()))
    @endif
@endforeach
