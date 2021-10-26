<li class="nav-item">
    <a href="{{ route('marcas.index') }}"
       class="nav-link {{ Request::is('marcas*') ? 'active' : '' }}">
        <p>Marcas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('bodegas.index') }}"
       class="nav-link {{ Request::is('bodegas*') ? 'active' : '' }}">
        <p>Bodegas</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ubicacions.index') }}"
       class="nav-link {{ Request::is('ubicacions*') ? 'active' : '' }}">
        <p>Ubicaciones</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('tVS.index') }}"
       class="nav-link {{ Request::is('tVS*') ? 'active' : '' }}">
        <p>TV's</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('computadoras.index') }}"
       class="nav-link {{ Request::is('computadoras*') ? 'active' : '' }}">
        <p>Computadoras</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('refrigeradoras.index') }}"
       class="nav-link {{ Request::is('refrigeradoras*') ? 'active' : '' }}">
        <p>Refrigeradoras</p>
    </a>
</li>


