<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

      <section class="py-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 mx-auto">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="text-center"> Product List</h4>
                          </div>
                          <div class="card-body">
                              <a href="{{route('addProduct')}}" class="btn btn-primary float-end">Add Product</a>   
                              <table class="table table-striped responsive" >
                                  <thead>
                                      <tr>
                                      
                                            
                                      
                                          <th scope="col">ID</th>
                                          <th scope="col">Product Name</th>
                                          <th>Product Price</th>
                                          <th>Weight</th>
                                       
                                          <th>Description</th>
                                          <th>Status</th>
                                       
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  @foreach ( $products as $product )
                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_weight}}</td>
                                    
                                    <td>{{  $product->product_description}}</td>
                                    <td> <span class="badge {{$product->status ==1 ? 'bg-success' : 'bg-danger'}}"> {{  $product->status ==1 ? 'Active' : 'Inactive' }}</span></td>
                                  
                                 
                                 
                                    <td> 
                                            <a href="{{ route('status' , $product->id) }}" class="btn btn-{{$product->status ==1 ? 'success' : 'danger'}}"><i class="fa-solid fa-toggle-{{$product->status ==1 ? 'off' : 'on'}}"></a>
                                        <a href="{{ route('edit', $product->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('delete', $product->id) }}" class="btn btn-danger" onclick=" return confirm('Are you sure Deleted?') "><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                  </tr>
                    
                                    
                                  @endforeach
                                        

                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


      </section>


    
</body>
</html>