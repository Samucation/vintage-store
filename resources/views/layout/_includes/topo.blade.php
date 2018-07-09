
<!DOCTYPE html>
<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="{{ asset('css/vintage-home.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/css-effects.css') }}"  rel="stylesheet" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body >
<header>
  <nav class="nav-top" >
    <div class="head-div" align="center" >
       <span class="center-align-span" >FREE SHIPPING</span>
    </div>
     <div class="nav-wrapper font-color-black" >
       <a href="/" class="brand-logo font-color-black img-logo-topo" >Vintage</a>

       <ul class="hide-on-med-and-down" style="margin-left:20%!important;">
         <li>
           <a class="font-color-black font-txt-options-header" href=""  >FOR MAN</a>
         </li>
         <li>
           <a class="font-color-black font-txt-options-header" href="" >FOR WOMAN</a>
         </li>
         <li>
           <a class="font-color-black font-txt-options-header" href="" >OTHERS</a>
         </li>
       </ul>

       <a href="#" data-target="mobile" class="sidenav-trigger">
         <i class="material-icons color-black" >menu</i>
       </a>
       <ul class="right hide-on-med-and-down">
         <li>
           <div class="row">
            <div class="div-search-column-left" >
               <input id="search" type="search" size="20" placeholder="Search..." class="input-search" >
            </div>
            <div class="div-search-column-right div-icon-search" >
               <label class="label-icon " for="search" >
                <i class="material-icons font-color-black">search</i>
               </label>
            </div>
          </div>
         </li>
         <li>
           <div class="div-icon-shopping-cart" >
             <label class="label-icon " for="search"  >
               <a href="">
                  <i class="material-icons font-color-black">
                    shopping_cart
                  </i>
                  <span class="cart-items-count "><span class="notification-counter">3</span></span>
               </a>
             </label>
           </div>
         </li>
         <li>
           <a class="font-color-black font-txt-options-header" href="" >ADMIN AREA</a>
         </li>
       </ul>
       <ul class="sidenav" id="mobile">
         <li><a href="/">Home</a></li>
         <li><a href="">FOR MAN</a></li>
         <li><a href="">FOR WOMAN</a></li>
         <li><a href="">OTHERS</a></li>
       </ul>
     </div>
   </nav>

</header>
