<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h1>New Message from your Website</h1>
    <p><strong>Name:</strong> {{ $details['name'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Phone:</strong> {{ $details['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
    <hr>
    <h2>Message:</h2>
    <p>{{ $details['message'] }}</p>
</body>
</html>