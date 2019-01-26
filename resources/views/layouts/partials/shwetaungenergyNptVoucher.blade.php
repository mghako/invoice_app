<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Invoice Management | mghak</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
         /* Top Title */
        .voucher_container{
            width: 80mm;
            min-height: 50mm;
            padding: 0 3mm;
        }
        .voucher_container h3 {
        }
        
        .top_title {
            text-align:center;
            line-height: 1;
        }

        .station_info td {
            text-align:center;
        }
        .s_row  {
            padding-left: 8mm;
        }
        .price_table_info tr td {
            text-align:center;
            padding-left: 3mm;
        }
        .price_table_info {
            margin-bottom: 0;
        }
        .no_border {
            border: none;
        }
        .hav_border {
            border:1px dotted #000;
        }
        .station_name {
            font-size: 18px;
            padding-left: 0;
            line-height: 0;
        }
        .address_one {
            padding-left: -10mm;
            font-size: 14.5px;
        }
        .address_two {
            font-size: 14.5px;
            padding-left: 10mm;
        }
        .phone_num_txt {
            font-size: 13.5px;
        }
        .petrol_type {
            font-size: 28px;
        }
        .petrol_station_icon {
            display:inline-block;
        }
        .voucher_mid_txt {
            display: inline-block;
            padding-left: 5mm;
            padding-right: 8mm;
        }
        #border_bot {
            border-bottom: 1px solid #000;
            text-underline-position: under
        }
        .customer_info {
            font-size: 16px;
            margin-left: 3mm;
        }
        td#customer_date_info {
            padding-left: 5mm;
        }
        .customer_info tr td {
            padding:0;
        }
        .voucher_info {
            font-size: 13px;
            margin-bottom:0;
        }
         .price_table_info tr .low-padding-top {
                padding-top:0;
            }
        @page {
            size: 80mm 50mm;
        }
         @media print {
            /* html, body {
                width: 210mm;
                height: 297mm;        
            } */

            .voucher_container{
                width: 100mm;
                max-height: 110mm;
                 /*   padding: 0 15mm;*/
                 font-size: 24px;
                 color: blue;
                 margin-top: 35mm;
            }
           
            .station_name {
                font-size: 19px;
                margin-bottom: 0;
            }
            .price_table_info {
                padding-left: 5mm;
            }
            
            .price_table_info td {
                font-size: 15.5px;
                padding-bottom: 0;

            }
            .price_table_info tr .low-padding-top {
                padding-top:0;
            }
            .voucher_info tr td {
                /*padding: 0;*/
            }
            .amount_in_kyats {
                font-size: 16px;
            }
            @page
            {   min-height: 50mm;
                size: 80mm 50mm;
                size: portrait;
                margin: 0;
                overflow: hidden;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
 
    </style>
</head>
<body>
    <div class="invoice">
     @yield('content');
    </div>



    <script src="/js/app.js"></script>
</body>
</html>