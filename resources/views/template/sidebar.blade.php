     <!--begin::Sidebar-->
     <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
       <!--begin::Sidebar Brand-->
       <div class="sidebar-brand">
         <!--begin::Brand Link-->
         <a href="./index.html" class="brand-link">
           <!--begin::Brand Image-->
           <img
             src="../../assets/img/download.png"
             alt="AdminLTE Logo"
             class="brand-image opacity-75 shadow" />
           <!--end::Brand Image-->
           <!--begin::Brand Text-->
           <span class="brand-text fw-light">SIMPADU POLIBAN</span>
           <!--end::Brand Text-->
         </a>
         <!--end::Brand Link-->
       </div>
       <!--end::Sidebar Brand-->
       <!--begin::Sidebar Wrapper-->
       <div class="sidebar-wrapper">
         <nav class="mt-2">
           <!--begin::Sidebar Menu-->
           <ul
             class="nav sidebar-menu flex-column"
             data-lte-toggle="treeview"
             role="menu"
             data-accordion="false">
             <li class="nav-item">
               <a href="{{ url ('mahasiswa') }}" class="nav-link">
                 <i class="bi bi-person-circle"></i>
                 <p>Mahasiswa</p>
               </a>
             </li>
             <ul
             class="nav sidebar-menu flex-column"
             data-lte-toggle="treeview"
             role="menu"
             data-accordion="false">
             <li class="nav-item">
               <a href="{{ url ('prodi') }}" class="nav-link">
                 <i class="bi bi-briefcase-fill"></i>
                 <p>Program Studi</p>
               </a>
             </li>
           <!--end::Sidebar Menu-->
         </nav>
       </div>
       <!--end::Sidebar Wrapper-->
     </aside>
     <!--end::Sidebar-->