<?php include("header.php") ?>
<style>
    .sidebar {
        width: 15%;
        height: 100%;
        flex-direction: column;
        position: fixed;
    }

    .links {
        width: 100%;
        list-style: none;
        padding: 0%;
        color: white !important;
    }

    .links>li {
        padding: 0 15px;
        width: 100%;
        line-height: 50px;
    }

    a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }

    i {
        padding-right: 5px;
        font-size: 15px;
    }

    .userprofile {
        width: 100%;
        height: 20vh;
        margin: 20px;
        margin-left: 60px;
        position: relative;
    }

    .userprofile>img {
        height: 60px;
        width: 60px;
        border-radius: 50%;
    }

    .active {
        background: #000066;
    }

    .logout {
        margin-top: 150px;
        padding: 0 20px;
    }

    .logout>a {
        color: #fff;
    }

    .dash {
        background: #ffffff;
        width: 85%;
        margin-left: 15%;
        height: 100%;
    }

    .search {
        width: 93%;
        margin: 0 auto;
        /* border: 1px groove; */
        height: 4em;
    }

    .popularplaces {
        width: 73%;
        height: 72vh;
        margin-left: 41px;

        /* border: 1px groove; */
    }

    .popular {
        width: 100%;
        display: flex;
        list-style: none;
    }

    .popular li:nth-of-type(1) {
        width: 90%;
        font-weight: bold;
        font-size: 17px;
    }

    .popular li:nth-of-type(2) {
        font-size: 17px;
        font-weight: bold;
    }

    .places {
        display: flex;
        flex-wrap: wrap;

    }

    .card-hotel {
        height: 18em;
        margin-left: 30px;
        width: 27%;
        background: lightgray;
        border-radius: 7px;
        position: relative;
        color: black;
    }

    .card-hotel img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .hotel h5 {
        font-size: 15px;
    }

    .hotel {
        position: absolute;
        width: 80%;
        height: 70px;
        font-size: 15px;
        background: #fff;
        bottom: 13px;
        left: 18px;
        border-radius: 5px;
        padding: 10px;
    }

    .favorite {
        font-size: 15px;
        margin-left: 30px;
        padding-top: 15px;
    }

    .fav-hotel {}

    .stars {
        color: #ffcc00;
        font-weight: bold;
    }

    a {
        color: #fff;
    }

    .userprofile h3 {
        position: absolute;
        text-align: left;
        left: -20px;
        font-size: 20px;
    }

    .container {
        margin-left: 120px;
        /* background-color: red; */
        margin-left: 15%;
    }
</style>
<div class='main'>
    <div class="sidebar text-white bg-primary d-flex">
        <div class="userprofile">
            <img src="<?= base_url(); ?>images/booker.jpg" alt="profile">
            <h3><?= $this->session->user["username"]; ?></h3>
        </div>
        <ul class="links">
            <li><a href="<?=site_url("user/dashboard")?>"><i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard</a></li>
            <?php $username = $this->session->user["username"]; ?>
            <?php if ($username == "Mmanzicd") { ?>
                <li><a href="<?= site_url("user/orders/admin"); ?>"><i class="fa fa-address-card" aria-hidden="true"></i>
                        Orders</a></li>

                <li class="active"><a href="<?= site_url("Admin"); ?>"><i class="fas fa-user-friends"></i>
                        allUsers</a></li>
            <?php } ?>
            <li><a href=""><i class="fa fa-bell" aria-hidden="true"></i>
                    Notifications</a></li>
            <li><a href=""><i class="fa fa-cog" aria-hidden="true"></i>
                    Settings</a></li>
        </ul>
        <div class="logout">
            <a href="<?= site_url("Dashboard/logout") ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Logout</a>
        </div>
    </div>
    <div class="container box">
        <h3> All users</h3>
        <div id="pagination_link"></div>
        <div class="table-responsive" id="user_table"></div>
    </div>
</div>
<script>
    $(document).ready(function() {
        function load_user_data(page) {
            $.ajax({
                url: "<?php echo base_url(); ?>Admin/pagination/" + page,
                method: "GET",
                dataType: "json",
                success: function(data) {
                    $('#user_table').html(data.user_table);
                    $('#pagination_link').html(data.pagination_link);
                }
            });
        }

        load_user_data(1);

        $(document).on("click", ".pagination li a", function(event) {
            event.preventDefault();
            var page = $(this).data("ci-pagination-page");
            load_user_data(page);
        });
    });
</script>
<?php include('footer.php') ?>