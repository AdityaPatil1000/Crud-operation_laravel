<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">
<thead class="thead-dark">
 

<tr>  
<th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>  
      <th scope="col">Qualification</th> 
</tr>  
</thead>  
<tbody>  
@foreach($cruds as $crud)  
        <tr border="none">  
            <td>{{$crud->id}}</td>  
            <td>{{$crud->first_name}}</td>  
            <td>{{$crud->last_name}}</td>  
            <td>{{$crud->gender}}</td>  
            <td>{{$crud->qualifications}}</td>  
<td >  
<form action="{{ route('user.destroy', $crud->id)}}" method="post">  
                  @csrf  
                  @method('DELETE')  
                  <button class="btn btn-danger" type="submit">Delete</button>  
                </form>  
</td>  
<td >  
<form action="{{ route('user.edit', $crud->id)}}" method="GET">  
                  @csrf  
                   
                  <button class="btn btn-danger" type="submit">Edit</button>  
                </form>  
</td>  
  
         </tr>  
@endforeach  
</tbody>  
</table>