<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$kd_id = $_POST['id'];

if($kd_id == 0) {
    
}else{
    
}
?>

<form method="post" class="form-horizontal" role="form" novalidate="novalidate" id="vForm">
    <div class="form-group">
        <label class="col-sm-3 control-label" for="username"> Username</label>
        <div class="col-sm-9">
            <input type="text" id="username" for="username" class="form-control" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="password"> Password</label>
        <div class="col-sm-9">
            <input type="password" id="password" for="password" class="form-control" placeholder="Password">
        </div>
    </div>    
    <div class="form-group">
        <label class="col-sm-3 control-label" for="status"> Status</label>
        <div class="col-sm-9">
            <select name="status" id="status" class="form-control">
                
            </select>
        </div>
    </div>    
</form>