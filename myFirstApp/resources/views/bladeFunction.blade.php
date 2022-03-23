<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <!-- "??" is to set default vlaue to "Guest" -->
        Welcome, {{$name ?? 'Guest'}} <br>
        
    </h1>
    <!-- prints time -->
    Time: {{time()}} <br>
    
    <!-- prints date -->
    Date: {{date('d-m-y')}}<br>
    
    @if($name=="")
        {{"Name is empty."}}
    @elseif($name=="Aditya")
        {{"Name is correct."}}
    @else
        {{"Name i s incorrect."}}
    @endif

    <!-- like this we use all loops and conditionals  -->
</body>
</html?