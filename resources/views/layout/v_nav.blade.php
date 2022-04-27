<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()-> is('Infosewa') ? 'active' : ''}}"><a href="/Infosewa"><i class="fa fa-search"></i> <span>Infosewa</span></a></li>
        <li class="{{request()-> is('siswa') ? 'active' : ''}}"><a href="/siswa"><i class="fa fa-group"></i> <span>Sewa</span></a></li>
        <li class="{{request()-> is('Rekapsewa') ? 'active' : ''}}"><a href="/Rekapsewa"><i class="fa fa-reorder"></i> <span>RekapSewa</span></a></li>
        <li class="treeview">