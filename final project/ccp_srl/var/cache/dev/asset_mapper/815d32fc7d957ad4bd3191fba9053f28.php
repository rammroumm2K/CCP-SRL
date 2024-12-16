O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:91:"C:\Users\RamiBenSalem\final_project\CCP WEBSITE\final project\ccp_srl\assets\styles\app.css";s:10:"publicPath";s:55:"/assets/styles/app-53d039629306ce1a39ce5a20fcbfa4b4.css";s:23:"publicPathWithoutDigest";s:22:"/assets/styles/app.css";s:15:"publicExtension";s:3:"css";s:7:"content";s:12764:".hero {
    background-color: black; /* Sfondo nero */
    color: white; /* Testo bianco */
    position: relative;
    overflow: hidden;
    margin: 0;

  }

.container{
  transform-origin: top center;
}



/*=== Sections ===*/ 

#section2{

  margin-top: 10em;
  margin-bottom: 10em;
  
}

#contact-block{
  margin-bottom: 12em;
 
}


.why-icon-style{
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: #fff;
  box-shadow: 0 4px 10px rgba(0, 255, 0, 0.4);
}





.bold-text {
  font-weight: 600;
}

/* Custom Card Styling */
.service-card {
  border: none;
  border-radius: 15px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), 0 6px 6px rgba(0, 255, 0, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2), 0 10px 10px rgba(0, 255, 0, 0.3);
}

/* Icon Styling */
.service-icon {
  font-size: 2rem;
  color: #000;
  text-shadow: 0 2px 5px rgba(0, 255, 0, 0.5);
}

.service-title {
  font-weight: bold;
  font-size: 1.25rem;
}

.service-description {
  color: #555;
}

/* Imposta tutte le carte alla stessa altezza */
.card {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 100%;
}

/* Stessa altezza per le righe contenenti le carte */
.row {
  display: flex;
  flex-wrap: wrap;
}

.card .service-description {
  flex-grow: 1; /* Si espande per riempire lo spazio */
}

.service-card {
  min-height: 350px; /* Altezza minima per le carte */
}


/*Custom Form Card */

.custom-card-form {
  background-color: #1c1c1c;
  
  border: none;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
}
.custom-card-header {
  background-color: #32CD32; /* Lime green */ 
  color: #000;
  font-weight: bold;
  padding: 1rem;
  text-align: center;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}
.btn-primary {
  background-color: #32CD32; /* Lime green */
  border-color: #32CD32;
}
.btn-primary:hover {
  background-color: #28a745;
  border-color: #28a745;
}
.form-control, .form-select {
  background-color: #2b2b2b;
  color: #fff; /* White text inside inputs */
  border: 1px solid #3a3a3a;
}
.form-control::placeholder, .form-select::placeholder {
  color: #ccc; /* Placeholder text color */
}
.form-control:focus, .form-select:focus {
  background-color: #333;
  color: #fff; /* Focused input text color */
  border-color: #32CD32;
  box-shadow: 0 0 5px #32CD32;
}
.form-check-input {
  background-color: #2b2b2b;
  border-color: #32CD32;
}
.form-check-input:checked {
  background-color: #32CD32;
  border-color: #32CD32;
}
textarea {
  resize: none; /* Disable resizing */
}
/*=======FOOTER=========*/
footer {
  background: url("../image/vvvortex-a953302afdc7f11e9bb9fbbec23b02fa.svg") no-repeat center center;
  background-repeat: no-repeat;
  background-size: 100em;
  background-color: #000;
  background-position-x: 65em;
  font-size: large;
  font-weight: bold;
  

}

  /*==========NAVBAR=========*/
.black-nav{
  background-color: #000;
}

/*svg round*/

#wcb_2{
  color: white !important;
}

#wave {
  width: 100%;
  height: auto; /* o 100% se necessario */
  position: relative;
  top: -1px;
  
}

.svg-title {
  display: inline-block; /* Mantieni inline-block se necessario */
  position: relative; /* Mantieni se richiesto */


}

#svg-square{
  width: 20em;
  right: 15em;
  bottom: -5.8em;
  
  
  position: absolute;
  
}
#svg-square-3{
  width: 20rem;
  display: flex;
  position: relative;
  top: 11rem;
  right: 14rem;

}

#svg-square2{
  position: absolute;
  top: -7em;
  right: 10em;
  width: 18em;
}
/*#circle-svg {
  width: 40%; 
  height: auto; 
  display: block;
  position: absolute; 
  top: 110rem; 
  left: 5rem; 
   z-index: -2;
}*/



/*button classes*/
.styled-button {
  position: relative;
  padding: 1rem 2rem;
  font-size: 1.1rem;
  font-weight: bold;
  color: #ffffff;
  background: linear-gradient(to bottom, #171717, #242424);
  border-radius: 9999px;
  cursor: pointer;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 1), 0 10px 20px rgba(0, 0, 0, 0.4);
  transition: all 0.2s ease;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #292929;
  margin: 0 auto; /* Center the button */
}

.styled-button::before {
  content: "";
  position: absolute;
  top: -2px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  background: linear-gradient(to bottom, #292929, #000000);
  z-index: -1;
  border-radius: 9999px;
  transition: all 0.2s ease;
  opacity: 1;
}

.styled-button:active {
  transform: translateY(2px);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 1), 0 5px 10px rgba(0, 0, 0, 0.4);
}

.styled-button .inner-button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(to bottom, #171717, #242424);
  width: 40px;
  height: 40px;
  margin-left: 10px;
  border-radius: 50%;
  box-shadow: 0 0 1px rgba(0, 0, 0, 1);
  border: 1px solid #252525;
  transition: all 0.2s ease;
}

.styled-button .inner-button::before {
  content: "";
  position: absolute;
  top: -2px;
  right: -1px;
  bottom: -1px;
  left: -1px;
  background: linear-gradient(to bottom, #292929, #000000);
  z-index: -1;
  border-radius: 9999px;
  transition: all 0.2s ease;
  opacity: 1;
}

.styled-button .inner-button .icon {
  transform: rotate(90deg); /* Rotate the arrow to point down */
  filter: drop-shadow(0 10px 20px rgba(26, 25, 25, 0.9))
    drop-shadow(0 0 4px rgba(0, 0, 0, 1));
  transition: all 0.4s ease-in-out;
}

.styled-button .inner-button .icon:hover {
  filter: drop-shadow(0 10px 20px rgba(50, 50, 50, 1))
    drop-shadow(0 0 20px rgba(2, 2, 2, 1));
  transform: rotate(90deg) scale(1.1); /* Enhance hover effect */
}


/* Accordion button styles */
.lime-accordion {
  background-color: #f8f9fa !important; /* Light background */
  color: #333 !important; /* Dark text */
  border: 1px solid #ddd !important; /* Light border */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth animation */
}

.lime-accordion:hover,
.lime-accordion:focus {
  transform: scale(0.95); /* Zoom out effect */
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Stronger shadow */
}

.accordion-button:not(.collapsed) {
  background-color: #e9ecef !important; /* Slightly darker when expanded */
  color: #212529 !important; /* Keep the text readable */
  box-shadow: none; /* Remove shadow on active state */
}

.accordion-item {
  border: none; /* Remove default border between items */
  margin-bottom: 10px; /* Add spacing between accordion items */
}

.accordion-body {
  background-color: #fff; /* White background for body */
  border: 1px solid #ddd; /* Border for the body content */
  border-top: none; /* Seamless integration with header */
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05); /* Subtle inner shadow */
}



/*=== Responsive CSS for Tablebt and Mobile ===*/

/* Mobile (fino a 767px) */
@media (max-width: 767px) {
  .service-card {
    min-height: 300px; 

  }
  
#svg-square{
  display: none;
  
}
#svg-square-3{
 display: none;

}

#svg-square2{
  display: none;
}
/*#circle-svg {
display: none;
}*/
}

/* Tablet (768px - 1024px) */
@media (min-width: 768px) and (max-width: 1024px) {


  
}

/* PC (da 1025px in su) */
@media (min-width: 1025px) {
  service-card {
    min-height: 400px; /* Altezza per grandi monitor */
  }
}

/*Cookies*/
/* Stile per il Modal dei Cookie */
#cookieModal {
  position: fixed;
  bottom: 5% !important;
  right: 5% !important;
  z-index: 1050;
  display: none;
  background: #eaeaea !important;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgb(0, 0, 0);
  padding: 20px !important;
  
  
  width: 300px;
  text-align: center;
  font-family: Arial, sans-serif;
}

/* Icona del cookie */
#cookieModal img {
  width: 50px;
  margin-bottom: 10px;
}

/* Titolo */
#cookieModal h3 {
  font-size: 18px;
  margin-bottom: 10px;
  color: #333;
}

/* Testo */
#cookieModal p {
  font-size: 14px;
  color: #666;
  margin-bottom: 20px;
}

/* Pulsanti */
#cookieModal button {
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
}

/* Pulsante "Allow" */
#cookieModal #allowCookies {
  background-color: #60c257 !important;
  color: white;
  margin-right: 10px;
}

/* Pulsante "Decline" */
#cookieModal #declineCookies {
  background-color: #ccc;
  color: #333;
}

/* Effetto hover sui pulsanti */
#cookieModal button:hover {
  opacity: 0.9;
}
 
/*PAGE 404*/
.cont_principal {
  position: absolute;  
    width: 100%;
    height: 100%;
  overflow: hidden;
  }
  .cont_error {
  position: absolute;
    width: 100%;
    height: 300px;
    top: 50%;
    margin-top:-150px;
  }
  
  .cont_error > h1  {
   font-family: 'Lato', sans-serif;  
  font-weight: 400;
    font-size:150px;
  color:#000000;
  position: relative;
  left:-100%;
  transition: all 0.5s;
  }
  
  
  .cont_error > p  {
   font-family: 'Lato', sans-serif;  
  font-weight: 300;
    font-size:24px;
    letter-spacing: 5px;
  color:#0716e5;
  position: relative;
  left:100%;
  transition: all 0.5s;
      transition-delay: 0.5s;
  -webkit-transition: all 0.5s;
   -webkit-transition-delay: 0.5s;
  }
  
  .cont_aura_1 {
    position:absolute;
    width:300px;
    height: 120%;
  top:25px;
  right: -340px;
    background-color: #37ce23;
  box-shadow: 0px 0px  60px  20px  rgba(100, 222, 118, 0.5);
  -webkit-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_aura_2 {
    position:absolute;
    width:100%;
    height: 300px;
  right:-10%;
  bottom:-301px;
   background-color: #129e00;
  box-shadow: 0px 0px 60px 10px rgba(105, 214, 95, 0.5),0px 0px  20px  0px  rgba(0,0,0,0.1);
    z-index:5;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  }
  
  .cont_error_active > .cont_error > h1 {
    left:0%;
  }
  .cont_error_active > .cont_error > p {
    left:0%;
  }
  
  .cont_error_active > .cont_aura_2 {
      animation-name: animation_error_2;
      animation-duration: 4s;
    animation-timing-function: linear;
      animation-iteration-count: infinite;
      animation-direction: alternate;
  transform: rotate(-20deg);    
  }
  .cont_error_active > .cont_aura_1 {
   transform: rotate(20deg);
    right:-170px;
      animation-name: animation_error_1;
      animation-duration: 4s;
    animation-timing-function: linear;
      animation-iteration-count: infinite;
      animation-direction: alternate;
  }
  
  @-webkit-keyframes animation_error_1 {
    from {
      -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }
  }
  @-o-keyframes animation_error_1 {
    from {
      -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }
  
  }
  @-moz-keyframes animation_error_1 {
    from {
      -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }
  
  }
  @keyframes animation_error_1 {
    from {
      -webkit-transform: rotate(20deg);
    transform: rotate(20deg);
    }
    to {  -webkit-transform: rotate(25deg);
    transform: rotate(25deg);
    }
  }
  
  
  
  
  @-webkit-keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg); 
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
  }
  @-o-keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg); 
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
  }
  
  @-moz-keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg); 
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
  }
  @keyframes animation_error_2 {
    from { -webkit-transform: rotate(-15deg); 
    transform: rotate(-15deg);
    }
    to { -webkit-transform: rotate(-20deg);
    transform: rotate(-20deg);
    }
  }";s:6:"digest";s:32:"53d039629306ce1a39ce5a20fcbfa4b4";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:1:{i:0;O:41:"Symfony\Component\AssetMapper\MappedAsset":12:{s:10:"sourcePath";s:95:"C:\Users\RamiBenSalem\final_project\CCP WEBSITE\final project\ccp_srl\assets\image\vvvortex.svg";s:10:"publicPath";s:59:"/assets/image/vvvortex-a953302afdc7f11e9bb9fbbec23b02fa.svg";s:23:"publicPathWithoutDigest";s:26:"/assets/image/vvvortex.svg";s:15:"publicExtension";s:3:"svg";s:7:"content";N;s:6:"digest";s:32:"a953302afdc7f11e9bb9fbbec23b02fa";s:13:"isPredigested";b:0;s:8:"isVendor";b:0;s:55:" Symfony\Component\AssetMapper\MappedAsset dependencies";a:0:{}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:18:"image/vvvortex.svg";}}s:59:" Symfony\Component\AssetMapper\MappedAsset fileDependencies";a:0:{}s:60:" Symfony\Component\AssetMapper\MappedAsset javaScriptImports";a:0:{}s:11:"logicalPath";s:14:"styles/app.css";}