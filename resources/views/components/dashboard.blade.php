<section id="dashboard">
    <div class="side-menu">
        <div class="title">
            <h2>{{ $header }}</h2>
        </div>
        <div class="profile-info">
            <div class="user-img">
                <img src="img/avatar.png" alt="user">
            </div>
            <div class="user-type">
                <h3>Admin</h3>
            </div>
            <div class="user-name">
                <h3>John Doe</h3>
            </div>
            <div class="since-date">
                <p>Member since 2021</p>
            </div>
        </div>
        <hr class="divider">
        <div class="menu">
            <ul>
                <li class="active">
                    <a href="">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-users"></i>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-cogs"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>

    </div>
    <div class="content">
        <div class="title">
            <h2>{{ $contentTitle }}</h2>
            <p>{{ $contentDescription }}</p>
        </div>
        {{ $slot }}
    </div>
</section>
