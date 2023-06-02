<?php
include_once "header.php";
?>
<br>

<h1 class="cali">¿Ready to check out?</h1>

<section>
<div class="container-fluid">
<h2 class="cali">Payment Information</h2>
    <div class="row">      
        <form action="POST">
        <div class="row">  
            <div class="col">
                <div class="col">
                    <p class="cali">Card Holder: </p>
                    <input type="text" name="" id="">
                </div>
                <div class="col">
                    <p class="cali">Card Number</p>
                    <input type="number" name="" id="">
                </div>
                <div class="col">
                    <p class="cali">Expire Date</p>
                    <input type="text" name="" id="">
                </div>
            </div>
            <br>
            <div class="col">
                <div>
                    <p class="cali">Surname: </p>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <p class="cali">CVV</p>
                    <input type="number" name="" id="">
                </div>
                <div>
                    <p class="cali">Card Type</p>
                    <input type="text" name="" id="">
                </div>
            </div> 
             
         </div>            
    </div>
<h2 class="cali">Shipping Information</h2>
        <div class="row">
            <div class="row">
            <div class="col">
                <div class="col">
                    <p class="cali">Country: </p>
                    <input type="text" name="" id="">
                </div>
                <div class="col">
                    <p class="cali">Street: </p>
                    <input type="number" name="" id="">
                </div>
                <div class="col">
                    <p class="cali">Extra Info.:</p>
                    <input type="text" name="" id="">
                </div>
            </div>
            <br>
            <div class="col">
                <div>
                    <p class="cali">State/Province:</p>
                    <input type="text" name="" id="">
                </div>
                <div>
                    <p class="cali">Street Number</p>
                    <input type="number" name="" id="">
                </div>
                <div>
                    <p class="cali">Courier</p>
                    <input type="text" name="" id="">
                </div>
            </div>

            </div>
            
        </div> 
        <br>
            <div class="col send">
                <input type="submit" id="sub" >
            </div> 
    </form>
</div>

</section>
<br>
<?php
include_once "footer.php";
?>  