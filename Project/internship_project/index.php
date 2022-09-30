<?php
require_once("common_files/header.php");
?>
<header>
    <section class="headerContainer">
        <section class="headerWrapper">
            <h1>Events Management</h1>
            <img src="assets/img/logo.svg" alt="Qualesce Logo" width="150px">
        </section>
        </header>     
            <section class="cardsContainer">    
            <div class="cardsWrapper">
                <h2>STATISTICS</h2>
                <article class="cardOne">
                <h3>Total New Booking</h3>
                </article>
                <article class="cardTwo">
                      <h3>Total Approved</h3>
                </article>
                <br>
                <article class="cardThree">
                      <h3>Total Cancelled</h3>
                </article>
                <article class="cardFour">
                    <h3>Total Services</h3>
                </article>
                <article class="piechart">
                   <h3>Analysis</h3>
                   <div class="pie"></div>
                </article>
            </div>   
        </div>
    </section> 
   
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
   
    

<?php
require_once("common_files/footer.php");
?>