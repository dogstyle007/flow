@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
         Old Vandals Association
        @endcomponent
    @endslot
{{-- Body --}}
    <!--This is our main message {{ $user }}-->

    A new member has been registered and is currently awaiting confirmation
    
    Registered member: {{$user['fullname']}}
    
    Registered member email: {{$user['email']}}

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

         @component('mail::button', ['url' => config('app.confirmnurl'), 'color' => 'green'])
            Approve member
        @endcomponent

        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. Super FOOTER!
        @endcomponent
    @endslot
@endcomponent