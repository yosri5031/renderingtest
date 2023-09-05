<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');

*, body {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}

html, body {
    height: 100%;
    background-color: #152733;
    overflow: hidden;
}

.form-holder {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    min-height: 100vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 60px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
}

.form-content h3 {
    color: #fff;
    text-align: left;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 5px;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}

.form-content p {
    color: #fff;
    text-align: left;
    font-size: 17px;
    font-weight: 300;
    line-height: 20px;
    margin-bottom: 30px;
}

.form-content label,
.was-validated .form-check-input:invalid~.form-check-label,
.was-validated .form-check-input:valid~.form-check-label {
    color: #fff;
}

.form-content input[type=text],
.form-content input[type=password],
.form-content input[type=email],
.form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}

.btn-primary {
    background-color: #a0cff8;
    outline: none;
    border: 0px;
    box-shadow: none;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active {
    background-color: #495056;
    outline: none !important;
    border: none !important;
    box-shadow: none;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover,
.form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up {
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback {
    color: #ff606e;
}

.valid-feedback {
    color: #2acc80;
}

/* Additional CSS for the merged page */

.flex {
    display: flex;
}

.flex-col {
    flex-direction: column;
}

.justify-center {
    justify-content: center;
}

.md\\:flex-row {
    flex-direction: row;
}

.md\\:items-center {
    align-items: center;
}

.md\\:h-screen {
    height: 100vh;
}

.w-full {
    width: 100%;
}

.p-6 {
    padding: 24px;
}

.bg-white {
    background-color: #fff;
}

.rounded-lg {
    border-radius: 10px;
}

.text-3xl {
    font-size: 48px;
}

.font-bold {
    font-weight: 700;
}

.text-primary {
    color: #6C757D;
}

.mb-6 {
    margin-bottom: 24px;
}

.mb-4 {
    margin-bottom: 16px;
}

.text-sm {
    font-size: 13px;
}

.text-gray-600 {
    color: #6B7280;
}

.hover\\:text-gray-900:hover {
    color: #111827;
}

.mr-4 {
    margin-right: 16px;
}

.px-6 {
    padding-left: 24px;
    padding-right: 24px;
}

.py-2 {
    padding-top: 8px;
    padding-bottom: 8px;
}

.text-white {
    color: #fff;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

<x-guest-layout>

    <div class="flex justify-center md:flex-row md:items-center md:h-screen">  
      <div class="w-full p-6 md:w-1/2">
        <!-- Image or content -->
        <img src="{{ asset('img/signup.webp') }}" alt="Signup Image">

      </div>
  
      <div class="w-full max-w-md bg-white p-6 rounded-lg mx-auto">  
        <h1 class="text-3xl font-bold text-primary mb-6">{{ __('Register') }}</h1>
  
        <x-jet-validation-errors class="mb-4" />
  
        <form method="POST" action="{{ route('register') }}">
          @csrf
  
          <!-- Name -->
          <div class="mb-4">
            <x-jet-label value="{{ __('Name') }}" />
            <x-jet-input class="w-full border rounded py-2 px-3" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
          </div>
  
          <!-- Email -->
          <div class="mb-4">
            <x-jet-label value="{{ __('Email') }}" />
            <x-jet-input class="w-full border rounded py-2 px-3" type="email" name="email" :value="old('email')" required />
          </div>
  
          <!-- Password -->
          <div class="mb-4">
            <x-jet-label value="{{ __('Password') }}" />
            <x-jet-input class="w-full border rounded py-2 px-3" type="password" name="password" required autocomplete="new-password" />
          </div>
  
          <!-- Confirm Password -->
          <div class="mb-4">
            <x-jet-label value="{{ __('Confirm Password') }}" />
            <x-jet-input class="w-full border rounded py-2 px-3" type="password" name="password_confirmation" required autocomplete="new-password" />
          </div>
  
          <!-- Terms -->
          @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mb-4">
              <x-jet-label for="terms">
                <div class="flex items-center">
                  <x-jet-checkbox name="terms" id="terms"/>
                  <div class="ml-2">
                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                      'terms_of_service' => '<a target="_blank" href="...">'.__('Terms of Service').'</a>',
                      'privacy_policy' => '<a target="_blank" href="...">'.__('Privacy Policy').'</a>'
                    ]) !!}
                  </div>
                </div>
              </x-jet-label>
            </div>
          @endif
  
          <div class="flex justify-end mt-6">
            <a class="text-sm text-gray-600 hover:text-gray-900 mr-4" href="{{ route('login') }}">
              {{ __('Already registered?') }}
            </a>
            
            <button class="px-6 py-2 font-bold rounded bg-blue-500 text-white">
              {{ __('Register') }}  
            </button>
          </div>
        </form>
  
      </div>
  
    </div>
  
  </x-guest-layout>