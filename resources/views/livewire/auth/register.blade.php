<div>
    <div class="account-section section-padding fix">
        <div class="container">
            <div class="account-wrapper bg-white p-1 p-sm-4">
                <div class="row gx-40 gy-5 gy-md-0">
                    <div class="col-lg-6">
                        <div class="account-card bg-color2 p-3 p-sm-5">
                            <div class="logo text-center">
                                <img src="assets/img/logo/accountLogo.png" alt="logo">
                            </div>
                            <h3>Register</h3>
                            <p>Please Enter Your Details</p>
                            <div class="contact-form style2 bg-color2 p-0">
                                <form wire:submit.prevent='save' class="row" action="#">
                                    <div class="col-12">
                                        <input wire:model="name" type="text" placeholder="Name">
                                    </div>
                                    @error('name')
                                        <div class="col-12">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror

                                    <div class="col-12">
                                        <input wire:model="email" type="email" placeholder="Email">
                                    </div>
                                    @error('email')
                                        <div class="col-12">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <div class="col-12">
                                        <div class="form-ctl">
                                            <input wire:model="password" type="password" placeholder="Password">
                                            <div class="icon"><i class="fa-sharp fa-solid fa-eye-slash"></i></div>
                                        </div>
                                    </div>
                                    @error('password')
                                        <div class="col-12">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                    <div class="col-12">
                                        <button type="submit" class="theme-btn rounded-5 w-100 mb-3">Register</button>
                                    </div>
                                </form>

                                <h6>Already have an account? <a href="{{ route('login') }}"
                                        class="text-theme-color">Sign In</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="account-thumb">
                            <img src="assets/img/profile/profile.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
