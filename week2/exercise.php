<html>
    <head> <title>Receving Input </title></head>
<body> 
    <h1> Thank You: Got Your Input</h1>
    <?php
    $list_hobby = array(
        1 => "Swimming",
        2 => "Walk",
        3 => "VolleyBall",
        4 => "Other",
        0 => "Soccer",
    );
    $name = $_POST["email"];
    $class = $_POST["class"];
    $university = $_POST["university"];
    print "Hello, $name <br>";
    print ("You are studying at  $class, $university ");
    print("<br> Your hobby is: ");
    if (isset($_POST['hobby'])){
    foreach($_POST['hobby'] as $product){
       print(" $list_hobby[$product] <br>");
    }
}
    ?>
</body>
    </html>