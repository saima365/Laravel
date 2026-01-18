
@extends('layout.erp.app')
@section("content")


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Add Transaction</h4>
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

                    <form method="POST" action="{{ Url('account/store') }}"  enctype="multipart/form-data">
                        @csrf
                         {{-- account number --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Account Number</strong></label>
                            <input type="number" name="amount" class="form-control"
                                   step="0.01" min="0" value="{{ old('account number') }}" required>
                        </div>
                         {{-- account holder --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Account Holder</strong></label>
                            <input type="number" name="amount" class="form-control"
                                   step="0.01" min="0" value="{{ old('account number') }}" required>
                        </div>
                        {{-- Transaction Type --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Transaction Type</strong></label>
                            <select name="type" class="form-control" required>
                                <option value="">Select type</option>
                                <option value="Payment" {{ old('type') == 'Payment' ? 'selected' : '' }}>Payment</option>
                                <option value="Withdrawal" {{ old('type') == 'Withdrawal' ? 'selected' : '' }}>Withdrawal</option>
                                <option value="Deposit" {{ old('type') == 'Deposit' ? 'selected' : '' }}>Deposit</option>
                            </select>
                        </div>

                        {{-- Amount --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Amount</strong></label>
                            <input type="number" name="amount" class="form-control"
                                   step="0.01" min="0" value="{{ old('amount') }}" required>
                        </div>



                        {{-- Transaction Date --}}
                        <div class="mb-3">
                            <label class="form-label"><strong>Date</strong></label>
                            <input type="date" name="transaction_date"
                                   class="form-control"
                                   value="{{ old('transaction_date', date('Y-m-d')) }}" required>
                        </div>


                        {{-- Submit --}}
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary w-100">
                                Save Transaction
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
