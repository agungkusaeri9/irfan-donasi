<div>
    <div class="card card-campaign">
        <div class="card-body">
            <img src="{{ $program->image() }}" alt="" class="img-fluid" />
            <h6 class="title">
                {{ $program->name }}
            </h6>
            <div class="progress">
                <div class="progress-bar w-75" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <span class="nominal">Rp. {{ number_format($program->donation_target) }}</span>
            <div class="d-flex justify-content-between">
                <span>100 Donatur</span>
                <span>6 Hari Lagi</span>
            </div>
        </div>
    </div>
</div>
