<div class="btn" role="group" aria-label="Basic example">
    <a href="{{ empty($back) ? Auth::user()->previous : $back}}"><button type="button" class="btn btn-secondary float-left">Back</button></a>
    <a href="{{ $slot }}"><button type="button"  class="btn btn-primary">Next</button></a>
</div>