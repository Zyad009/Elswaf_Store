<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify Email</title>
  {{-- <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/png"> --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .otp-input {
      width: 3rem;
      height: 3rem;
      text-align: center;
      font-size: 1.5rem;
    }
  </style>
</head>

<body class="bg-dark text-light d-flex justify-content-center align-items-center min-vh-100">
  <div class="bg-secondary p-4 rounded shadow w-100" style="max-width: 400px;">
    <h2 class="text-center mb-4">Verify Your Email</h2>
    <p class="text-center text-light">Enter the 6-digit OTP sent to your email</p>

    @session("error")
    <p class="text-center text-danger">{{ session("error") }}</p>
    @endsession

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <p class="text-center text-danger">{{ $error }}</p>
    @endforeach
    @endif

    <form id="otpForm" action="{{route('verify.email.store')}}" method="POST">
      @csrf
      <input type="hidden" name="email" value="{{ $email }}">
      <div class="d-flex justify-content-center gap-2 mb-4">
        @for ($i = 1; $i <= 6; $i++) <input type="text" name="otp[]" maxlength="1" class="form-control otp-input"
          required pattern="[0-9]" autofocus>
          @endfor
      </div>
      <button type="submit" class="d-none">Verify</button>
    </form>

    @error('otp')
    <p class="text-danger text-center mt-2">{{ $message }}</p>
    @enderror
  </div>

  <script>
    const otpInputs = document.querySelectorAll('.otp-input');
        const otpForm = document.getElementById('otpForm');

        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.match(/[^0-9]/)) {
                    input.value = '';
                }

                if (input.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }

                if (Array.from(otpInputs).every(i => i.value.length === 1)) {
                    otpForm.submit();
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value === '' && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>