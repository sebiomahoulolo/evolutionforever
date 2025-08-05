<!-- Recent Properties -->
    <div class="col-12">
      <!-- Stats Cards -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('admin.bienimmos.index') }}" style="text-decoration:none;">
                        <div class="card stat-card blue" style="cursor:pointer;">
                            <div class="card-body">
                                <i class="fas fa-building"></i>
                                <div class="stat-number">{{ \App\Models\BienImmo::count() }}</div>
                                <div class="stat-title">Les biens immobiliers </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('admin.events.index') }}" style="text-decoration:none;">
                        <div class="card stat-card green" style="cursor:pointer;">
                            <div class="card-body">
                                <i class="fas fa-calendar-check"></i>
                                <div class="stat-number">{{ \App\Models\Event::count() }}</div>
                                <div class="stat-title">Événements</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('admin.cars.index') }}" style="text-decoration:none;">
                        <div class="card stat-card blue" style="cursor:pointer;">
                            <div class="card-body">
                                <i class="fas fa-car"></i>
                                <div class="stat-number">{{ \App\Models\Vehicule::count() }}</div>
                                <div class="stat-title">Véhicules</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card stat-card green">
                        <div class="card-body">
                            <i class="fas fa-dollar-sign"></i>
                            <div class="stat-number">40</div>
                            <div class="stat-title">Nombre de reservation</div>
                        </div>
                    </div>
                </div>
            </div>
            
</div>
