<?php include "head.php"
?>


<body>
    <?php include "nav.php" ?>
    <section id="features">
        <div class="container mt-5">
            <div class="row feature-item ">
                <div class="col-lg-6 wow fadeInUp" style="padding:10% 10%  0% 0%;">
                    <img src="img/1.webp" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4 class="text-uppercase">Give A Comment For Me</h4>
                    <form class="bg-light" style="padding: 5%;" action="like_me_action.php" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email :</label>
                            <input class="form-control" name="name" type="email" placeholder=""> </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Your Comment <span style="color:red;">(*Optional)</span></label>
                            <textarea class="form-control" name="Comment" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-info">Like Me</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
</body>

</html>