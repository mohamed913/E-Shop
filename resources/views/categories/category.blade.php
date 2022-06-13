@extends('layouts.index')
@section('contentCategories')



<div class="container-fluid">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">user_id</th>
        <th scope="col">created_at</th>
        <th scope="col">operation</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category => $value)
      <tr>
        <td scope="row">{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
        <td>
          
        <i class="fa-brands fa-facebook-messenger btn btn-primary position-relative " > 


<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
{{$value['user_id']}}
    <span class="visually-hidden">unread messages</span>
  </span>

  
<!--button type="button" class="btn btn-primary position-relative">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
  {{$value['user_id']}}
    <span class="visually-hidden">unread messages</span>
  </span>
</!--button-->





</i>
        
      
      
      </td>
   
        <td>{{$value['created_at']}}</td>

        <td class="d-flex ">
          <a href="comments/approve/{{$value['id']}}" class="mx-2"><button type="button" class="btn btn-info">Approve</button></a>

          <form method="post" action="/myhomeprofile/categories/{{$value['id']}}">
            {{method_field('DELETE')}}
            @csrf
            <button type="submit" class="btn btn-danger" onclick='return confirm("Do you Really Want to Delete ?!!")'>Delete</button>
          </form>
          <i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/jQaH58Ywc9W.png?_nc_eui2=AeE5zkN5X2hEvPuZucrO7DczsDAYXHhfvEawMBhceF-8RnEX5oJHyUYyq2hG1X-ZIsnw5lXQeHh-0qCfXhc-40a2');background-position:0 -83px;background-size:auto;width:24px;height:24px;background-repeat:no-repeat;display:inline-block"></i>
        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>

<p>
  {{$arr['name']}}
</p>


@endsection

