<!DOCTYPE html>
<html>
<head>
    <style>
        .textStyle{
            font-size: 16px;
            font-weight: 700;
            color: black;
        }
    </style>
</head>
<body>
    <h2>Schedule a Consultation Request Details</h2>

    <p><span class="textStyle">Name:</span> {{ $ScheduleFormData['name'] }}</p>
    <p><span class="textStyle">Phone Number:</span> {{ $ScheduleFormData['phone_number'] }}</p>
    <p><span class="textStyle">Email:</span> {{ $ScheduleFormData['email'] }}</p>
    <p><span class="textStyle">Service Type:</span> {{ $ScheduleFormData['date'] }}</p>
    <p><span class="textStyle">Message:</span> {{ $ScheduleFormData['messages'] }}</p>

</body>
</html>
