<div class="container-fluid mimin-wrapper">
  
  <!-- start:Left Menu -->
    <div id="left-menu">
      <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
              <center>
              <h3 id="time" class="animated fadeInLeft">21:00</h3>
              <p class="animated fadeInRight">
                <?php
                  echo date("l, M d Y");
                ?> 
              </p>
            </center>
            </li>
            <li class="active ripple">
              <a class="tree-toggle nav-header" href="{{route('home')}}">
                <span class="fa-home fa"></span> Home 
              </a>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header" href="{{route('index.aplikasi')}}">
                <span class="fa-globe fa" ></span> Aplikasi
              </a>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header" href="{{route('view.bobot')}}">
                <span class="fa-balance-scale fa" ></span> Bobot Karakteristik
              </a>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header" href="{{route('view.bobotsub')}}">
                <span class="fa-table fa" ></span> Bobot Sub Karakteristik
              </a>
            </li>
        </ul>
      </div>
    </div>
  <!-- end: Left Menu -->