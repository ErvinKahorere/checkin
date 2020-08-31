@extends('layouts.app22')

@section('content')



                    <div class="col-span-12 lg:col-span-12 xxl:col-span-12">
                 
                        <!-- BEGIN: Inbox Content -->
                        
  <!-- BEGIN: Striped Rows -->
  <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Today
                                </h2>
                              
                            </div>
                            <div class="p-5" id="striped-rows-table">
                                <div class="preview">
                                    <div class="overflow-x-auto">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="border-b-2 whitespace-no-wrap">#</th>
                                                    <th class="border-b-2 whitespace-no-wrap">Name</th>
                                                    <th class="border-b-2 whitespace-no-wrap">Phone Number</th>
                                                    <th class="border-b-2 whitespace-no-wrap">Location</th>
                                                    <th class="border-b-2 whitespace-no-wrap">Date/Time</th>
                                                </tr>
                                            </thead>

                                           
                                            <div id="name_list"></div>    



                                            <tbody>




                                         
    @if($business->visits->count() > 0)
                                            @foreach($business->visits->sortByDesc('created_at') as $visit)
                                            
                                       
                                        
                                                <tr class="">
                                                    <td class="border-b">{{ $visit->id }}</td>
                                                    <td class="border-b">{{ $visit->user->name }}</td>
                                                    <td class="border-b">{{ $visit->user->phone }}</td>
                                                    <td class="border-b">{{ $visit->user->location }}</td>
                                                    <td class="border-b">{{ $visit->created_at }}</td>
                                                </tr>
                                                @endforeach

                                                @else


                                         
                                              <p class="">No data yet...</p>
                                                   
                                        
      
                                                 @endif 

                                                <!-- <tr>
                                                    <td class="border-b">2</td>
                                                    <td class="border-b">Brad</td>
                                                    <td class="border-b">Pitt</td>
                                                    <td class="border-b">@bradpitt</td>
                                                    <td class="border-b">@angelinajolie</td>
                                                </tr>
                                                <tr class="bg-gray-200">
                                                    <td class="border-b">3</td>
                                                    <td class="border-b">Charlie</td>
                                                    <td class="border-b">Hunnam</td>
                                                    <td class="border-b">@charliehunnam</td>
                                                    <td class="border-b">@angelinajolie</td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-striped-rows-table" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-striped-rows-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 whitespace-no-wrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 whitespace-no-wrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 whitespace-no-wrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 whitespace-no-wrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtr class=&quot;bg-gray-200&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtr class=&quot;bg-gray-200&quot;HTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Striped Rows -->


                        <!-- END: Inbox Content -->
                    </div>
                </div>

                </div>













                <div class="grid grid-cols-12 gap-6 mt-10">
                    <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <!-- <div class="col-span-12 mt-8">
                            <div class="intro-y flex items-center h-10">
                                <h2 class="text-lg font-medium truncate mr-5">
                                    General Report
                                </h2>
                                <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="alert-triangle" class="report-box__icon text-theme-10"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">7,365</div>
                                            <div class="text-base text-gray-600 mt-1">Confirmed</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="smile" class="report-box__icon text-theme-11"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">2,929</div>
                                            <div class="text-base text-gray-600 mt-1">Recovered</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="frown" class="report-box__icon text-theme-12"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">72</div>
                                            <div class="text-base text-gray-600 mt-1">Deaths</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                    <div class="report-box zoom-in">
                                        <div class="box p-5">
                                            <div class="flex">
                                                <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                                <div class="ml-auto">
                                                    <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                                </div>
                                            </div>
                                            <div class="text-3xl font-bold leading-8 mt-6">{{ $visitorCount }} </div>
                                            <div class="text-base text-gray-600 mt-1">Visitor Count</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- END: General Report -->
        
                    </div>
                    <div class="col-span-12 xxl:col-span-3 -mb-10 pb-10">
                      <!-- BEGIN: Line Chart -->
                        <!-- <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                                <h2 class="font-medium text-base mr-auto">
                                    Visitor Chart
                                </h2>
                            
                            </div>
                            <div class="p-5" id="line-chart">
                                <div class="preview">
                                    <canvas id="line-chart-widget" height="200"></canvas>
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-line-chart" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                    <div class="overflow-y-auto h-64 mt-3">
                                        <pre class="source-preview" id="copy-line-chart"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagcanvas id=&quot;line-chart-widget&quot; height=&quot;200&quot;HTMLCloseTagHTMLOpenTag/canvasHTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- END: Line Chart -->

                        
                    </div>
                </div>
            </div>
            <!-- END: Content -->




@endsection


@section('script')



@endsection