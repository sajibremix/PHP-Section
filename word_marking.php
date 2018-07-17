<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <style type="text/css">
        span.underline {
            text-decoration: underline;
            color: blue;
        }

        span {
            cursor: pointer;
        }
    </style>
    <script>
        $(function() {
            var contents = $('#term1').text().split(' '),
            modText = '';

            for (var i = 0; i < contents.length; i++) {
                modText += '<span>' + contents[i] + '</span> ';
            }

            $('#term1').html(modText);

            $('#term1').click(function(e) {
                $(e.target).toggleClass('underline');
            });

            $('#button1').click(function() {
                var selected = [];
                $('span.underline').each(function() {
                    selected.push($(this).text());
                });
                alert('Selected: ' + selected.join(','));
            });
        });
    </script>

</head>
<body>

    <span id="term1">Lorem ipsum dolor sit amet</span>
    <button type="button" id="button1">Submit</button>

</body>
</html>