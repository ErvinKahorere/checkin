@extends('layouts.app2')

@section('content')


   <!-- BEGIN: Content -->
   <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">CheckIn</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Administrator Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                 
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">Angelina Jolie</div>
                                    <div class="text-xs text-theme-41">Software Engineer</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->






<div class="grid grid-cols-12 gap-6 mt-8">
                    <div class="col-span-12 lg:col-span-3 xxl:col-span-2">
                        <h2 class="intro-y text-lg font-medium mr-auto mt-2">
                            Quick Search
                        </h2>
                        <!-- BEGIN: Inbox Menu -->
                        <div class="intro-y box bg-theme-1 p-5 mt-6">
                   <!--          <button type="button" class="button button--lg flex items-center justify-center text-gray-700 w-full bg-white mt-2"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3 w-4 h-4 mr-2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg> Compose </button> -->

<h6 class="intro-y text-lg font-medium mr-auto mt-2 text-white"> Filter by</h6>

                            <div class="border-t border-theme-3 mt-6 pt-6 text-white">
                                <a href="" class="flex items-center px-3 py-2 rounded-md bg-theme-22 font-medium"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail w-4 h-4 mr-2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Users </a>
                                <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star w-4 h-4 mr-2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> Checkpoints </a>
               
                            </div>
                          
                        </div>
                        <!-- END: Inbox Menu -->
                    </div>
                    <div class="col-span-12 lg:col-span-9 xxl:col-span-10">
                        <!-- BEGIN: Inbox Filter -->
                        <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                            <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-gray-700"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg> 
                                <input type="text" class="input w-full sm:w-64 box px-10 text-gray-700 placeholder-theme-13" placeholder="Search name or number">
                                <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down dropdown-toggle w-4 h-4 cursor-pointer text-gray-700"><polyline points="6 9 12 15 18 9"></polyline></svg> 
                                    <div class="inbox-filter__dropdown-box dropdown-box mt-10 absolute top-0 left-0 z-20">
                                        <div class="dropdown-box__content box p-5">
                                            <div class="grid grid-cols-12 gap-4 row-gap-3">
                                                <div class="col-span-6">
                                                    <div class="text-xs">User Name</div>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="e.g John Something">
                                                </div>
                                                <div class="col-span-6">
                                                    <div class="text-xs">Checkpoint</div>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="e.g Wernhill">
                                                </div>




                                                <div class="col-span-6">
                                                    <div class="text-xs">Date & Time</div>
                                                 <!--    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Important Meeting">

 -->

 <br>

<div id="timepicker-datepicker">
                                <div class="preview">
                                    <input data-timepicker="true" class="datepicker input w-56 border block mx-auto">
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-timepicker-datepicker" class="copy-code button button--sm border flex items-center text-gray-700"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-timepicker-datepicker"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10 hljs xml"> <span class="hljs-tag">&lt;<span class="hljs-name">input</span> <span class="hljs-attr">data-timepicker</span>=<span class="hljs-string">"true"</span> <span class="hljs-attr">class</span>=<span class="hljs-string">"datepicker input w-56 border block mx-auto"</span>&gt;</span></code> <textarea style="margin-left: 1000000px;" class="fixed w-1 h-1"></textarea></pre>
                                    </div>
                                </div>
                            </div>

                                                </div>
                                             
                                                <div class="col-span-12 flex items-center mt-3">
                                        
                                                    <button class="button w-32 justify-center block bg-theme-1 text-white ml-2">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                        <!-- END: Inbox Filter -->
                        <!-- BEGIN: Inbox Content -->
                        <div class="intro-y inbox box mt-5">
                            <div class="p-5 flex flex-col-reverse sm:flex-row text-gray-600 border-b border-gray-200">
                            
                                <div class="flex items-center sm:ml-auto">
                                    <div>1 - 50 of 5,238</div>
                                    <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left w-4 h-4"><polyline points="15 18 9 12 15 6"></polyline></svg> </a>
                                    <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right w-4 h-4"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        
                                </div>
                            </div>
                            <div class="overflow-x-auto sm:overflow-x-visible">
                               

<div class="intro-y">
                                    <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                        <div class="flex px-5 py-3">
                                            <div class="w-56 flex-none flex items-center mr-10">
                                                
                                                
                                                
                                                <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                                                </div>
                                                <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                                            </div>
                                            <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                            <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                        </div>
                                    </div>
                                </div>


                                <div class="intro-y">
                                    <div class="inbox__item inbox__item--active inline-block sm:block text-gray-700 bg-gray-100 border-b border-gray-200">
                                        <div class="flex px-5 py-3">
                                            <div class="w-56 flex-none flex items-center mr-10">
                                                
                                                
                                                
                                                <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-8.jpg">
                                                </div>
                                                <div class="inbox__item--sender truncate ml-3">Kevin Spacey</div>
                                            </div>
                                            <div class="w-64 sm:w-auto truncate"> <span class="inbox__item--highlight">There are many variations of passages of Lorem Ips</span> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi </div>
                                            <div class="inbox__item--time whitespace-no-wrap ml-auto pl-10">01:10 PM</div>
                                        </div>
                                    </div>
                                </div>

                             
                             
                            </div>
                            <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-gray-600">
                                
                            </div>
                        </div>
                        <!-- END: Inbox Content -->
                    </div>
                </div>














                         
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Content -->


@endsection
