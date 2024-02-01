<?php
// start a session, destroy it later
session_start();
// this is gonna add coffees to the cart and ranW
function add_to_cart($coffee) {
    // auto check if user has pressed "Submit"
    if (isset($_POST[$coffee])) {
        // check if the amount of coffees entered is numeric
        if (is_numeric($_POST[$coffee])) {
            // store quantity ordered in cart session
            $_SESSION["cart"][$coffee] = $_POST[$coffee];
        } else {
            // if customer wants to remove coffee
            if ($_POST[$coffee] == "Remove") {
                unset($_SESSION["cart"][$coffee]);
            }
        }
    }
}

// check if the cart is empty and return it to be displayed below the form.
function order_summary() {
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
        // tell user the cart is empty
        $output = "The cart is empty";
    } else {
        // loop over the cart

        // display form, single quotes is cleaner due to use of double quotes, inside legend is a summary
        $output = '<form action="Coffee.php" method="POST">
            <fieldset><legend>Order Summary</legend><table>';
        foreach ($_SESSION["cart"] as $coffee_name => $quantity) {
            $output = $output . "<tr>
                <td>
                    $coffee_name
                </td>
                <td>
                    $quantity
                </td>
                <td>
                    <input type=\"submit\" name=\"$coffee_name\" value=\"Remove\">
                </td>
            </tr>";
        }

        $output = $output . "</table></fieldset>
    </form>";
        foreach ($_SESSION["cart"] as $coffee_name => $quantity) {
            $output = $output . "<tr>
        <td>
            $coffee_name total
        </td>";
        }
    }
    return $output;
}
// import the head of the page
include "inc/meta.php";
?>
<!--give this a title-->
<title>Bean & Brew Coffee Order</title>
<!--Style layout with external CSS, because this is one line there is no point importing that from PHP-->
<link href="styles/style.css" rel="stylesheet" type="text/css">
<style>
    /* inline style for the Coffee page, we only need the table styles for the content */
    #Content fieldset {
        /* aling to center */
        margin: auto;
    }

    #Content fieldset {
        /* make the width responsive */
        width: 60%;
        /* we do not need borders here */
        border: none;
    }
</style>
<?php
// import the top and sidebar of the page
include "inc/headersidebar.php";
?>
<div id="Content">
    <!--coffee order form-->
    <form action="Coffee.php" method="POST">
        <fieldset>
            <!--tell user page is for ordering a coffee-->
            <legend>
                Enter quantity of coffees to buy
            </legend>
            <!--align the table to the center-->
            <table align="center">
                <!--store coffee images-->
                <tr>
                    <!--customer can order americano, espresso and latte-->
                    <td>
                        <img src="pix/Americano.jpg" width="100%">
                    </td>
                    <td>
                        <img src="pix/Espresso.jpg" width="100%">
                    </td>
                    <td>
                        <img src="pix/Latte.jpg" width="100%">
                    </td>
                </tr>
                <!--this row stores names-->
                <tr>
                    <td>
                        Americano
                    </td>
                    <td>
                        Espresso
                    </td>
                    <td>
                        Latte
                    </td>
                </tr>
                <!--this row stores prices-->
                <tr>
                    <td>
                        £2.19
                    </td>
                    <td>
                        £1.99
                    </td>
                    <td>
                        £2.39
                    </td>
                </tr>
                <!--list of coffees with their images, and sizes customer can order-->
                <!--let customer select the quantity of the coffees-->
                <tr>
                    <td>
                        <!--americano quantity selection, input must be number-->
                        <input type="number" name="americano" min=0 max=2000>
                    </td>
                    <td>
                        <!--espresso quantity selection, input must be number-->
                        <input type="number" name="espresso" min=0 max=2000>
                    </td>
                    <td>
                        <!--latte quantity selection, input must be number-->
                        <input type="number" name="latte" min=0 max=2000>
                    </td>
                </tr>
                <!--this row stores submit button-->
                <td>
                </td>
                <td>
                    <input type="submit" value="Submit">
                </td>
                <td>
                </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
    // check if the customer has pressed "Submit" button, customer can order americano, espresso and latte, hence the list
    $coffees = ["americano", "espresso", "latte"];
    // iterate over this list
    foreach ($coffees as $coffee) {
        // add coffees to cart, checking is "Submit" is pressed is included in function, a message will be returned on function execution
        add_to_cart($coffee);
    }
    // display order summary
    echo order_summary();
    ?>
</div>
<?php
// include the footer of the page
include "inc/footer.php";
?>