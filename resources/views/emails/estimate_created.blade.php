<!DOCTYPE html>
<html>
<head>
    <title>New estimate Created</title>
</head>
<body>
    <h1>New estimate Created</h1>
    <p>A new estimate has been created:</p>
    <ul>
        <li><strong>Name:</strong> {{ $estimate->name }}</li>
        <li><strong>Email:</strong> {{ $estimate->email }}</li>
        <li><strong>Phone:</strong> {{ $estimate->phone }}</li>
        <li><strong>Company:</strong> {{ $estimate->company }}</li>
    </ul>
</body>
</html>
