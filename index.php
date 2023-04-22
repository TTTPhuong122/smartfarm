<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Flask Example</title>
</head>
<body>
    <h1>Flask Example</h1>
    <form method="POST" action="/process_data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <input type="submit" value="Submit">
    </form>
    <div id="result"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('form').submit(function(event) {
            event.preventDefault();
            var name = $('#name').val();
            $.ajax({
                url: '/process_data',
                type: 'POST',
                data: {name: name},
                success: function(response) {
                    $("#result").text(response);
                }
            });
        });
        
    </script>
</body>
</html>
