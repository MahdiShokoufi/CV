<?php
if (isset($_POST["name"])){
    $dir = "files/";
    $tmp = opendir($dir);
    $cnt = -1;
    while ($file = readdir($tmp))
        $cnt ++;
    $cnt = (string)$cnt;
    $file = fopen($dir . $cnt . ".txt", "w");
    $txt = "Name: " . $_POST["name"] . "\n" . "Email: " . $_POST["email"] . "\n\n" . $_POST["txt"];
    fwrite($file, $txt);
    fclose($file);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>my CV</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        li.c1 {
            display: inline;
            margin-left: 20px;
        }
        #a1 {
            padding-right: 100px;
        }
    </style>
</head>
<body>
    <ul>
        <li class="c1"><a href="about.html">About me</a></li>
        <li class="c1"><a href="skills.html">Skills</a></li>
        <li class="c1"><a href="achievements.html">Achievements</a></li>
        <li class="c1"><a href="contact.php">Contact me</a></li>
    </ul>
    <hr>
    <form action="contact.php" method="POST">
        <legend>Contact me:</legend>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="txt">Message:</label>
        <textarea type="textarea" name="txt" id="txt"></textarea>
        <br><br>
        <button type="button" onclick="func()">submit</button>
        <br><br>
        <p id="p1" style="display: none">Are you sure about your information and message?</p>
        <input id="s1" style="display: none" type="submit" onclick="alrt()" value="Yes">
    </form>
    <script>
        function func(){
            document.getElementById("p1").style.display = "block";
            document.getElementById("s1").style.display = "block";
        }
        function alrt(){
            alert("Your message recieved successfully")
        }
    </script>
    <hr>
    <footer>
        <h5 class="text-center">All rights reserved by Mahdi Shokoufi</h5>
        <div class="text-center">
            <a id="a1" href="https://github.com/MahdiShokoufi"><img src="github.png" width="50px" height="50px"></a>
            <a href="https://quera.org/profile/wdjxt3"><img src="quera.svg" width="50px" height="50px"></a>
        </div>
    </footer>
</body>
</html>