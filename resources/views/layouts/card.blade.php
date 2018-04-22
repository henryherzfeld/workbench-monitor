<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-{{ $icon }} mr-2"></i>{{ empty($title) ? $title = '' : $title}}
    </div>

    <div class="card-body">

        {{ $slot }}

    </div>
</div>