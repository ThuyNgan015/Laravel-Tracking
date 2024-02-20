<h1 style="text-align: center;">Học lập trình Laravel tại PNV</h1>
<?php 
if (env('Y-m-d H:i:s')=='production'){
    //Call api live
    echo 'Call api live';
}else{
    //Call api sandbox
    echo 'Call api sandbox';
}