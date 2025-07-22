<!DOCTYPE html>
<html>
<head>
    <title>Parcel Details</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Parcel Details - #{{ $parcel->tracking_number }}</h2>

    <table>
        <tr><th>Booking ID</th><td>{{ $parcel->booking_id }}</td></tr>
        <tr><th>Receipt Number</th><td>{{ $parcel->receipt_number }}</td></tr>
        <tr><th>Sender Name</th><td>{{ $parcel->sender_name }}</td></tr>
        <tr><th>Receiver Name</th><td>{{ $parcel->receiver_name }}</td></tr>
        <tr><th>Origin</th><td>{{ $parcel->origin }}</td></tr>
        <tr><th>Destination</th><td>{{ $parcel->destination }}</td></tr>
        <tr><th>Weight</th><td>{{ $parcel->weight }}</td></tr>
        <tr><th>Total Amount</th><td>{{ $parcel->total_amount }}</td></tr>
        <tr><th>Status</th><td>{{ $parcel->status }}</td></tr>
        <tr><th>Booking Officer</th><td>{{ $parcel->bookingOfficer->name ?? 'N/A' }}</td></tr>
        <tr><th>Booking Time</th><td>{{ $parcel->created_at }}</td></tr>
    </table>
</body>
</html>
