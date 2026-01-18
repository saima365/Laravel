<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Loan Application</h4>
                </div>

                <div class="card-body">

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('loans.store') }}">
                        @csrf

                        {{-- Applicant Name --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Full Name</strong></label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ old('name') }}" required>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Email</strong></label>
                            <input type="email" name="email" class="form-control"
                                   value="{{ old('email') }}" required>
                        </div>

                        {{-- Phone --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Phone</strong></label>
                            <input type="tel" name="phone" class="form-control"
                                   value="{{ old('phone') }}" required>
                        </div>

                        {{-- Loan Amount --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Loan Amount</strong></label>
                            <input type="number" name="loan_amount" class="form-control"
                                   min="0" step="0.01"
                                   value="{{ old('loan_amount') }}" required>
                        </div>

                        {{-- Loan Purpose --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Purpose of Loan</strong></label>
                            <input type="text" name="purpose" class="form-control"
                                   placeholder="Business, Education, Personal, etc."
                                   value="{{ old('purpose') }}" required>
                        </div>

                        {{-- Loan Duration --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Loan Duration (Months)</strong></label>
                            <input type="number" name="duration_months" class="form-control"
                                   min="1" value="{{ old('duration_months') }}" required>
                        </div>

                        {{-- Monthly Income --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Monthly Income</strong></label>
                            <input type="number" name="monthly_income" class="form-control"
                                   min="0" step="0.01"
                                   value="{{ old('monthly_income') }}" required>
                        </div>

                        {{-- Notes --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Additional Notes</strong></label>
                            <textarea name="notes" class="form-control"
                                      rows="3"
                                      placeholder="Optional">{{ old('notes') }}</textarea>
                        </div>

                        {{-- Submit --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">
                                Submit Loan Application
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
