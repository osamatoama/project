@extends('master')


@section('content')

    <div class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="overflow-hidden">
                        <div class="">
                            <div class=" text-center p-4">
                                <h5 class="font-size-20 p-2">Reset Password</h5>
                            </div>
                        </div>
                        <div class="card-body p-4">

                            <div class="p-3">

                                @if (session('status'))
                                    <div class="alert alert-success mt-5" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif


                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus
                                            placeholder="Enter email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn btn-primary w-md waves-effect waves-light">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
