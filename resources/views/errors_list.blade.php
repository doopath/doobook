@if ($errors->any())
<ul class="errors_list">
    @foreach ($errors->all() as $error)
        <li class="errors_list__item">{{ $error }}</li>
    @endforeach
</ul>
@endif