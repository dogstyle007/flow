@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
         Old Vandals Association
        @endcomponent
    @endslot
{{-- Body --}}
    <!--This is our main message {{ $user }}-->

    Thank you {{$user['fullname']}}.

    Your dues payment of GH₵{{ $user->payment }} has been confirmed and updated in your profile dashboard.
    

{{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset
{{-- Footer --}}
    @slot('footer')

         @component('mail::button', ['url' => config('app.dashboardurl'), 'color' => 'green'])
            Login to your dashboard
        @endcomponent

        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent