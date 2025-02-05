<!DOCTYPE html>
<html>
<head>
    <style>
        .textStyle{
            font-size: 15px;
            font-weight: 700;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Quote Request Details</h2>

    <p><span class="textStyle">Name:</span> {{ $formData['name'] }}</p>
    <p><span class="textStyle">Phone Number:</span> {{ $formData['phone_number'] }}</p>
    <p><span class="textStyle">Email:</span> {{ $formData['email'] }}</p>
    <p><span class="textStyle">Service Type:</span> {{ $formData['service_type'] }}</p>
    <p><span class="textStyle">Message:</span> {{ $formData['messages'] }}</p>

</body>
</html>
