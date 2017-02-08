<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
     var email1 = "";
    $("button").click(function(){
    var email= $("#email").val();
    for( var i =0 ; i<3;i++)
    {
     email1 += email[i];
     
    }
    var email2 = email.substring(0, email.indexOf('@'));
    for( var j =3 ; j<email2.length;j++)
    { 
     email1 += "*"; 
    }
    for( var k =email2.length; k<email.length;k++)
    {
     
     email1 += email[k];
     
    }
     $("p").html(email1);
    });
});
</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<input type="email" name="email" id="email">
<button>Click me to hide paragraphs</button>

</body>
</html>