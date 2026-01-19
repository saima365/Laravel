@extends('layout.erp.app')
@section('content')


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

                        <form method="POST" action="{{ Url('transaction/save') }}" enctype="multipart/form-data">
                            @csrf
                            {{-- account number --}}

                            <label class="form-label"><strong>Account Number</strong></label>
                            <div class="input-group mb-3">
                                <input type="number" name="account_id" class="form-control account_number"
                                    placeholder="account number" aria-label="Recipient's username"
                                    aria-describedby="button-addon2" value="{{ old('account_id') }}">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                            </div>

                            {{-- account holder --}}
                            <div class="mb-3">
                                <label class="form-label"><strong>Account Holder</strong></label>
                                <input type="text" name="account_holder" class="form-control account_holder"
                                    id="account_holder" required>
                                <input type="hidden" name="account_holder_id" id="account_holder_id">
                            </div>
                            {{-- Transaction Type --}}
                            <div class="mb-3">
                                <label class="form-label"><strong>Transaction Type</strong></label>
                                <select name="transaction_type_id" class="form-control text-primary" required>
                                    <option value="">Select type</option>
                                    @foreach ( $transactionTypes as $type)
                                        <option value="{{ $type->id }}"
                                            {{ old('transaction_type_id') == $type->id ? 'selected' : '' }}>
                                            {{ $type->type_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Amount --}}
                            <div class="mb-3">
                                <label class="form-label"><strong>Amount</strong></label>
                                <input type="number" name="amount" class="form-control" step="0.01" min="0"
                                    value="{{ old('amount') }}" required>
                            </div>



                            {{-- Transaction Date --}}
                            <div class="mb-3">
                                <label class="form-label"><strong>Date</strong></label>
                                <input type="date" name="date" class="form-control"
                                    value="{{ old('date', date('Y-m-d')) }}" required>
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


@section('js')
    <script>
        document.querySelector("#button-addon2").addEventListener("click", function() {

            let account_number = document.querySelector(".account_number").value;

            if (!account_number) {
                alert("Please enter account number");
                return;
            }



            let url = `{{ URL('/user_by_account_number') }}/${account_number}`;

            fetch(url)
                .then(res => {
                    if (!res.ok) {
                        throw new Error("User not found");
                    }
                    console.log(res);
                    return res.json();

                })
                .then(data => {
                    console.log(data);
                    document.querySelector(".account_holder").value = data.customer_name;
                    document.querySelector("#account_holder_id").value = data.customer_id;

                })
                .catch(err => {
                    console.error(err);
                    alert("Account not found");
                });

        });
    </script>
@endsection
