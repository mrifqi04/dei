<div class="head-nav">
    <span class="menu"></span>
    <ul>
        <li><a href="/" class="{{ Request::is('/') ? 'current' : '' }}">home</a></li>
        <li><a href="{{ route('sejarah') }}" class="{{ Request::is('sejarah') ? 'current' : '' }}">sejarah</a></li>                                  
        <li><a href="{{ route('jenis') }}" class="{{ Request::is('jenis') ? 'current' : '' }}">jenis</a></li>                    
        <li><a href="{{ route('manfaat') }}" class="{{ Request::is('manfaat') ? 'current' : '' }}">manfaat</a></li>                    
    </ul>
</div>