<!DOCTYPE html>
<html lang="en">
<head>
  <title>Left screen hover show menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
          
</div>


  <style type="text/css">
    .side_floating_menu_panel{
        position: absolute;
        top: 0;
        bottom: 0;
        overflow: hidden;
        width: 0;
        background-color: red;
    }
    .side_floating_menu_panel.active{
        width: 85px;
    }
  </style>

  <div class="side_floating_menu_panel active">
    hellow
  </div>

  <script type="text/javascript">
    $(document).on("mouseover", function(e){
        if(e.pageX <= 100)
        {
            $(".side_floating_menu_panel").addClass('active');
        }
        else
        {
            if(!$(e.target).is(".menu"))
            {
                $(".side_floating_menu_panel").removeClass('active');
            }
        }
    });
  </script>
</body>
</html>
