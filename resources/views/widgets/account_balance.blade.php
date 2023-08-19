<div id="widget-{{ $class->model->id }}" class="{{ $class->model->settings->width }} py-8 bg-mainbg-widgets rounded-lg shadow-lg">
    @include($class->views['header'], ['header_class' => ''])

    <ul class="text-sm space-y-3 my-3">
        @foreach($accounts as $item)
            <li class="flex justify-between">
                {{ $item->name }}

                <span class="font-medium">
                    {{ $item->balance_formatted }}
                </span>
            </li>
        @endforeach
    </ul>
</div>
