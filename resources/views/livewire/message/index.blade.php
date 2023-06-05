<div>
    <section class="d-flex justify-content-center py-3">
        @if(session()->has('message'))
        <h3 class="bg-success font-weight-bold p-2 rounded text-center text-sm text-white">{{session('message')}}</h3>
        @endif
    </section>
</div>
