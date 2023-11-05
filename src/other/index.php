<!DOCTYPE html>
<html>
<head>
    <title>Scout!</title>
    <meta charset="utf-8">
    <link rel="icon" href="/Icon.ico">
    <meta name="veiwport" content="width+device-width,initial-scale=1">
<style>

:root {
    --color: rgb(128, 0, 128);
}

.purpleButton {
    border: 0.15rem solid var(--color);
    border-radius: 0.9rem;
    background-color:rgb(40, 40, 40);
    display: block;
    margin: 0.75rem 0.75rem;
    font-size: 1rem;
    cursor: pointer;
    padding: 1rem 2rem;
    color: dimgray;
}
.purpleButton:hover {
    animation-name: fadeToPurple;
    animation-duration: 500ms;
    background-color: var(--color);
}
/* rgb(40, 40, 40) */
@keyframes fadeToPurple {
    from {background-color: rgb(40, 40, 40);}
    to {background-color: var(--color);}
}
.menuLink {
    /* text-decoration: none; */
    text-align: center !important;
    border-bottom-width: 0rem;
}
.menuLink:hover {
    animation-name: addLine;
    animation-duration: 500ms;
    border-bottom-width: initial;
}
@keyframes addLine {
    from {
        border-bottom: 0rem solid rgb(40, 40, 40);
    }
    to {border-bottom-width: initial;}
}
.centeredButton {
    text-align: center;
    margin: auto;
}
.centered {
    text-align: center;
    margin: auto;
}

</style>
</head>
<script src="Login.ts"></script>
<body style="background-color:#555;">
<!-- <input type="passaword" autocomplete="off" maxLength="10" id="pass" name="passw" ><br><br>

<button class="purpleButton centeredButton" style="margin-bottom: 0.5rem;" onclick="Login.php">Login</button> -->
<form class = "centeredButton" action="process.php" method="post">
    <label for="pass">Enter Your Password:</label>
    <input type="text" id="pass" name="pass" required>
    <button type="submit">Login</button>
</form>



<button class = "purpleButton centeredButton"style="margin-bottom: 0.5rem;" onclick="window.location.href = 'main.html';">Scout!</button>
</body>
</html>
