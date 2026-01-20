@extends('layout.erp.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Bank Statement</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
                color: white;
            }

            .container {
                width: 900px;
                margin: auto;
            }

            .header {
                display: flex;
                justify-content: space-between;
            }

            .bank-logo {
                font-size: 26px;
                font-weight: bold;
                color: #0eec19;
            }

            .bank-info {
                text-align: right;
                font-size: 11px;
            }

            .ref-info {
                margin-top: 10px;
            }

            .customer-info {
                margin-top: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 10px;
            }

            th,
            td {
                border: 1px solid #999;
                padding: 5px;
                font-size: 11px;
            }

            th {
                background: black;
                text-align: center;
            }

            .no-border td {
                border: none;
                padding: 3px;
            }

            .summary-table td {
                width: 25%;
            }

            .text-right {
                text-align: right;
            }

            .text-center {
                text-align: center;
            }

            .section-title {
                margin-top: 20px;
                font-weight: bold;
            }

            .note {
                margin-top: 15px;
                font-size: 10px;
            }
        </style>
    </head>

    <body>
        @php
            // dd($transaction);
            // die();
        @endphp
        <div class="content-body">
            <div class="container-fluid">

                <!-- Header -->
                <div class="header">
                    <div class="bank-logo">S BANK</div>
                    <div class="bank-info">
                        <strong>S Bank PLC</strong><br>
                        Head Office, Anik Tower<br>
                        220/B, Tejgaon Gulshan Link Road<br>
                        Tejgaon I/A, Dhaka 1208<br>
                        Phone: +88 02 8831013<br>
                        Fax: +88 02 9898910<br>
                        SWIFT: BRAKBDDH<br>
                        Email: inquiry@bracbank.com<br>
                        Website: www.bracbank.com
                    </div>
                </div>

                <!-- Reference Info -->
                <div class="ref-info">
                    <strong>Ref:</strong> H2-07661056-202608012016<br>
                    <strong>Issue Date:</strong> 20-Jan-2026
                </div>

                <!-- Customer Info -->
                <div class="customer-info">

                    <strong>{{ $customer->name ?? 'No customer' }}</strong><br>
                    {{ $customer->address ?? 'No address' }}

                </div>

                <!-- Statement Summary -->
                <div class="table-responsive">STATEMENT SUMMARY</div>
                <table class="table table-responsive-md">
                    <tr>
                        <td><strong>Customer ID</strong></td>
                        <td>{{ $customer->id ?? 'No id' }}</td>
                        <td><strong>Statement Period</strong></td>
                        {{-- <td>{{ $transaction->date }} to {{ $transaction->date }}</td> --}}
                    </tr>
                    <tr>
                        <td><strong>Account Number</strong></td>
                        <td>{{ $customer->account_id ?? 'No account number' }}</td>
                        <td><strong>Opening Balance</strong></td>
                        <td class="text-right">{{ $customer->balance ?? '0' }}
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Branch Name</strong></td>
                        <td>{{ $customer->account->branch->name ?? 'N/A' }}</td>
                        <td><strong>Closing Balance</strong></td>
                        {{-- <td class="text-right">{{ $transaction->balance_after }}</td> --}}
                    </tr>
                    <tr>
                        <td><strong>Account Type</strong></td>
                        <td>{{ $customer->account->account_type ?? 'account type not found' }}</td>
                        <td><strong>Total Withdrawal</strong></td>
                        <td class="text-right">8,00,390.00</td>
                    </tr>
                    <tr>
                        <td><strong>Currency</strong></td>
                        <td>{{ $customer->account->currency ?? '0' }}
                        </td>
                        <td><strong>Total Deposit</strong></td>
                        <td class="text-right">8,01,223.27</td>
                    </tr>
                </table>

                <!-- Transactions -->
                <div class="section-title">TRANSACTIONS OF 01 Jul, 2025 TO 31 Dec, 2025</div>
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Particulars</th>
                        <th>CHQ No</th>
                        <th>Balance Before</th>
                        <th>balance After</th>

                    </tr>

                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->date}}</td>
                            <td>{{$transaction->description}}</td>
                            <td>{{ $customer->account->account_number ?? '0' }}</td>
                            <td class="text-right">{{$transaction->balance_before}}</td>
                            <td class="text-right">{{$transaction->balance_after}}</td>
                        </tr>
                    @endforeach



                </table>

                <!-- Note -->
                <div class="note">
                    <strong>Note:</strong> Please advise the bank of any discrepancies within 14 days from the date of
                    receipt of this statement.
                    Otherwise, this statement will be considered correct.
                </div>

            </div>
        </div>

    </body>

    </html>
@endsection
