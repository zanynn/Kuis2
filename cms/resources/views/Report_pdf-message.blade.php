<!DOCTYPE html>
<html>

<head>
    <title>Message Reports</title>
</head>

<body  background="https://cutewallpaper.org/21/blur-wallpapers/Minimalistic-Blur-Background-1920x1080-Gray-.jpg" 
style="background-size: cover;">
    <style type="text/css">
        table tr td,
        table tr th {
            padding: 10px;
            font-size: 9pt;
            background: #00c6ff;
            color: white;
            background-color:rgba(141, 141, 141, 0.151);
            backdrop-filter: blur(20px);
            border-radius: 20%;

        }

    </style>
    <a><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2c90bb65-3c93-4f38-8f43-0469c153c1e0/de8nmex-c77f56da-18e8-4031-9966-b0466f07cd51.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmM5MGJiNjUtM2M5My00ZjM4LThmNDMtMDQ2OWMxNTNjMWUwXC9kZThubWV4LWM3N2Y1NmRhLTE4ZTgtNDAzMS05OTY2LWIwNDY2ZjA3Y2Q1MS5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.ZXKOMQLIhO3zMBYhhHcUTmEhSvnVXlyT-4Ges7ysS-c" width="100px" style="margin: 20px 50px;"></a>
    <center>
        <h3 style="color: white;">Message Reports<hr style="margin :20px;"></h3>
        <h5>
    </center>

    <table class='table table-bordered' border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Messages</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp @foreach($message as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->created_at}}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->phone}}</td>
                <td>{{$a->message}}</td>
            </tr> @endforeach
        </tbody>
    </table>
    <center>
    <hr style="color :white;"><h3 style="color: white;">End of Report</h3>
    </center>
</body>
</html>