<div>
    <h1 class="text-2xl font-semibold text-gray-900">Some title</h1>

    <form wire:submit.prevent method="POST">
        @csrf
        @foreach($this->formElements as $element)
            {!! $element->render() !!}
        @endforeach

    </form>
</div>
