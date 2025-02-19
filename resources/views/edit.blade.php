<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>

      <section class="py-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 mx-auto">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="text-center"> Update Product</h4>
                          </div>
                          <div class="card-body">
                            <div class="py-4">
                            <a href="{{route('home')}}" class="btn btn-primary float-end ">View Data</a>  

                            </div>
                              
                              <form action="{{route('update', $product->id)}}" method="POST">
                                @csrf
                                <div class="form-group py-3">
                                    <label for="name">Product Name</label>
                                    <input type="text" name="product_name" id="name" class="form-control" value="{{$product->product_name}}">
                                </div>
                                <div class="form-group py-3">
                                    <label for="name">	Product Price</label>
                                    <input type="text" name="product_price" id="name" class="form-control" value=" {{$product->product_price}}"  >
                                </div>
                               
                                <div class="form-group py-3">
                                    <label for="name">Weight</label>
                                    <input type="text" name="product_weight" id="name" class="form-control" value="{{$product->product_weight}}">
                                </div>
                                <div class="form-group py-3">
                                    <label for="name">Product Description</label>
                                    <textarea name="product_description" id="product_description" cols="30" rows="6" class="form-control" >{{$product->product_description}} </textarea>
                                   
                                </div>
                                <div class="form-group py-2">
                                    <label for="name">Status</label>
                          <select name="status" id="status" class="form-control">
                            <option value="" selected hidden>Select Status</option>
                            <option value="1" {{$product->status == 1 ? 'selected' : ''}} >Active</option>
                            <option value="0"  {{$product->status == 0 ? 'selected' : ''}} >Inactive</option>
                          </select>
                         
                                </div>

                          
                                <div class="form-group py-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>





                              </form>
                             
                          </div>
                      </div>
                  </div>
              </div>
          </div>


      </section>


    
</body>
</html>