       <!-- Bestsaler Product Start -->
       <div class="container-fluid py-5">
           <div class="container py-5">
               <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                   <h1 class="display-4">Bestseller Products</h1>
                   <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which
                       looks reasonable.</p>
               </div>
               <div class="row g-4">

                   @foreach ($products as $product)
                       <div class="col-lg-6 col-xl-4">
                           <div class="p-4 rounded bg-light">
                               <div class="row align-items-center">
                                   <div class="col-6">
                                       <img src="{{ asset('uploads/product') }}/{{ $product->product_image }}"
                                           class="img-fluid rounded-circle w-100" alt="">
                                   </div>
                                   <div class="col-6">
                                       <a href="#" class="h5">{{ $product->name }}</a>
                                       <div class="d-flex my-3">
                                           @for ($i = 0; $i < $product->product_rating; $i++)
                                               <li><i class="fas fa-star text-primary"></i></li>
                                           @endfor
                                       </div>
                                       <h4 class="mb-3"> {{ $product->product_price }} $</h4>
                                       <a href="#"
                                           class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                               class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   @endforeach

               </div>
           </div>
           <div class="col-12 text-center d-flex justify-center">
               <div class="py-3">
                   {{-- {{ $products->links() }} --}}
               </div>
           </div>
       </div>
       <!-- Bestsaler Product End -->
