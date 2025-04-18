@extends('layouts.app')

@push('page_css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Peta Titik Lahan</h1>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="card">
        <div class="card-body p-0">
            <div class="row mx-3">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="mt-2">Status Titik</h6>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label bg-success p-1" for="baru_penanaman">Baru Penanaman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label bg-warning p-1" for="siap_panen">Siap Panen</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label bg-secondary p-1" for="panen">Lewat Masa Panen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="jenis_tanaman">Filter Jenis Tanaman:</label>
                                <select id="jenis_tanaman" class="form-control">
                                    <option value="">Semua</option>
                                    @foreach ($jenisTanaman as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="status">Filter Status:</label>
                                <select id="status" class="form-control">
                                    <option value="">Semua</option>
                                    <option value="baru_penanaman">Baru Penanaman</option>
                                    <option value="siap_panen">Siap Panen</option>
                                    <option value="panen">Panen</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="map" style="width: 100%; height: 500px;"></div>
        </div>
    </div>
</div>
@endsection

@push('page_scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    let datas = @json($lahan);

    // Inisialisasi peta dengan view awal ke Samarinda
    var map = L.map('map').setView([-0.502222, 117.146553], 13);

    // Tambahkan layer OSM
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    var bounds = [];

    datas.forEach(item => {
    if (item.latitude && item.longitude) {
        let latLng = [item.latitude, item.longitude];
        bounds.push(latLng);

        // Tentukan warna titik berdasarkan status
        let dotColor = '';

        if (item.status === 'baru_penanaman') {
            dotColor = 'green'; // Hijau
        } else if (item.status === 'siap_panen') {
            dotColor = 'brown'; // Coklat
        } else if (item.status === 'panen') {
            dotColor = 'gold'; // Kuning
        }

        // Tambahkan marker titik berwarna
        L.marker(latLng, {
            icon: L.divIcon({
                className: 'custom-dot',
                html: `<div style="
                    width: 14px;
                    height: 14px;
                    background-color: ${dotColor};
                    border-radius: 50%;
                    box-shadow: 0 0 5px rgba(0,0,0,0.5);
                "></div>`,
                iconSize: [14, 14],
                iconAnchor: [7, 7], // agar titik berada tepat di koordinat
            })
        }).addTo(map)
        .bindPopup(`
            <div class="card shadow border-0" style="width: 18rem; background-color: transparent;">
                <div class="card-body p-3" style="background-color: transparent;">
                    <h5 class="card-title text-primary mb-2">${item.tanaman}</h5>
                    <h6 class="card-subtitle mb-3 text-muted">${item.status.replace('_', ' ')}</h6>
                    <p class="card-text mb-1"><strong>Nama Petani:</strong> ${item.petani?.nama ?? '-'}</p>
                    <p class="card-text mb-1"><strong>Jenis Tanaman:</strong> ${item.jenis_tanaman?.nama ?? '-'}</p>
                    <p class="card-text mb-1"><strong>Luas:</strong> ${item.luas_lahan} m²</p>
                    <p class="card-text mb-1"><strong>Tanam:</strong> ${item.tanggal_penanaman ?? '-'}</p>
                    <p class="card-text mb-1"><strong>Panen:</strong> ${item.tanggal_panen ?? '-'}</p>
                    <p class="card-text"><strong>Koordinat:</strong><br>Lat: ${item.latitude}, Lng: ${item.longitude}</p>
                </div>
            </div>
        `);
    }
});



    if (bounds.length > 0) {
        map.fitBounds(bounds);
    }
</script>
@endpush
