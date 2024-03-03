<?php $this->view('includes/header') ?>

<div class="container-fluid">
    <div class="p-3 shadow rounded mx-auto" style="margin-top:50px;width: 100%;max-width: 340px">
        <h2>My School</h2>
        <img src="<?=ROOT?>/logo" alt="">
        <h3>Login</h3>
        <input class="form-control" type="email" name="email" placeholder="Email" autofocus>
        <br>
        <input class="form-control" type="password" name="password" placeholder="Password">
        <br>
        <button class="btn btn-primary">Login</button>
    </div>
</div>

<?php $this->view('includes/footer') ?>