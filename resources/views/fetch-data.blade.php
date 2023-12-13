<!-- resources/views/fetch-data.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
</head>
<body>
    <h1>Fetched Data</h1>

    @if(isset($data))
        <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>
    @else
        <p>No data available.</p>
    @endif
</body>
</html>