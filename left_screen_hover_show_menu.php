<!DOCTYPE html>
<html lang="en">
<head>
  <title>Left screen hover show menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="http://localhost/pulse-funnel/files/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
        text-align: center;
        width: 0;
        background-color: red;
    }
    .side_floating_menu_panel.active{
        width: 85px;
        padding: 2px;
    }
    .side_floating_menu_panel .single_menu{
        padding-top: 10px;
        padding-bottom: 10px;
        background-color: green;
        font-weight: 600;
        color: white;
        border: 1px solid white;
        display: block;
        text-decoration: none;
        cursor: pointer;
    }
  </style>

  <div class="side_floating_menu_panel active">
    <a class="single_menu">
      <i class="fa fa-cog"></i><br>
      Settings
    </a>
    <a class="single_menu">
      <i class="fa fa-cog"></i><br>
      Settings
    </a>
    <a class="single_menu">
      <i class="fa fa-cog"></i><br>
      Settings
    </a>
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
    $(document).mouseup(function(e) 
    {
        var container = $(".side_floating_menu_panel");
        if (!container.is(e.target) && container.has(e.target).length === 0) 
        {
            container.removeClass('active');
        }
    });
  </script>
</body>
</html>
