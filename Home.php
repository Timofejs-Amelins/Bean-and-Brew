<?php
// import file metadata
include "inc/meta.php";
?>
<!--give this a title-->
<title>Bean & Brew Home</title>
<!--Style layout with external CSS, because this is one line there is no point importing that from PHP-->
<link href="styles/style.css" rel="stylesheet" type="text/css">
<style>
    /* the styles inside are only for the content */
    #ContentTable,
    #OpeningDaysList {
        width: 60%;
        padding: auto;
        margin: auto;
    }

    #ContentTable td,
    #OpeningDaysList td {
        /* add padding to all table data */
        padding: 5px;
    }

    #OpeningDaysList {
        /* remove bullet points from opening days list */
        list-style-type: none;
    }
</style>
<?php
include "inc/headersidebar.php";
?>
<!--content for the homepage, includes top selling baked good and coffee with image and days the coffee shop is open-->
<div id="Content">
    <table id="ContentTable">
        <tr>
            <!--images of coffee-->
            <td>
                <!--to the left, no alt text because of description below-->
                <img src="pix/Biscuit.jpg" width="50%" />
            </td>
            <td>
                <!--to the right, no alt text because of description below-->
                <img src="pix/Americano.jpg" width="50%" />
            </td>
        </tr>
        <tr>
            <!--tell user these are the top selling items-->
            <td>One of our top seller baked goods!</td>
            <td>One of our top seller coffees!</td>
        </tr>
    </table>
    <!--the days the restaurant is open, the days and times are in the same place because this is quicker-->
    <table id="OpeningDaysList">
        <tr>
            <td>
                <h1>
                    OPENING DAYS
                </h1>
            </td>
        </tr>
        <tr>
            <td>
                Mon: 24h
            </td>
        </tr>
        <tr>
            <td>
                Tues: 24h
            </td>
        </tr>
        <tr>
            <td>
                Wed: 24h
            </td>
        </tr>
        <tr>
            <td>
                Thurs: 24h
            </td>
        </tr>
        <tr>
            <td>
                Fri: 24h
            </td>
        </tr>
        <td>
            Sat: 24h
        </td>
        </tr>
        <td>
            Sun: 24h
        </td>
        </tr>
    </table>
</div>
<?php include "inc/footer.php";
