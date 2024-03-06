<?php $this->view('includes/header') ?>
<?php $this->view('includes/nav') ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width:1000px">
    <?php $this->view('includes/crumbs') ?>
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <img src="<?= ASSETS ?>/user_female.jpg" alt="" class="border border-primary d-block max-auto rounded-circle" style="width:150px;">
            <h3 class="text-center">Mary Phiri</h3>
        </div>
        <div class="col-sm-8 col-md-9 bg-light p-2">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>First Name:</th>
                    <td>Mary Phiri</td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td>Phiri</td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td>Female</td>
                </tr>
                <tr>
                    <th>Date Created:</th>
                    <td>2024-08-02</td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>
        </ul>
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i>&nbsp</span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                </div>
            </form>
        </nav>
    </div>
</div>

<?php $this->view('includes/footer') ?>