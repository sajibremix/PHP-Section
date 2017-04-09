<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML page editor</title>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
    function html_to_json(elem){
        var json_data;
        json_data = html_to_json_generator(elem);
        console.log(json_data);
    }
    
    function html_to_json_generator(ele){
        var json_data_arr = {};
        json_data_arr["tag"] = ele[0].tagName.toLowerCase();
        if ($(ele)[0].outerHTML.endsWith('</'+$(ele)[0].tagName.toLowerCase()+'>')){json_data_arr["endtag"] = 1;}
        else{json_data_arr["endtag"] = 0;}
        var attr = ele[0].attributes;
        for(var k=0; k<Object.keys(attr).length; k++){
            var tmp = {};
            tmp[attr[k].name] = attr[k].nodeValue;
            json_data_arr["attributes"] = tmp;
        }
        if($(ele).children().length == 0 ){
            json_data_arr["content"] = $(ele[0]).val();
        }else{
            json_data_arr["nodes"] = new Array();
            var ele_childs = $(ele).children();
            for(var i=0; i<ele_childs.length;i++){
                json_data_arr["nodes"][i] = html_to_json_generator($(ele_childs[i]));
            }
        }
        return json_data_arr;
    }
</script>
</head>
<body>
    <div id="single_div">
        <h1 id="header">header</h1>
        <div id="second_div" class="bootstrap">
            <p id="p" style="color: red;">hello p</p>
            <input type="text">
            <div>
                <textarea>hello textarea</textarea>
            </div>
        </div>
    </div>
    
    <script>
        html_to_json($("html"));
    </script>
</body>
</html>