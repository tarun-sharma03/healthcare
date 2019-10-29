<?php
session_start();
 ?><title>Prescription</title>
<head>
        <link rel="stylesheet" href="assets/css/pres.css">
</head>
<style>
        body {
          background-image: url('assets/images/banner-bg.jpg');
        }
        </style>
<div class="container" top:10px; >
        <form id="contact" action="prescription_update.php" method="POST">
          <h3>Prescription Form</h3>
          <h4>FIll in the relevant details</h4>
          <fieldset>
            <input placeholder="Disease name" type="text" name="disease" tabindex="1" required autofocus>
          </fieldset>
            <textarea placeholder="Type your prescription here...." name="prescription" tabindex="5" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
          </fieldset>

        </form>
      </div>
