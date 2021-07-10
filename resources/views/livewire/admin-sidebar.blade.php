
{{-- [ SIDEBAR: admin navigation ] --}}
<aside class = 'admin-sidebar'>
    
    <h3>ADMIN</h3>

    <nav>
        <a href="/admin/crew"     wire:click = 'setpage("crew")'     active = {{ $page == 'crew' }}><span>CREW</span></a>
        <a href="/admin/gallery"  wire:click = 'setpage("gallery")'  active = {{ $page == 'gallery' }}><span>GALLERY</span></a>
        <a href="/admin/price"    wire:click = 'setpage("price")'    active = {{ $page == 'price' }}><span>PRICE LIST</span></a>
        <a href="/admin/contacts" wire:click = 'setpage("contacts")' active = {{ $page == 'contacts' }}><span>CONTACTS</span></a>
    </nav>

    <a class = 'logout' href="/logout">Logout</a>

</aside>
