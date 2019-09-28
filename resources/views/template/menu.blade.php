<div class="sidebar" data-color="white" data-active-color="danger">
      
        <div class="logo">
          <a href="" class="simple-text logo-mini">
            <div class="logo-image-small">
              <img src="{{asset('assets/img/logo-small.png')}}">
            </div>
          </a>
          <a href="" class="simple-text logo-normal">
            Creative Tim
            
          </a>
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="active ">
              <a href="{{route('admin.index')}}">
                <i class="nc-icon nc-bank"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="{{route('product.index')}}">
                <i class="nc-icon nc-diamond"></i>
                <p>Product</p>
              </a>
            </li>
            <li>
              <a href="{{route('customer.index')}}">
                <i class="nc-icon nc-single-02"></i>
                <p>Customer</p>
              </a>
            </li>
            <li>
              <a href="{{route('order.index')}}">
                <i class="nc-icon nc-tile-56"></i>
                <p>Penjualan</p>
              </a>
            </li>
          </ul>
        </div>
      </div>