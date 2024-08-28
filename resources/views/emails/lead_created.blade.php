<!DOCTYPE html>
<html>
<head>
    <title>New Lead Created</title>
</head>
<body>
    <h1>New Lead Created</h1>
    <p>A new lead has been created:</p>
    <ul>
        <li><strong>Name:</strong> {{ $lead->name }}</li>
        <li><strong>Email:</strong> {{ $lead->email }}</li>
        <li><strong>Phone:</strong> {{ $lead->phone }}</li>
        <li><strong>Company:</strong> {{ $lead->company }}</li>
    </ul>
</body>
</html>
