<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice Management | mghak</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>

        /* Top Title */
        .voucher_container{
            width: 80mm;
            min-height: 50mm;
            padding: 0 10mm;
        }
        .voucher_container h3 {
        }
        
        .top_title {
            text-align:center;
        }
        /* Station Info */
        .station_info th{
            text-align:left;
            
        }
        .station_info td {
            text-align:left;
        }

        /* Price Info */
        .price_table_info tr th:nth-child(1){
           
        }
        .s_row  {
            padding-left: 8mm;
        }
        .t_row {
            padding-left: 3mm;
        }
        .f_row {
            padding-left: 15mm;
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
                min-height: 50mm;
                padding: 0 5mm;
            }
            .station_info th{
                padding-left: 5mm;            
            }
            .price_table_info th {
                padding-left:5mm;
            }
            .f_row {
            margin-left: 20mm;
            padding-right:-15mm;
            text-align:right;
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