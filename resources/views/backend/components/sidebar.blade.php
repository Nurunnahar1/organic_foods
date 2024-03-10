   <nav class="sidebar">
       <div class="sidebar-header">
           <a href="#" class="sidebar-brand">
               Organic<span>Foods</span>
           </a>
           <div class="sidebar-toggler not-active">
               <span></span>
               <span></span>
               <span></span>
           </div>
       </div>
       <div class="sidebar-body">
           <ul class="nav">
               <li class="nav-item nav-category">Main</li>
               <li class="nav-item">
                   <a href="{{ route('admin.dashboard') }}" class="nav-link">
                       <i class="link-icon" data-feather="box"></i>
                       <span class="link-title">Dashboard</span>
                   </a>
               </li>
               <li class="nav-item nav-category">web apps</li>
               <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false"
                       aria-controls="emails">
                       <i class="link-icon" data-feather="mail"></i>
                       <span class="link-title">Email</span>
                       <i class="link-arrow" data-feather="chevron-down"></i>
                   </a>
                   <div class="collapse" id="emails">
                       <ul class="nav sub-menu">
                           <li class="nav-item">
                               <a href="pages/email/inbox.html" class="nav-link">Inbox</a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/email/read.html" class="nav-link">Read</a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/email/compose.html" class="nav-link">Compose</a>
                           </li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item">
                   <a href="pages/apps/chat.html" class="nav-link">
                       <i class="link-icon" data-feather="message-square"></i>
                       <span class="link-title">Chat</span>
                   </a>
               </li>
              
               <li class="nav-item nav-category">Pages</li>
               <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button"
                       aria-expanded="false" aria-controls="general-pages">
                       <i class="link-icon" data-feather="book"></i>
                       <span class="link-title">Category</span>
                       <i class="link-arrow" data-feather="chevron-down"></i>
                   </a>
                   <div class="collapse" id="general-pages">
                       <ul class="nav sub-menu">
                           <li class="nav-item">
                               <a href="{{ route('category.index') }}" class="nav-link">Category List</a>
                           </li>
                           <li class="nav-item">
                               <a href="{{ route('category.create') }}" class="nav-link">Category Create</a>
                           </li>
                         
                           
                       </ul>
                   </div>
               </li>
               <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" role="button"
                       aria-expanded="false" aria-controls="general-pages">
                       <i class="link-icon" data-feather="book"></i>
                       <span class="link-title">Testimonial</span>
                       <i class="link-arrow" data-feather="chevron-down"></i>
                   </a>
                   <div class="collapse" id="general-pages">
                       <ul class="nav sub-menu">
                           <li class="nav-item">
                               <a href="{{ route('testimonial.index') }}" class="nav-link">Testimonial List</a>
                           </li>
                           <li class="nav-item">
                               <a href="{{ route('testimonial.create') }}" class="nav-link">Testimonial Create</a>
                           </li>
                         
                           
                       </ul>
                   </div>
               </li>
               {{-- <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false"
                       aria-controls="authPages">
                       <i class="link-icon" data-feather="unlock"></i>
                       <span class="link-title">Authentication</span>
                       <i class="link-arrow" data-feather="chevron-down"></i>
                   </a>
                   <div class="collapse" id="authPages">
                       <ul class="nav sub-menu">
                           <li class="nav-item">
                               <a href="pages/auth/login.html" class="nav-link">Login</a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/auth/register.html" class="nav-link">Register</a>
                           </li>
                       </ul>
                   </div>
               </li>
               <li class="nav-item">
                   <a class="nav-link" data-bs-toggle="collapse" href="#errorPages" role="button" aria-expanded="false"
                       aria-controls="errorPages">
                       <i class="link-icon" data-feather="cloud-off"></i>
                       <span class="link-title">Error</span>
                       <i class="link-arrow" data-feather="chevron-down"></i>
                   </a>
                   <div class="collapse" id="errorPages">
                       <ul class="nav sub-menu">
                           <li class="nav-item">
                               <a href="pages/error/404.html" class="nav-link">404</a>
                           </li>
                           <li class="nav-item">
                               <a href="pages/error/500.html" class="nav-link">500</a>
                           </li>
                       </ul>
                   </div>
               </li> --}}
               <li class="nav-item nav-category">Docs</li>
               <li class="nav-item">
                   <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
                       <i class="link-icon" data-feather="hash"></i>
                       <span class="link-title">Documentation</span>
                   </a>
               </li>
           </ul>
       </div>
   </nav>