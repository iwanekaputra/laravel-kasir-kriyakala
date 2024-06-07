<div>

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="/img/img_salmon_logo.webp" alt="logo" width="100" class="">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate=""
                                    wire:submit.prevent="login">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        @error('email')
                                            <div class="text-danger">
                                                {{ $message }}</div>
                                        @enderror
                                        <input id="email" type="email"
                                            class="form-control @error('email')
                          border-danger
                      @enderror"
                                            name="email" tabindex="1" required autofocus wire:model="email">
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            @error('password')
                                                <div class="text-danger">
                                                    {{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input id="password" type="password"
                                            class="form-control @error('password')
                          border-danger
                      @enderror"
                                            name="password" tabindex="2" required wire:model="password">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
