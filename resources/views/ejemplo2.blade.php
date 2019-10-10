@extends('layouts.app')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
@endsection

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ejemplo2</title>
    <style>
      *{
  box-sizing:border-box;
  -moz-box-sizing:border-box;
}
body {
	background: url(//subtlepatterns.com/patterns/scribble_light.png);
  font-family: Calluna, Arial, sans-serif;
  min-height: 1000px;
}
.columns_2{
  -webkit-column-count:2;
  -moz-column-count:2;
  column-count:2;
}
.columns_3{
  -webkit-column-count:3;
  -moz-column-count:3;
  column-count:3;
}
.columns_4{
  -webkit-column-count:4;
  -moz-column-count:4;
  column-count:4;
}
.columns_5{
  -webkit-column-count:5;
  -moz-column-count:5;
  column-count:5;
}
#columns {
	-moz-column-gap: 5px;  
	-webkit-column-gap: 5px;
	column-gap: 5px;
  width: 90%;
	max-width: 1100px;
	margin: 50px auto;
}

div#columns figure {
	background: #fefefe;
	border: 2px solid #fcfcfc;
	box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
	margin: 0 2px 15px;
	padding: 15px;
	padding-bottom: 10px;
	transition: all .7s ease-in-out;
  display: inline-block;
  column-break-inside: avoid;
}

div#columns figure img {
	width: 100%; height: auto;
	border-bottom: 1px solid #ccc;
	padding-bottom: 15px;
	margin-bottom: 5px;
}

div#columns figure figcaption {
  font-size: .9rem;
	color: #444;
  line-height: 1.5;
}

div#columns small { 
  font-size: 1rem;
  float: right; 
  text-transform: uppercase;
  color: #aaa;
} 

div#columns small a { 
  color: #666; 
  text-decoration: none; 
  transition: .4s color;
}
div#columns figure:hover{
  padding: 5px;
}
a.button{
  padding:10px;
  background:salmon;
  margin:10px;
  display:block;
  text-align:center;
  color:#fff;
  transition:all 1s linear;
  text-decoration:none;
  text-shadow:1px 1px 3px rgba(0,0,0,0.3);
  border-radius:3px;
  border-bottom:3px solid #ff6536;
  box-shadow:1px 1px 3px rgba(0,0,0,0.3);
}
a.button:hover{
  background:#ff6536;
  border-bottom:3px solid salmon;
  color:#f1f2f3;
}
@media screen and (max-width: 750px) { 
  #columns { column-gap: 0px; }
  #columns figure { width: 100%; }
}
    
    </style>
  </head>
  <body>
      <div id="columns" class="columns_5">
          <figure>
          <img src="https://i.imgur.com/ruU04I6.jpg">
          <figcaption>Green Checkered Shirt</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/sPxEkEI.jpg">
          <figcaption>Green and Black Flowers</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/S3Umfmb.jpg">
          <figcaption>Black Dots</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/x1IZjjy.jpg">
          <figcaption>Red Flowy</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
           <figure>
           <img src="https://i.imgur.com/Jv8IWKQ.jpg">
          <figcaption>Yellow Button-Up</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
           <figure>
           <img src="https://i.imgur.com/MpLejRu.jpg">
          <figcaption>Put a Bird On It</figcaption>
             <span class="price">$44</span>
             <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/SZmPJ7W.jpg">
          <figcaption>Polka Dots</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>	
          
           <figure>
          <img src="https://i.imgur.com/OiEMgMx.jpg">
          <figcaption>Blue Spots</figcaption>
             <span class="price">$44</span>
             <a class="button" href="#">Buy Now</a>
          </figure>
          
            <figure>
          <img src="https://i.imgur.com/HolvggB.jpg">
            <figcaption>Pink Dots</figcaption>
              <span class="price">$44</span>
              <a class="button" href="#">Buy Now</a>
          </figure>	
          <figure>
          <img src="https://i.imgur.com/ruU04I6.jpg">
          <figcaption>Green Checkered Shirt</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/sPxEkEI.jpg">
          <figcaption>Green and Black Flowers</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/S3Umfmb.jpg">
          <figcaption>Black Dots</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/x1IZjjy.jpg">
          <figcaption>Red Flowy</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
           <figure>
           <img src="https://i.imgur.com/Jv8IWKQ.jpg">
          <figcaption>Yellow Button-Up</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
           <figure>
           <img src="https://i.imgur.com/MpLejRu.jpg">
          <figcaption>Put a Bird On It</figcaption>
             <span class="price">$44</span>
             <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/SZmPJ7W.jpg">
          <figcaption>Polka Dots</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>	
          
           <figure>
          <img src="https://i.imgur.com/OiEMgMx.jpg">
          <figcaption>Blue Spots</figcaption>
             <span class="price">$44</span>
             <a class="button" href="#">Buy Now</a>
          </figure>
          
            <figure>
          <img src="https://i.imgur.com/HolvggB.jpg">
            <figcaption>Pink Dots</figcaption>
              <span class="price">$44</span>
              <a class="button" href="#">Buy Now</a>
          </figure>	
          <figure>
          <img src="https://i.imgur.com/ruU04I6.jpg">
          <figcaption>Green Checkered Shirt</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          <figure>
          <img src="https://i.imgur.com/sPxEkEI.jpg">
          <figcaption>Green and Black Flowers</figcaption>
            <span class="price">$44</span>
            <a class="button" href="#">Buy Now</a>
          </figure>
          
          
          </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  