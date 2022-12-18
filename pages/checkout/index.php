<?php
  include('express-stk.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na mpesa</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
    ></script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap");

      body {
        background-color: #eaedf4;
        font-family: "Rubik", sans-serif;
      }

      .card {
        width: 310px;
        border: none;
        border-radius: 15px;
      }

      .justify-content-around div {
        border: none;
        border-radius: 20px;
        background: #f3f4f6;
        padding: 5px 20px 5px;
        color: #8d9297;
      }

      .justify-content-around span {
        font-size: 12px;
      }

      .justify-content-around div:hover {
        background: #545ebd;
        color: #fff;
        cursor: pointer;
      }

      .justify-content-around div:nth-child(1) {
        background: #545ebd;
        color: #fff;
      }

      span.mt-0 {
        color: #8d9297;
        font-size: 12px;
      }

      h6 {
        font-size: 15px;
      }
      .mpesa {
        background-color: green !important;
      }

      img {
        border-radius: 15px;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="media mt-4 ml-4 text-center">
          <h4>Complete Payment</h4>
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->

            <form class="row g-3" action='<?php echo $_SERVER['PHP_SELF'] ?>' method="POST">
            <?php include('message.php');?>

          <div class="row">
          <img src="mpesa.png" style="width:40%;margin: 0 35%;">
                    <p style="color:#0c0d0d;line-height:1.7;font-size:13px;">1. Enter the <b>phone number</b> and press "<b>Confirm and Pay</b>"</br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b></p>
                    <?php if ($errmsg != ''): ?>
                        <p style="    background: #cc2a24;padding: .8rem;color: #ffffff;"><?php echo $errmsg; ?></p>
                    <?php endif; ?>
          </div>

                <div class="col-12">
                <input type="hidden" name="orderNo" value="#O2JDI2I3R" /> <!-- For testing purposes, we have added the value. This should proceed from your website -->

                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control text-center shadow-none" name="phone_number" maxlength="10" value="<?php echo $_SESSION['contact'];?>" required>
                  <label for="inputAddress2" class="form-label" >Amount</label>
                  <input type="text" class="form-control text-center shadow-none" name="amount" maxlength="10" value="<?php echo $_SESSION['amount'];?>" required>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-info btn-sm col-sm-12 shadow-none" name="submit" value="submit">Confirm and Pay</button>
                </div>
                <span><img src="saf.png" alt=""style="width:30%;">
                  <img src="faida.jpg" alt=""style="width:40%;" class="ml-5"></span>

              </form>


              <!--bs5 input-->
          </div>
        </div>


      </div>
      <div class="text-center">
        <p style="color:#0c0d0d;line-height:1.7;margin-top:5rem;">Copyright 2022 | All Rights Reserved | Made by Daniel Ndungo</p>


      </div>

    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
  </body>
</html>
