<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notes</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script tyoe="text/javascript">
        $(document).ready(function(){
            $.get("/notes/index_html", function(res){
                $('#notes').html(res);
            })
            // $('#form1').submit(function(){
            //     $.post("notes/create", $(this).serialize(), function(res){
            //         $('#notes').html(res);
            //     });
            //     return false;
            // })
            $(document).on('submit', 'form', function(){
                $.post(
                $(this).attr('action'),
                $(this).serialize(),
                function(res){
                    $('#notes').html(res);
                });
                return false;
            })
        })
    </script>
    <style type="text/css">
    	#notes{
    		width: 200px;
            margin-bottom: 20px;
    	}
    	#notes h3{
    		display: inline-block;
    	}
    	#notes textarea{
    		display: block;
    	}
    </style>
</head>
<body>
	<h1>Ajax Notes</h1>
	<div id="notes">
	</div>
    <form action="/notes/create" method="post">
        <input type="text" name="name" placeholder="Insert note title here...">
        <textarea name="note"></textarea>
        <input type="submit" value="Add Note">
    </form>
</body>
</html>