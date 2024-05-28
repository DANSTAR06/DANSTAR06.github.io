<?php
session_start();

// Check if payment was successful (this is just a placeholder, replace with your actual payment status check)
if (isset($_GET['payment']) && $_GET['payment'] === 'success') {
    $section = $_GET['section'];
    $_SESSION['paid_'.$section] = true;
    header('Location: main.php'); // Redirect to main page after payment
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lipa na mpesa</title>

    <link rel="shortcut icon" href="./assets/MPofolio/meLenovo.jpg" type="image/x-icon">
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
      .footer {
  background-color: #8d9297;
  padding: 25px;
  text-align: center;
  margin-bottom: 5px;
  margin-top: 50px;
}

.footer p {
  margin: 0;
  font-weight: bold;
}

.footer a {
  text-decoration: none;
  color: #13ec0c;
}

.footer a:hover {
  color: #007BFF;
}

.footer .social-icons {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10px;
}

.footer .social-icons a {
  font-size: 24px;
  margin: 0 10px;
}
    </style>
  </head>
  <body oncontextmenu="return false" class="snippet-body">
    <div class="container d-flex justify-content-center">
      <div class="card mt-5 px-3 py-4">
        <div class="d-flex flex-row justify-content-around">
          <div class="mpesa"><span>Mpesa </span></div>
          <div><span>Paypal</span></div>
          <div><span>Card</span></div>
        </div>
        <div class="media mt-4 pl-2">
          <img src="./images/1200px-M-PESA_LOGO-01.svg.png" class="mr-3" height="70" />
          <div class="media-body">
            <h6 class="mt-1">Enter Amount & Your Phone Number</h6>
          </div>
        </div>
        <div class="media mt-3 pl-2">
                          <!--bs5 input-->

            <form class="row g-3" action="./stk_initiate.php" method="POST">
            
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Amount</label>
                  <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label" >Phone Number</label>
                  <input type="text" class="form-control" name="phone"  placeholder="Enter Phone Number">
                </div>
             
                <div class="col-12">
                  <button type="submit" class="btn btn-success" name="submit" value="submit">Donate</button>
                </div>
              </form>
              <!--bs5 input-->
          </div>
        </div>
      </div>
    </div>
    <script
      type="text/javascript"
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
    ></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript" src=""></script>
    <script type="text/Javascript"></script>
  </body>
  <footer class="footer">
  <p>social links</p>
  <div class="social-icons">
    <a href="https://wa.me/+254721666815" target="_blank" title="WhatsApp">
      <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.linkedin.com/in/daniel-wamuyu-7404b01a2?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BQPNvFCc5RDi3bR7jayE%2BBg%3D%3D" class="social-link" target="_blank" title="linkedin">
      <i class="fab fa-linkedin"></i>
    </a>
    <a href="https://www.twitter.com/danstar_dj" class="social-link" target="_blank" title="Twitter">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="https://t.me/VDJ_DANSTAR" target="_blank" title="Telegram">
      <i class="fab fa-telegram"></i>
    </a>
    <a href="tel:+254721666815" target="_blank" title="Mobile">
      <i class="fab fa-weixin"></i>
    </a>
  </div>
  </footer>
</html>
