
  <div class="sidebar" style="padding: 0">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Handstand</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list" style="overflow: auto; padding-right: 0.5rem; padding-left: 0">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="/backoffice">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      
      <li>
        <a href="{{route('navbars.index')}}">
          <i class='bx bx-folder' ></i>
          <span class="links_name">Header</span>
        </a>
        <span class="tooltip">Header</span>
      </li>
      <li>
        <a href="{{route('titres.index')}}">
          <i class='bx bx-user' ></i>
          <span class="links_name">Titres</span>
        </a>
        <span class="tooltip">Titres</span>
      </li>
      <li>
        <a href="{{route('sliders.index')}}">
          <i class='bx bx-user' ></i>
          <span class="links_name">Sliders</span>
        </a>
        <span class="tooltip">Sliders</span>
      </li>
      <li>
       <a href="{{route('abouts.index')}}">
         <i class='bx bx-folder' ></i>
         <span class="links_name">About</span>
       </a>
       <span class="tooltip">About</span>
     </li>
     <li>
      <a href="{{route('email.index')}}">
        <i class='bx bx-folder' ></i>
        <span class="links_name">Mail</span>
      </a>
      <span class="tooltip">Mail</span>
    </li>
     <li>
       <a href="{{route('classes.index')}}">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Classes</span>
       </a>
       <span class="tooltip">Classes</span>
     </li>
     <li>
       <a href="{{route('schedules.index')}}">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Schedules</span>
       </a>
       <span class="tooltip">Schedules</span>
     </li>
     <li>
       <a href="{{route('trainers.index')}}">
         <i class='bx bx-user'></i>
         <span class="links_name">Trainers</span>
       </a>
       <span class="tooltip">Trainers</span>
     </li>
     <li>
       <a href="{{route('galleries.index')}}">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Gallery</span>
       </a>
       <span class="tooltip">Gallery</span>
     </li>
     
     <li>
      <a href="{{route('events.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Events</span>
      </a>
      <span class="tooltip">Events</span>
    </li>
    <li>
      <a href="{{route('pricings.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Pricings</span>
      </a>
      <span class="tooltip">Pricings</span>
    </li>
    <li>
      <a href="{{route('clients.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Clients</span>
      </a>
      <span class="tooltip">Clients</span>
    </li>
    <li>
      <a href="{{route('maps.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Maps</span>
      </a>
      <span class="tooltip">Maps</span>
    </li>
    <li>
      <a href="{{route('newsletters.index')}}">
        <i class='bx bx-cart-alt' ></i>
        <span class="links_name">Newsletters</span>
      </a>
      <span class="tooltip">Newsletters</span>
    </li>
    <li style="display: flex">
      <li class="mb-3">
        <a href="{{route('footers.index')}}">
          <i class='bx bx-cart-alt' ></i>
          <span class="links_name">Footer</span>
        </a>
        <span class="tooltip">Footer</span>
      </li>
      
      <!-- Authentication -->
      
      <form style=" margin-left:0; width:100%" method="POST" action="{{ route('logout') }}">
        
          @csrf
          <x-dropdown-link style="width: 100%; padding-left: 0 !important;" :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
                              <i class='bx bx-log-out' ></i>
              <span class="links_name">Log Out</span>
          </x-dropdown-link>
        </form>
   </li>
    
    
     

        
        
          
      
          
        

    </ul>
  </div>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>

 