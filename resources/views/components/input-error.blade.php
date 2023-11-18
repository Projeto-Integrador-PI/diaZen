@props(['messages'])

@if ($messages)
    <div class="list-group pt-1">
        @foreach ((array) $messages as $message)
            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">
                {{ $message }}
            </a>
        @endforeach
    </div>
@endif
