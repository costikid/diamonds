
@import url('https://fonts.googleapis.com/css2?family=Lora:wght@500&display=swap');
/* Variables */
:root {
  --duration: 5s;
  --text-color: rgba(255, 255, 255, 0.3);
  --bgr-color: #1d1d1d;
  --text-shadow: 0 0px 0px rgba(255, 255, 255, 0.5);
  --product-background-color: rgb(244, 244, 244);
  --grey: #606060;
  --light-yellow: #efe3bb;
  --white: white;
  --black: #000000;
  --btn-box-shadow: rgba(255,255,255,0) 0 1px 0, inset rgba(255,255,255,0.7) 0 1px 0;
}

/* General Styles */
html {
  background-color: var(--bgr-color);
  text-align: center;
  scroll-behavior: smooth;
}

body {
  padding-top: 3em;
  font-family: 'Lora', serif;}

  
.title{
  color: var(--light-yellow);
}
/* Shine Effect */
.shine, .chrome {
  font-size: 3em;
  margin: 0 auto;
  font-weight: bold;
}

.shine {
  background: #d4af37 -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff)) 0 0 no-repeat;
  background-size: 150px;
  color: var(--text-color);
  -webkit-background-clip: text;
  background-clip: text;
  animation-name: shine;
  animation-duration: var(--duration);
  animation-iteration-count: infinite;
  text-shadow: var(--text-shadow);
  font-size: 1em;
}

/* Chrome Effect */
.chrome {
  background-image: -webkit-linear-gradient(-40deg, transparent 0%, transparent 40%, #fff 50%, transparent 60%, transparent 100%);
  background-image: linear-gradient(-40deg, transparent 0%, transparent 40%, #fff 50%, transparent 60%, transparent 100%);
  background-size: 200px;
  color: var(--text-color);
  -webkit-background-clip: text;
  background-clip: text;
  animation-name: shine;
  animation-duration: var(--duration);
  animation-iteration-count: infinite;
  text-shadow: var(--text-shadow);
}

/* Keyframes Animation */
@keyframes shine {
  0%, 10% {
    background-position: -1000px;
  }
  20% {
    background-position: top left;
  }
  90% {
    background-position: top right;
  }
  100% {
    background-position: 1000px;
  }
}
p {
  margin: 0 0 10px 0;
}

.clip-svg {
  width: 0;
  height: 0;
}

.img-clip-block {
  margin: 20px 0;
}

.img-clip-row {
  text-align: center;
}

.img-clip-row:first-of-type .img-clip-wrap {
  background-position: top;
}

.img-clip-row:nth-of-type(2) .img-clip-wrap:nth-of-type(odd) {
  background-position: left;
}

.img-clip-row:nth-of-type(2) .img-clip-wrap:nth-of-type(even) {
  background-position: right;
}

.img-clip-row:last-of-type .img-clip-wrap {
  background-position: bottom;
}

.img-clip-wrap {
  width: 300px; 
  height: 300px; 
  background-image: url("https://media.istockphoto.com/id/1291470173/photo/silver-glitter-light.jpg?b=1&s=612x612&w=0&k=20&c=yb4Cb8Ynm6-Gq4KC4yWK7MXbQgC7DFX1IE36gLvq4-Q="); 
  background-repeat: no-repeat;
  margin-left: auto;
  margin-right: auto;
  display: block;
  position: relative;
  -webkit-clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
  clip-path: url("#clip-diamond-demo");
  background-position: bottom;
}

.overlay {
  background: rgba(171, 147, 116, 0.8);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s linear;
  transition: all 0.3s linear;
}

.overlay-content {
  color: rgba(0, 0, 0, 0.4);
  font-weight: 600;
  font-size: 200%;
  text-transform: uppercase;
  position: absolute;
  left: 50%;
  top: 50%;
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
  text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
  
}

.img-clip-wrap:hover .overlay {
  -webkit-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in;
  background: none;
}

.img-clip-img {
  display: block;
}

@media only screen and (min-width: 650px) {
  .img-clip-row {
    margin-top: -154px;
  }

  .img-clip-row:first-of-type {
    margin-top: auto;
  }

  .img-clip-wrap {
    display: inline-block;
  }

  
}


/* Diamonds grid */
.grid {
  display: grid;
  gap: 20px;
  max-width: 1200px;
  padding: 20px;
  margin: 0 auto; /* Center the grid */
}

.grid-item {
  background-color: var(--product-background-color);
  border-radius: 10px;
  padding: 20px;
  box-shadow:var(--text-shadow);
  text-align: center;
  cursor: pointer;
  flex: 1; /* Make sure all items have equal width */
}

/* Responsive Diamonds Grid */
@media (min-width: 600px) {
  .grid {
      grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 900px) {
  .grid {
      grid-template-columns: repeat(3, 1fr);
  }
}
/* Image in diamond grid  */
.product-image {
  max-width: 100%;
  max-height: 150px; /* Set a maximum height */
  width: auto;
  height: auto;
  display: block;
  margin: 0 auto; /* Center images horizontally */
}

/* name of diamond */
.product-title {
  margin-top: 10px;
  font-size: 1.2rem;
}
/* description of diamond */

.product-subtitle {
  color: var(--grey);
  font-size: 1rem;
  margin-top: 5px;
}

/* Modal styles. It's the image of the diamond that opens on click */
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
  justify-content: center;
  align-items: center;
  z-index: 999;
}

.modal img {
  max-width: 90%;
  max-height: 90%;
  object-fit: contain;
}

.close {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 2rem;
  color: var(--product-background-color);
  cursor: pointer;
}

.about{
  padding: 1em;  

}


.about p{
  color: var(--white);
}




form {
  margin-left:auto;
  margin-right:auto;
  width: 250px;
  height: 333px;
  padding:30px;
  border: 1px solid rgba(0,0,0,.2);
 
  border-radius: 5px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  background: rgba(0, 0, 0, 0.5); 
  
  box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
  overflow: hidden; 
}

textarea{
  background: rgba(255, 255, 255, 0.4) ;
  width: 250px;
  height: 110px;
  border: 1px solid rgba(255,255,255,.6);

  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box; 
  display:block;
  font-size:18px;
  color:var(--white);
  
  margin-bottom:20px;
  overflow:hidden;
  font-family: 'Lora', serif;

}

input {
  width: 250px;
  height: 48px;
  border: 1px solid rgba(255,255,255,.4);
 
  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box; 
  display:block;
  font-size:18px;

  margin-bottom:20px;
  font-family: 'Lora', serif;

}

input[type=submit] {
  cursor:pointer;
}

input.form-control {
  background: var(--grey);
}

input.form-control {
  background: var(--grey);
}

input.form-control {
  background: var(--grey);
}

::-webkit-input-placeholder {
  color: var(--white);
}

:-moz-placeholder{ 
  color: var(--white);
}

::-moz-placeholder {
  color: var(--white);
}

:-ms-input-placeholder {  
  color: var(--white);
}

input:focus, textarea:focus { 
  background-color: var(--black);

  box-shadow: 0 0 5px 1px rgba(255,255,255,.5);
  overflow: hidden; 
}

.btn {
  width: 138px;
  height: 44px;
  
  border-radius: 4px;
  float:right;
  background: var(--light-yellow);
  padding: 10.5px 21px;
  font-family: 'Lora', serif;
  font-size: 1em;
 
  
  box-shadow: var(--btn-box-shadow);
}

.btn:hover {
 
  background: var(--bgr-color);
  
  color: var(--white);
}

.btn:active {
  margin-top:1px;
 
  background: var(--grey);
  color: var(--white);
  box-shadow: var(--btn-box-shadow);
 }

 .social-icons{
  display: flex;
  align-items: center;
  justify-content: center;
}

.square {
  height: 60px;
  width: 60px;
  border: 1px dashed var(--white);
  margin: 40px;
  /*   padding: 1px; resize squares */
  background-color:#252525;
  display: inline-block;
  transform: rotateZ(44deg);
}

.square:hover {
  background-color:var(--grey);
  transition: ease 0.2s;
  cursor: pointer;
}

.square .icons {
  position: absolute;
  transform: rotateZ(-44deg);
  margin: 20px 0 0px 21px;
}

.fa-facebook,
.fa-twitter,

.fa-youtube
 {
  width: 11px;
  height: 22px;
  color: var(--white);
  font-family: FontAwesome;
  font-size: 23px;
  font-weight: 400;
  text-transform: uppercase;
}

 .contact p{
  color: var(--white);
  padding-top: 1em;
 }

 .contact a{
  text-decoration: none;
  color: var(--white);
 }

 .contact a:hover{
  color: var(--light-yellow);
 }

 .glitter {
  animation-name: glitter;
  animation-iteration-count: infinite;
  
}

.star-1 {
  transform-origin: 102.14px 87.09px;
  animation-duration: 3.5s;
}

.star-2 {
  transform-origin: 219.47px 205.7px;
  animation-duration: 4s;
}

.star-3 {
  transform-origin: 404.11px 35.05px;
  animation-duration: 2.5s;
}

.star-4 {
  transform-origin: 54.43px 393.81px;
  animation-duration: 2.5s;
}

.star-5 {
  transform-origin: 374.42px 271.34px;
  animation-duration: 3s;
}

@keyframes glitter {
  0% {
    -webkit-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }
  50% {
    -webkit-transform: scale(.8) rotate(360deg);
    opacity: .7;
  }
  100% {
    -webkit-transform: scale(0.3) rotate(0deg);
    opacity: 0;
  }
}

