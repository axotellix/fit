
{{-- [ SIDEBAR: admin navigation ] --}}
<div>
<aside class = 'admin-sidebar'>
    
    <h3>ADMIN</h3>

    <nav>
        <a href="/admin/crew"     active = {{ $page == 'crew' }}><span>CREW</span></a>
        <a href="/admin/gallery"  active = {{ $page == 'gallery' }}><span>GALLERY</span></a>
        <a href="/admin/price"    active = {{ $page == 'price' }}><span>PRICE LIST</span></a>
        <a href="/admin/contacts" active = {{ $page == 'contacts' }}><span>CONTACTS</span></a>
    </nav>

    <a class = 'logout' href="/logout">Logout</a>

</aside>
</div>
