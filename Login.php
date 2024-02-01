<?php
// import head
include "inc/meta.php";
?>
<!--give this a title-->
<title>Bean & Brew Login</title>
<!--Style layout with external CSS, because this is one line there is no point importing that from PHP-->
<link href="styles/style.css" rel="stylesheet" type="text/css">
<style>
    /* style the login form */

    h1,
    form {
        padding: 1% 20%;
    }

    label {
        font-size: 22px;
        ;
    }

    input {
        background-color: white;
        border: 2px solid black
    }
</style>
<?php
// import the header and sidebar
include "inc/headersidebar.php";
?>

<!--login form, customers must login before using the website, content id is necessary to give the content the font needed-->
<div id="Content">
    <!--tell customers this is the login page, h1 makes the "Login" name look nice-->
    <h1>
        Login
    </h1>
    <form action="Login.php" action="POST">
        <!--customers must enter their first name and password-->

        <!--first name input-->
        <label for="firstname"><b>First name:</b></label>
        <input type="text" name="firstname">
        <br>
        <!--password input-->
        <label for="firstname"><b>Password:</b></label>
        <input type="password" name="password">
        <!--submit button-->
        <br>
        <button type="submit">Log in</button>
    </form>
</div>
<?php
// import footer
include "inc/footer.php";
