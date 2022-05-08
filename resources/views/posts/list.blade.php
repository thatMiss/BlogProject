<ul>
    @foreach($post as $p)
    <li>
        {{$p->title}} {{$p->user->name}}
    </li>
    @endforeach
</ul>