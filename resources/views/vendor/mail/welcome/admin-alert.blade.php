@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
         Old Vandals Association
        @endcomponent
    @endslot
{{-- Body --}}
    <!--This is our main message {{ $user }}-->

    Hurray!!! you're now an admin {{$user['fullname']}}.

    You now have full permissions to do more in the portal.
    

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

         @component('mail::button', ['url' => config('app.adminurl'), 'color' => 'green'])
            Login to the admin dashboard
        @endcomponent

        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent