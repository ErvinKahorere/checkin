<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CheckIn Export All |  {{ $business->name}} </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>


<h4> {{ $business->name}} </h4>
<h1>Registry List </h1>

<p> Compiled: {{ $date }} </p>
<hr>

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




                                         
                                            @if($visit->count() > 0)
                                               
                                                @foreach($visit as $data)
                                            
                                       
                                        
                                                <tr class="">
                                                    <td class="border-b">{{ $data->id }}</td>
                                                    <td class="border-b">{{ $data->user->name }}</td>
                                                    <td class="border-b">{{ $data->user->phone }}</td>
                                                    <td class="border-b">{{ $data->user->location }}</td>
                                                    <td class="border-b">{{ $data->created_at }}</td>
                                                </tr>

                                                @endforeach

                                                @else


                                         
                                              <p class="">No data yet...</p>
                                                   
                                        
      
                                                 @endif 

                                            </tbody>
                                        </table>
  </body>
</html>



