@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }} class="">
        <div class="font-medium text-danger text-center text-red-600">
            {{ 'There Is An Error In The Data' }}
        </div>

        <ul class="mt-3 text-danger text-center list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
