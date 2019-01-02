<?php
include 'backend/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog add</title>
    <style>
    *,
:before,
:after {
  box-sizing: border-box;
}

body {
  background: #424242;
  padding-right:30px;
  overflow-x:hidden;
}

form {
  width:100%;
  margin: 50px;
}
form h1 {
  font-size: 3em;
  font-weight: 300;
  text-align: center;
  color: #2196f3;
}
form h5 {
  text-align: center;
  text-transform: uppercase;
  color: #c6c6c6;
}
form hr.sep {
  background: #2196f3;
  box-shadow: none;
  border: none;
  height: 2px;
  width: 100%;
  margin: 0px auto 45px auto;
}
form .emoji {
  font-size: 1.2em;
}

.group {
  position: relative;
  margin: 45px 0;
}

textarea {
  resize: none;
}

input,
textarea {
  background: none;
  color: #c6c6c6;
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 1320px;
  border: none;
  border-radius: 0;
  border-bottom: 1px solid #c6c6c6;
}
input:focus,
textarea:focus {
  outline: none;
}
input:focus ~ label, input:valid ~ label,
textarea:focus ~ label,
textarea:valid ~ label {
  top: -14px;
  font-size: 12px;
  color: #2196f3;
}
input:focus ~ .bar:before,
textarea:focus ~ .bar:before {
  width: 320px;
}

input[type="password"] {
  letter-spacing: 0.3em;
}

label {
  color: #c6c6c6;
  font-size: 16px;
  font-weight: normal;
  position: absolute;
  pointer-events: none;
  left: 5px;
  top: 10px;
  transition: 300ms ease all;
}

.bar {
  position: relative;
  display: block;
  width: 1320px;
}
.bar:before {
  content: "";
  height: 2px;
  width: 0;
  bottom: 0px;
  position: absolute;
  background: #2196f3;
  transition: 300ms ease all;
  left: 0%;
}

.btn {
  background: #fff;
  color: #959595;
  border: none;
  padding: 10px 20px;
  border-radius: 3px;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  text-decoration: none;
  outline: none;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}
.btn:hover {
  color: #8b8b8b;
  box-shadow: 0 7px 14px rgba(0, 0, 0, 0.18), 0 5px 5px rgba(0, 0, 0, 0.12);
}
.btn.btn-link {
  background: #2196f3;
  color: #d3eafd;
}
.btn.btn-link:hover {
  background: #0d8aee;
  color: #deeffd;
}
.btn.btn-submit {
  background: #2196f3;
  color: #bce0fb;
}
.btn.btn-submit:hover {
  background: #0d8aee;
  color: #deeffd;
}
.btn.btn-cancel {
  background: #eee;
}
.btn.btn-cancel:hover {
  background: #e1e1e1;
  color: #8b8b8b;
}

.btn-box {
  text-align: center;
  margin: 50px 0;
}
@media (max-width:500px)
{
  body{
    padding-right:10px;
    overflow-x:hidden;
  }
  input,
textarea {
  background: none;
  color: #c6c6c6;
  font-size: 18px;
  padding: 10px 10px 10px 5px;
  display: block;
  width: 320px;
  border: none;
  border-radius: 0;
  border-bottom: 1px solid #c6c6c6;
}
}
    </style>
</head>
<body>
<div class="wrapper">
  <form method="POST">
      <div class="group">
      <input type="text" name="title" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label>Title</label>
    </div>
    <div class="group">
      <input type="text" name="author" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label>Author</label>
    </div>
    <div class="group">
      <input type="title" name="header" required="required"/><span class="highlight"></span><span class="bar"></span>
      <label>Header quote</label>
    </div>
    <div class="group">
      <!-- <input type="number" required="required"/><span class="highlight"></span><span class="bar"></span> -->
      <textarea type="textarea" name="maincontent" rows="5" required="required"></textarea><span class="highlight"></span><span class="bar"></span>
      <label>Main content</label>
    </div>
    <div class="group">
      <textarea type="textarea" name="ending" rows="5" required="required"></textarea><span class="highlight"></span><span class="bar"></span>
      <label>ending</label>
    </div>
    <div class="btn-box">
      <button class="btn btn-submit" name="submit" type="submit">submit</button>
      <?php

newblog();
?>
      
    </div>
  </form>
</div>
</body>
</html>

