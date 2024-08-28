<!DOCTYPE html>
<html>
<head>
    <title>New proposal Created</title>
</head>
<body>
    <h1>New proposal Created</h1>
    <p>A new proposal has been created:</p>
    <ul>
        <li><strong>Name:</strong> {{ $proposal->name }}</li>
        <li><strong>Email:</strong> {{ $proposal->email }}</li>
        <li><strong>Phone:</strong> {{ $proposal->phone }}</li>
        <li><strong>Company:</strong> {{ $proposal->company }}</li>
    </ul>
</body>
</html>
