
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <a href="{{ url('fournisseur/produits') }}" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Produits
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Produit::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="javascript:void(0)" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Commandes
          </span>
          <span class="info-box-number text-dark">
              {{ App\Models\Order::count() }}
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
      <a href="javascript:void(0)" class="info-box">
        <span class="info-box-icon bg-info elevation-1">
        <i class="nav-icon fas fa-book"></i>
        </span>

        <div class="info-box-content">
          <span class="info-box-text text-dark">
              Missions
          </span>
          <span class="info-box-number text-dark">
              12
          </span>
        </div>
        <!-- /.info-box-content -->
      </a>
      <!-- /.info-box -->
    </div>
  <!-- /.col -->
</div>