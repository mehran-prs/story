<ul class="nav navbar-nav">
    <li><a href="{{ url('admin/posts') }}">قصه ها</a></li>
    <li><a href="{{ url('admin/categories') }}">دسته ها</a></li>
    <li><a href="{{ url('admin/comments') }}">نظرات</a></li>
    <li><a href="{{ url('admin/tags') }}">تگ ها</a></li>

    @if (Auth::user()->is_admin)
        <li><a href="{{ url('admin/users') }}">کاربران</a></li>
    @endif
</ul>
