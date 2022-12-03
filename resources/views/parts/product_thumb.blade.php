<div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
    <!-- Single Prodect -->
    <div class="product">
        <div class="thumb">
            <a href="{{ url('product/details') }}/{{ $product->product_slug }}" class="image">
                <img src="{{ asset('uploads/product_photoes') }}/{{ $product->product_photo }}" alt="Product" />
            </a>
            <span class="badges">
                <span class="new">New</span>
            </span>
            <div class="actions">
                @auth
                    @if (wishlistcheck($product->id))
                        <a href="{{ route('wishlist.remove', wishlist_id($product->id)) }}" class="action quickview"><i class="fa fa-heart" style="color: #fb5d5d; "></i></a>
                    @else
                        <a href="{{ route('wishlist.insert', $product->id) }}" class="action quickview"><i class="fa fa-heart-o" ></i></a>
                    @endif
                @else
                    <a class="action quickview" href="#" data-bs-toggle="modal" data-bs-target="#loginActive" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                @endauth
                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                    data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a>
                <a href="compare.html" class="action compare" title="Compare"><i class="pe-7s-refresh-2"></i></a>
            </div>
            <button title="Add To Cart" class=" add-to-cart">Add
                To Cart</button>
        </div>
        <div class="content">
            <span class="ratings">
                <span class="rating-wrap">
                    <span class="star" style="width: {{ rating_percentage($product->id) }}%"></span>
                </span>
                <span class="rating-num">( {{ how_many_review($product->id) }} )</span>
            </span>
            <h5 class="title">
                <a href="{{ url('product/details') }}/{{ $product->product_slug }}">
                    {{ $product->product_name }}
                </a>
            </h5>
            <span class="price">
                <span class="new">${{ $product->product_price }}</span>
            </span>
            <span class="price">
                <span class="new">Company Name : {{ App\Models\User::find($product->user_id)->name }}</span>
            </span>
        </div>
    </div>
</div>
