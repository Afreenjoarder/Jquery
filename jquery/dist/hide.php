<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Jquery Example</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script type="text/javascript"   src="js/bootstrap.min.js"></script>
    <style>
        .test{
            font-size:10px;

        }


    </style>
</head>
<body>
<div class="container">

    <button>click me</button>
    <h1>I'm heading</h1>

</div>




<script type="text/javascript">
    $(document).ready(function(){
        $('button').click(function(){
            $('h1').hide();

        });

    });

</script>
</body>
</html>