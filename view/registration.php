<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/style.css">
    <link rel="stylesheet" href="/resources/chosen/chosen.css">

    <title>Protest14</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Register</h1>
                <div id="qqq"></div>
                <form class="registration-form"  method="post">
                    <input class="name" type="text" name="name" value="name">
                    <input class="emaill" type="emaill" name="email" value="email@email">
                    <div class="chosen-container">
                    <select class="chosen-select" name="region" id="region" >
                        <?php foreach ($regions as $region ): ?>
                        <option value="<?php echo $region['reg_id']?>"><?php echo $region['ter_name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <select class="chosen-select" name="city"  id="city"></select>
                    <select class="chosen-select" name="district"  id="district"></select>
                    <button class="button" name="submit">Registration</button>
                    </div>
                </form>
                <div class="test"></div>
                <div>
                    <div class="overlay js-overlay-user-info">
                        <div class="popup js-user-info">
                            <div class="user-info"></div>
                            <div class="close-popup js-close-user-info"></div>
                        </div>
                    </div>
                    <div class="scroll-up" id="scroll-up">Наверх</div>
                </div>
            </div>
        </div>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="/resources/chosen/chosen.jquery.js"></script>
<script src="/resources/js/ValidateForm.js"></script>
<script src="/resources/js/makeForm.js"></script>
</body>
</html>

