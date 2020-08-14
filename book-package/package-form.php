<?php
require_once '../config.php';
?>
    <div class="apart" style="background-color:#f7f7f7; padding:30px 20px; margin-top:30px;">
        <h6>Looking for a Holiday Package</h6>
        <form class="package" method="post" action="#">
            <input type="text" name="client_name" placeholder="Name*" required>
            <span class="combine" style="display:flex">
                <input type="text" name="digit" required value="+91" style="width:40px !important; margin-right:2px;">
                <input type="text" name="client_number" placeholder="Phone*" required>
            </span>
            <input type="email" name="client_email" placeholder="Email*" required>
            <input type="text" name="client_state" placeholder="State*" required>
            <input type="text" name="in" id="in" placeholder="Chk-In" required>
            <input type="text" name="out" id="out" placeholder="Chk-out" required>
            <input type="submit" name="get-a-call" value="Get A Call">
        </form>
    </div>
<style>
     input{
        width:100% !important;
        margin-bottom:6px;

    }
</style>
