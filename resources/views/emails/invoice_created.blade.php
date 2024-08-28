<!DOCTYPE html>
<html>
<head>
    <title>New invoice Created</title>
</head>
<body>
    <h1>New invoice Created</h1>
    <p>A new invoice has been created:</p>
    <ul>
        <li><strong>Name:</strong> {{ $invoice->name }}</li>
        <li><strong>Email:</strong> {{ $invoice->email }}</li>
        <li><strong>Phone:</strong> {{ $invoice->phone }}</li>
        <li><strong>Company:</strong> {{ $invoice->company }}</li>
    </ul>
</body>
</html>
