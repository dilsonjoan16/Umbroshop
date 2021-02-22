
@if (session('info'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    {{session('info')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('info1'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    {{session('info1')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('info2'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    {{session('info2')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if (session('info3'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    {{session('info3')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif