<!--aside open-->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.php.html">
            <img src="{{ asset('user-assets/images/logos/logomm.png') }}" class="header-brand-img desktop-lgo"
                alt="Maestloper Media">
            <img src="{{ asset('user-assets/images/logos/Logo-1 (1).png') }}" class="header-brand-img dark-logo"
                alt="Maestloper Media">
            <img src="{{ asset('user-assets/images/logos/favicon.png') }}" class="header-brand-img mobile-logo"
                alt="Maestloper Media">
            <img src="{{ asset('user-assets/images/logos/favicon.png') }}" class="header-brand-img darkmobile-logo"
                alt="Maestloper Media">
        </a>
    </div>

    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                    viewbox="0 0 24 24">
                    <path
                        d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z">
                    </path>
                </svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="side-item side-item-category">Posts</li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('allposts') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                    viewbox="0 0 24 24">
                    <path
                        d="M20 17V7c0-2.168-3.663-4-8-4S4 4.832 4 7v10c0 2.168 3.663 4 8 4s8-1.832 8-4zM12 5c3.691 0 5.931 1.507 6 1.994C17.931 7.493 15.691 9 12 9S6.069 7.493 6 7.006C6.069 6.507 8.309 5 12 5zM6 9.607C7.479 10.454 9.637 11 12 11s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2V9.607zM6 17v-2.393C7.479 15.454 9.637 16 12 16s4.521-.546 6-1.393v2.387c-.069.499-2.309 2.006-6 2.006s-5.931-1.507-6-2z">
                    </path>
                </svg>
                <span class="side-menu__label">All posts</span>
            </a>

        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('addpost') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                    viewbox="0 0 24 24">
                    <path
                        d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Post</span>
            </a>
        </li>

        <li class="side-item side-item-category">Services</li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('addservice') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24"
                    viewbox="0 0 24 24">
                    <path
                        d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z">
                    </path>
                </svg>
                <span class="side-menu__label">Add Service</span>
            </a>
        </li>
    </ul>
</aside>
<!--aside closed-->
