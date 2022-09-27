
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Product List Data</title>
      <meta charset="utf-8">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
      <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> 
   </head>
   <body>
      <div class="container">
         <h3>Product List Data</h3>
         <table class="table">
            <thead>
               <tr>
                  <th>S.no</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>Product Price</th>
                  <th>Status</th>
               </tr>
            </thead>
            <tbody>
               @foreach($data as $product)
               <tr>
                  <th scope="row">{{ $product->id }}</th>
                  <td>{{ $product->JobId }}</td>
                  <td>{{ $product->JobTitle}}</td>
                  <td>{{ $product->JobRole}}</td>
                  <td> 
                     <input data-id="{{$product->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $product->Status ? 'checked' : '' }}> 
                  </td>
               </tr>
            </tbody>
            @endforeach
         </table>
      </div>
   </body>
</html>
<script>
   $(function() { 
           $('.toggle-class').change(function() { 
           var Status = $(this).prop('checked') == true ? 1 : 0;  
           var demo_id = $(this).data('id');  
           $.ajax({ 
    
               type: "GET", 
               dataType: "json", 
               url: '/status/update', 
               data: {'Status': Status, 'demo_id': demo_id}, 
               success: function(data){ 
               console.log(data.success) 
            } 
         }); 
      }) 
   }); 
</script>