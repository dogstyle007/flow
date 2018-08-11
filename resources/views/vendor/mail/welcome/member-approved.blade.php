@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
         Old Vandals Association
        @endcomponent
    @endslot
{{-- Body --}}
    <!--This is our main message {{ $user }}-->

    Thank you for your patience {{$user['fullname']}}
    
    Your registration is now approved. You can now access all the site features.

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

        @component('mail::button', ['url' => config('app.loginurl'), 'color' => 'green'])
            Login to the portal
        @endcomponent

        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent