 <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'bg-secondary' : '' }} ">
     <a class="nav-link" href="{{ route('admin.dashboard') }}">
         <i class="far fa-fw fa-circle"></i>
         <p>
             Dashboard
         </p>
     </a>
 </li>


 <li
     class="nav-item has-treeview nav-item  py-2 space-y-2 {{ request()->routeIs(['admin.add-member']) ? 'menu-open' : 'hidden' }}   ">
     {{-- Menu toggler --}}
     <a class="nav-link" href="#">
         <i class="far fa-fw fa-circle"></i>
         <p>
             Members
             <i class="fas fa-angle-left right"></i>
         </p>
     </a>

     {{-- Menu items --}}
     <ul class="nav nav-treeview pl-2 me-2">

         <li
             class="nav-item has-treeview {{ request()->routeIs('admin.add-member') ? 'bg-secondary rounded me-4' : '' }} mr-2">
             <a class="nav-link" href="{{ route('admin.add-member') }}">
                 <i class="far fa-fw fa-circle"></i>
                 <p>Add Member</p>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="#">
                 <i class="far fa-fw fa-circle"></i>
                 <p>Manage Members</p>
             </a>
         </li>

     </ul>

 </li>
