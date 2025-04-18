<li class="nav-item">
    <a href="{{ route('maps.index') }}"
       class="nav-link {{ Request::is('maps*') ? 'active' : '' }}">
        <p>Peta</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('jenis-tanaman.index') }}"
       class="nav-link {{ Request::is('jenis-tanaman*') ? 'active' : '' }}">
        <p>Jenis Tanaman</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('petanis.index') }}"
       class="nav-link {{ Request::is('petanis*') ? 'active' : '' }}">
        <p>Petani</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('lahans.index') }}"
       class="nav-link {{ Request::is('lahans*') ? 'active' : '' }}">
        <p>Lahan</p>
    </a>
</li>


