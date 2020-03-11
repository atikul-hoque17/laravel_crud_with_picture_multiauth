


@extends('admin.dashboard')

@section('content_heading')
  
  Category Manage
<br>
  {{ Session::get('message') }}

@endsection

@section('maincontent')

        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Product Name</th>
                                        <th>Category Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Picture</th>
                                        <th>Publication Status</th> 
                                        <th>Pro Status</th>                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0; ?>
                                   @foreach( $products as $product) 
                                       <tr class="odd gradeX">                                                                

                                        <td>{{ ++$i }}</td>
                                        <td>{{ $product->productName }} </td>
                                        <td>{{ $product->catName }}</td>
                                        <td>{{ $product->price }} </td>
                                        <td>{{ $product->qty }} </td>
                                        <td><img style="height: 40px;width: 40px;" src="{{ asset($product->pic) }}"> </td>
                                        <td class="center">{{ ($product->publicationStatus == 1)? 'Published' : 'Unpublished'  }}</td>
                                        <td class="center"> @if($product->prostatus == 1)
                                                   Top Sale
                                                @elseif($product->prostatus == 2)
                                                    New Collection
                                                @elseif($product->prostatus == 3)
                                                    Discount
                                                @endif

                                          <!-- ($product->prostatus == 1)? 'Published' : 'Unpublished'   -->


                                       </td>


                                             

                                        <td class="center">
                                          <a class="btn btn-success btn-sm" href="{{ url('/products/view/product/'. $product->id) }}"><i class="fas fa-eye"></i></a>
                                           <a class="btn btn-primary btn-sm" href="{{ url('/product/edit/'. $product->id) }}"><i class="fas fa-edit"></i></a> 
                                           <a id="delete" class="btn btn-danger btn-sm" href="{{ url('/products/delete/'. $product->id) }}"><i class="fas fa-trash-alt"></i></a>

                                        </td>

                                      </tr>
                                     @endforeach
                                </tbody>
                             </table>     

                         



                        </div>      <br>
                          {{ $products->onEachSide(3)->links() }} 

@endsection


