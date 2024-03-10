<?php $this->view('includes/header') ?>

<div class="container-fluid">
    <form method="post">
        <div class="p-3 shadow rounded mx-auto" style="margin-top:50px;width: 100%;max-width: 340px">
            <h2 class="text-center">My School</h2>
            <img src="<?= ROOT ?>/assets/logo.png" class="d-block mx-auto rounded-circle" style="width:100px;">
            <h3>Add User</h3>
            <input class="my-2 form-control" type="text" name="firstname" placeholder="First Name">
            <input class="my-2 form-control" type="text" name="lastname" placeholder="Last Name">
            <input class="my-2 form-control" type="email" name="email" placeholder="Email">

            <select class="my-2 form-control" name="gender">
                <option value="">-- Select a Gender--</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <select class="my-2 form-control" name="rank">
                <option value="">-- Select a Rank--</option>
                <option value="student">Student</option>
                <option value="reception">Reception</option>
                <option value="lecturer">Lecturer</option>
                <option value="admin">Admin</option>
                <option value="super">Super Admin</option>
            </select>
            <input class="my-2 form-control" type="text" name="password" placeholder="Password">
            <input class="my-2 form-control" type="text" name="password2" placeholder="Retype Password">
            <button class="btn btn-primary float-end">Add User</button>
            <button type="button" class="btn btn-danger text-white">Cancel</button>
        </div>
    </form>
</div>

<?php $this->view('includes/footer') ?>