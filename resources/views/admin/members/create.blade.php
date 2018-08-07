@extends('main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.members.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                             <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username/Nickname') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                         <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="employerName" class="col-md-4 col-form-label text-md-right">{{ __('Employer Name') }}</label>

                            <div class="col-md-6">
                                <input id="employerName" type="employerName" class="form-control{{ $errors->has('employerName') ? ' is-invalid' : '' }}" name="employerName" required>

                                @if ($errors->has('employerName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('employerName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                              <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>

                            <div class="col-md-6">
                                <input id="designation" type="designation" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" required>

                                @if ($errors->has('designation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="yearOfCompletion" class="col-md-4 col-form-label text-md-right">{{ __('Year of Completion') }}</label>

                            <div class="col-md-6">
                            <input id="yearOfCompletion" type="number" min="2000" max="2018" step="1" value="2018" class=" form-control{{ $errors->has('yearOfCompletion') ? ' is-invalid' : '' }}" name="yearOfCompletion" required>

                                @if ($errors->has('yearOfCompletion'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('yearOfCompletion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                            <div class="form-group row">
                            <label for="mStatus" class="col-md-4 col-form-label text-md-right">{{ __('Marriage Status') }}</label>

                            <div class="col-md-6">
                                <select id="mStatus" type="mStatus" class="form-control{{ $errors->has('mStatus') ? ' is-invalid' : '' }}" name="mStatus" required placeholder="select">
                                <style>
                                    select:invalid { color: gray; }
                                </style>
                                  <option value="" disabled selected hidden>Select</option>
                                  <option value="single">Single</option>
                                  <option value="married">Married</option>
                                  <option value="divorced">Divorced</option>

                                @if ($errors->has('mStatus'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mStatus') }}</strong>
                                    </span>
                                @endif
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Residence Address/Landmark') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region Associated') }}</label>

                            <div class="col-md-6">
                                <select id="region" type="region" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" required placeholder="select">
                                <style>
                                    select:invalid { color: gray; }
                                </style>
                                
                                  <option value="" disabled selected hidden>Select</option>
                                  <option value="Greater Accra">Greater Accra</option>
                                  <option value="Central">Central</option>
                                  <option value="Eastern">Eastern</option>
                                  <option value="Upper East">Upper East</option>
                                  <option value="Upper West">Upper West</option>
                                  <option value="Ashanti">Ashanti</option>
                                  <option value="Western">Western</option>
                                  <option value="Northern">Northern</option>
                                  <option value="Eastern">Eastern</option>
                                  <option value="Volta">Volta</option>
                                  <option value="Brong Ahafo">Brong Ahafo</option>
                
                                @if ($errors->has('region'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="diaspora" class="col-md-4 col-form-label text-md-right">{{ __('Residence in diaspora') }}</label>

                            <div class="col-md-6">
                                <input id="diaspora" type="diaspora" class="form-control{{ $errors->has('diaspora') ? ' is-invalid' : '' }}" name="diaspora">

                                @if ($errors->has('diaspora'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('diaspora') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-right"></i>
                                    {{ __('Register member') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
