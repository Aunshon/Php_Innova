<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form action="second.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="nam" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" value="<?php
          if (!empty($_GET['NAME'])) {
            echo $_GET['NAME'];
          }
           ?>">

          <div class="">
            <?php
                if (!empty($_GET['nameerr'])) {
                  echo $_GET['nameerr'];
                }
             ?>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="
            <?php
            if (!empty($_GET['EMAIL'])) {
              echo $_GET['EMAIL'];
            }
             ?>
          ">
          <div class="">
            <?php
                if (!empty($_GET['mailerr'])) {
                  echo $_GET['mailerr'];
                }
             ?>
          </div>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password"value="<?php if (!empty($_GET['PASS'])) {
                            echo $_GET['PASS'];
                          }?>">
          <div class="">
            <?php
                if (!empty($_GET['pass'])) {
                  echo $_GET['pass'];
                }
             ?>
          </div>
        </div>
        <div class="form-group">
          <label for="confirm">Confirm Password</label>
          <input type="password" name="repass" class="form-control" id="confirm" placeholder="Confirm Password">
          <div class="">
            <?php
                if (!empty($_GET['repass'])) {
                  echo $_GET['repass'];
                }
             ?>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <div class="">
            <?php
                if (!empty($_GET['MESS'])) {
                  echo $_GET['MESS'];
                }
             ?>
          </div>
          <textarea class="form-control" name="mess" id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
        </div>

        <label for="exampleFormControlSelect1">Select birth date</label>
        <div class="row">
          <div class="col">
            <select class="form-control" id="exampleFormControlSelect1" name="day">
              <option value="day">Day</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
          </div>
          <div class="col">
            <select class="form-control" id="exampleFormControlSelect1" name="month">
              <option value="Month">Month</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div class="col">
            <select class="form-control" id="exampleFormControlSelect1" name="year">
              <option value="Year">Year</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
            </select>
          </div>
        </div>

        <fieldset class="form-group">
  <div class="row">
    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
    <div class="">
      <?php
          if (!empty($_GET['GENDER'])) {
            echo $_GET['GENDER'];
          }
       ?>
    </div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Male">
        <label class="form-check-label" for="gridRadios1">
          Male
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Female">
        <label class="form-check-label" for="gridRadios2">
          Female
        </label>
      </div>
    </div>
  </div>
</fieldset>


        <div class="form-group form-check">
          <label for="">Choose food</label>
          <div class="">
            <?php
                if (!empty($_GET['CHECK'])) {
                  echo $_GET['CHECK'];
                }
             ?>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Rice" name="check[]">
            <label class="form-check-label" for="inlineCheckbox1">Rice</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fish" name="check[]">
            <label class="form-check-label" for="inlineCheckbox2">Fish</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Beef" name="check[]">
            <label class="form-check-label" for="inlineCheckbox3">Beef</label>
          </div>
        </div>
        <div class="form-control">
            <input type="file"  name="photo">
        </div>
        <br>
        <label >Select Role</label>
          <div class="row">
            <div class="col">
              <select class="form-control" id="exampleFormControlSelect1" name="role">
                <option value="role">--Role--</option>
                <option value="1">Viewer</option>
                <option value="2">Editor</option>
                <option value="3">Admin</option>
              </select>
            </div>
          </div>
        <br>
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="submit" class="btn btn-success" name="login_btn"> Go To Login</button>
      </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



  </body>
</html>
