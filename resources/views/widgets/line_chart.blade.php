<div id="widget-{{ $class->model->id }}" class="{{ $class->model->settings->width }} p-6 bg-mainbg-widgets">
    @include($class->views['header'])

    <div class="card-body" id="widget-line-{{ $class->model->id }}">
        <div class="chart">
            {!! $chart->container() !!}
        </div>
    </div>
</div>

@push('body_scripts')
    {!! $chart->script() !!}
@endpush
