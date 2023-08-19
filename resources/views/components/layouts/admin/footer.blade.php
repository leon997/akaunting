@stack('footer_start')
    <footer class="footer container">
        <div class="flex flex-col sm:flex-row items-center justify-between lg:mt-20 py-7 text-sm font-light">
            @if(! $user->subscribed("basic"))
                <span class="text-black">Vaše poizkusno obdobje poteče: {{ $user->trial_ends_at }}</span>
            @endif
        </div>
    </footer>
@stack('footer_end')
