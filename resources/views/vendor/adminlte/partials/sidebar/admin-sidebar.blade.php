 <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'bg-secondary' : '' }} ">
     <a class="nav-link" href="{{ route('admin.dashboard') }}">
         <i class="far fa-fw fa-circle"></i>
         <p>
             Dashboard
         </p>
     </a>
 </li>

 <li
     class="nav-item has-treeview nav-item  py-2 space-y-2 {{ request()->routeIs(['admin.add-microfinance']) ? 'menu-open' : 'hidden' }}   ">
     {{-- Menu toggler --}}
     <a class="nav-link" href="#">
         <i class="far fa-fw fa-circle"></i>
         <p>
             Microfinances
             <i class="fas fa-angle-left right"></i>
         </p>
     </a>

     {{-- Menu items --}}
     <ul class="nav nav-treeview pl-2 me-2">

         <li
             class="nav-item has-treeview {{ request()->routeIs('admin.add-microfinance') ? 'bg-secondary rounded me-4' : '' }} mr-2">
             <a class="nav-link" href="{{ route('admin.add-microfinance') }}">
                 <i class="far fa-fw fa-circle"></i>
                 <p>Add Microfinance</p>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="far fa-fw fa-circle"></i>
                 <p>Manage Microfinance</p>
             </a>
         </li>

     </ul>

 </li>

 <li
     class="nav-item has-treeview nav-item  py-2 space-y-2 {{ request()->routeIs(['admin.add-mfi-admin']) ? 'menu-open' : 'hidden' }}   ">
     {{-- Menu toggler --}}
     <a class="nav-link" href="#">
         <i class="far fa-fw fa-circle"></i>
         <p>
             MFI Admins
             <i class="fas fa-angle-left right"></i>
         </p>
     </a>

     {{-- Menu items --}}
     <ul class="nav nav-treeview pl-2 me-2">

         <li
             class="nav-item has-treeview {{ request()->routeIs('aadmin.add-mfi-admin') ? 'bg-secondary rounded me-4' : '' }} mr-2">
             <a class="nav-link" href="{{ route('admin.add-mfi-admin') }}">
                 <i class="far fa-fw fa-circle"></i>
                 <p>Add MFI Admin</p>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="far fa-fw fa-circle"></i>
                 <p>Manage MFI Admin</p>
             </a>
         </li>

     </ul>

 </li>
