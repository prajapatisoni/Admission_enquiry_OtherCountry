<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main From Contact form</title>
    <style>
        .greeting{
            color:red;
            font-family: cursive;
        }
        .data{
            font-size: 16px;
        }
        .data table caption{
            font-size: 14px;
            color: blue;
    
        }
        .data table {
            width: 50%;
    
        }
        .data table tr th{
            text-align:left;
    
        }
    </style>
</head>
<body>
    <div>
        <div class="greeting">
            <h1>Hello Dear you have new Contact enquiry....</h1>
        </div>
        <div class="data">
            <table>
                <tbody>
                    <tr>
                        <th>Name:</th>
                        <td>{{$name}}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{$email}}</td>
                    </tr>
                    <tr>
                        <th>Contact number:</th>
                        <td>{{$mobile}}</td>
                    </tr>
                    <tr>
                        <th>Subject:</th>
                        <td>{{$subject}}</td>
                    </tr>
                    <tr>
                        <th>Message:</th>
                        <td>{{$umessage}}</td>
                    </tr>
                </tbody>
            </table>
            <pre>
                Thank You!
                iknowledgeIndia.
                Website: <a href="www.iknowledgeindia.com">www.iknowledgeindia.com</a>
                Email: <a href="mailto:info@iknowledgeindia.com">info@iknowledgeindia.com</a>
                Contact: (+91) 9864268229
            </pre>
        </div>
    </div>
</body>
</html>