@extends('layouts.app22')

@section('content')



 
      
                        
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
                                                    <!-- <th class="border-b-2 whitespace-no-wrap">Date/Time</th> -->
                                                </tr>
                                            </thead>

                                           
                                            <div id="name_list"></div>    



                                            <tbody>




                                          

                                            @if($users->count() > 0)

@foreach($users as $user)



<tr class="">
<td class="border-b">{{ $user->id }}</td>
                                                    <td class="border-b">{{ $user->name }}</td>
                                                
                                                    <td class="border-b">{{ $user->phone }}</td>
                                                    <td class="border-b">{{ $user->location }}</td>
                                                    <!-- <td class="border-b">{{ $user->created_at }}</td> -->
                                                </tr>

@endforeach


 
</tbody>
                                        </table>


@else
<p class="">No data yet...</p>

@endif                                                             
                                     
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
            </div>
            <!-- END: Content -->




@endsection


@section('script')



@endsection