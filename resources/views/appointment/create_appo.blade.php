@extends('layouts.navbar2')
@section('content')

<section id="appointment" class="appointment section-bg" style="background: url('../images/a3.jpg') no-repeat;">
    <div class="container mt-5">
        <div class="section-title mt-5">

            @if (session('Done'))
            <div class="alert alert-success" role="alert">
                {{ session('Done')}}
            </div>
            @endif

            <h2>Make an Appointment</h2>
            <p>
                To schedule an appointment, simply visit our website and select the "Make an Appointment" option from
                the menu. You will be directed to a user-friendly interface where you can choose the department you wish
                to see, select a healthcare professional, and choose a date and time that works best for you.
                We invite you to experience our exceptional care for yourself by using our online booking system to
                schedule your next appointment.
            </p>
        </div>

        <form method="POST" action="/store_appointment">
            @csrf
            <div class="row">

                <div class="col-md-4 form-group">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        placeholder="Your Name" value="{{ old('name') }}" required>
                    
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" placeholder="Your Email" value="{{ old('email') }}" required>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                        placeholder="Your Phone" value="{{ old('phone') }}" required>

                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 form-group mt-3">
                    <input type="date" name="date" class="form-control datepicker @error('date') is-invalid @enderror"
                        id="date" placeholder="Appointment Date" value="{{ old('date') }}" required>
                    
                    @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 form-group mt-3">
                    <select name="department" id="department"
                        class="form-select @error('department') is-invalid @enderror" required>
                        <option value="" {{ old('department') == '' ? 'selected' : '' }}>Select Department</option>
                        <option value="Cardiology" {{ old('department') == 'Cardiology' ? 'selected' : '' }}>Cardiology
                        </option>
                        <option value="Neurology" {{ old('department') == 'Neurology' ? 'selected' : '' }}>Neurology
                        </option>
                        <option value="Hepatology" {{ old('department') == 'Hepatology' ? 'selected' : '' }}>Hepatology
                        </option>
                        <option value="Pediatrics" {{ old('department') == 'Pediatrics' ? 'selected' : '' }}>Pediatrics
                        </option>
                        <option value="Eye Care" {{ old('department') == 'Eye Care' ? 'selected' : '' }}>Eye Care
                        </option>
                    </select>

                    @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-4 form-group mt-3">
                    <select name="doctor" id="doctor" class="form-select @error('doctor') is-invalid @enderror"
                        required>
                        <option value="" {{ old('doctor') == '' ? 'selected' : '' }}>Select Doctor</option>
                        <option value="Walter White" {{ old('doctor') == 'Walter White' ? 'selected' : '' }}>Walter
                            White</option>
                        <option value="Sarah Jhonson" {{ old('doctor') == 'Sarah Jhonson' ? 'selected' : '' }}>Sarah
                            Jhonson</option>
                        <option value="William Anderson" {{ old('doctor') == 'William Anderson' ? 'selected' : '' }}>
                            William Anderson</option>
                        <option value="Amanda Jepson" {{ old('doctor') == 'Amanda Jepson' ? 'selected' : '' }}>Amanda
                            Jepson</option>
                    </select>

                    @error('doctor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group mt-3">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
                    placeholder="Message (Optional)" required>{{ old('message') }}</textarea>

                @error('message')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="text-center mt-4 mb-5"><button type="submit"
                    class="btn btn-primary">{{ __('Submit Appointment') }}</button></div>
        </form>
    </div>
</section><!-- End Appointment Section -->

@endsection
