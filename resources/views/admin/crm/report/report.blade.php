<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketer Reports</title>
    <style>


        table{
            border-collapse: collapse;
        }
        .report-head{
            text-align: center;

        }
        .report-head h4{
            padding: 0;
            margin:0;
        }


        .user-info {
            margin-bottom: 15px;
        }
        .user-info p{
            padding: 0;
            margin:0;
        }
    </style>
</head>
<body>
    <div class="report-head">
        <h4>Marketing Reports</h4>
        <p>Date : {{ Date('d-m-Y')}}</p>
    </div>

    <table style="width:100%" border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Job Title</th>
                <th>Mobile</th>
                <th>Desired Plot</th>
                <th>Visit Status</th>
                <th>Visit Date</th>
                <th>Contact Media</th>
                <th>Remark</th>
                <th>Marketer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->customer ? $item->customer->name : '' }}</td>
                    <td>{{ $item->customer ? $item->customer->designation : '' }}</td>
                    <td>{{ $item->customer ? $item->customer->phone : '' }}</td>
                    <td>{{ $item->plot ? $item->plot->name : '' }}</td>
                    <td>{{ $item->status ? $item->status->name : '' }}</td>
                    <td>{{ Carbon\Carbon::parse($item->visit_date)->format('d M Y') }}</td>
                    <td>{{ $item->whatsapp }}</td>
                    <td>{{ $item->remarks }}</td>
                    <td>{{ $item->user ? $item->user->name : '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
