
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
<div class="container">
    <div class="row">


<form action="updateavis.php" method="post">

    <div>
        <h3>donner votre avis</h3>
    </div>

    <div>
         <label>Name</label>
        <input type="text" name="name">
    </div>

         <div class="rateyo" id= "rate"
         data-rateyo-rating="4"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>

    <span class='result'>0</span>
    <input type="hidden" name="rate">

    </div>

    <div><input type="submit" name="add"> </div>

</form>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>


    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rate :'+ rating);
            $(this).parent().find('input[name=rate]').val(rating); //add rating value to input field
        });
    });

</script>
</body>

</html>
