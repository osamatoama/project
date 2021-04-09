@extends('master')

@section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index" class="text-dark"><i class="fas fa-home h2"></i></a>
        </div>
        <div class="account-pages my-5 pt-5">
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
                                    <form class="form-horizontal mt-4" method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group">
                                            <label for="useremail">Email</label>
                                            <input type="email" class="form-control  @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" id="useremail" name="email" required placeholder="Enter email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required id="userpassword" placeholder="Enter password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="userpassword">Confirm Password</label>
                                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter password">
                                        </div>

                                        <div class="form-group row  mb-0">
                                            <div class="col-12 text-right">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset Password</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="mt-5 text-center">
                            <p>Remember It ? <a href="{{url('login')}}" class="font-weight-medium text-primary"> Sign In here </a> </p>
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Autowats. Crafted with <i class="mdi mdi-heart text-danger"></i> by Our Developers</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
