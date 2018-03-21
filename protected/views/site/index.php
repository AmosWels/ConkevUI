<div class="middle-content">
    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l4">
            <div class="card stats-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li class="red-text"><span class="badge cyan lighten-1">gross</span></li>
                        </ul>
                    </div>
                    <span class="card-title">Sales</span>
                    <span class="stats-counter">$<span class="counter">48190</span><small>This week</small></span>
                </div>
                <div id="sparkline-bar"></div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card stats-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li><a href="javascript:void(0)"><i class="material-icons">more_vert</i></a></li>
                        </ul>
                    </div>
                    <span class="card-title">Page views</span>
                    <span class="stats-counter"><span class="counter">83710</span><small>This month</small></span>
                </div>
                <div id="sparkline-line"></div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card stats-card">
                <div class="card-content">
                    <span class="card-title">Reports</span>
                    <span class="stats-counter"><span class="counter">23230</span><small>Last week</small></span>
                    <div class="percent-info green-text">8% <i class="material-icons">trending_up</i></div>
                </div>
                <div class="progress stats-card-progress">
                    <div class="determinate" style="width: 70%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row no-m-t no-m-b">
        <div class="col s12 m12 l8">
            <div class="card visitors-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li><a href="javascript:void(0)" class="card-refresh"><i class="material-icons">refresh</i></a></li>
                        </ul>
                    </div>
                    <span class="card-title">Visitors<span class="secondary-title">Showing stats from the last week</span></span>
                    <div id="flotchart1"></div>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l4">
            <div class="card server-card">
                <div class="card-content">
                    <div class="card-options">
                        <ul>
                            <li class="red-text"><span class="badge blue-grey lighten-3">optimal</span></li>
                        </ul>
                    </div>
                    <span class="card-title">Server Load</span>
                    <div class="server-load row">
                        <div class="server-stat col s4">
                            <p>167GB</p>
                            <span>Usage</span>
                        </div>
                        <div class="server-stat col s4">
                            <p>320GB</p>
                            <span>Space</span>
                        </div>
                        <div class="server-stat col s4">
                            <p>57.4%</p>
                            <span>CPU</span>
                        </div>
                    </div>
                    <div class="stats-info">
                        <ul>
                            <li>Google Chrome<div class="percent-info green-text right">32% <i class="material-icons">trending_up</i></div></li>
                            <li>Safari<div class="percent-info red-text right">20% <i class="material-icons">trending_down</i></div></li>
                            <li>Mozilla Firefox<div class="percent-info green-text right">18% <i class="material-icons">trending_up</i></div></li>
                        </ul>
                    </div>
                    <div id="flotchart2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner-sidebar">
    <span class="inner-sidebar-title">New Messages</span>
    <div class="message-list">
        <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-2.png" alt=""><div class="message-info"><div class="message-author">Ned Flanders</div><small>3 hours ago</small></div></div>
        <div class="info-item message-item"><img class="circle" src="assets/images/profile-image.png" alt=""><div class="message-info"><div class="message-author">Peter Griffin</div><small>4 hours ago</small></div></div>
        <div class="info-item message-item"><img class="circle" src="assets/images/profile-image-1.png" alt=""><div class="message-info"><div class="message-author">Lisa Simpson</div><small>2 days ago</small></div></div>
    </div>
    <span class="inner-sidebar-title">Events</span>
    <span class="info-item">Envato meeting<span class="new badge">12</span></span>
    <div class="inner-sidebar-divider"></div>
    <span class="info-item">Google I/O</span>
    <div class="inner-sidebar-divider"></div>
    <span class="info-item disabled">No more events scheduled</span>
    <div class="inner-sidebar-divider"></div>

    <span class="inner-sidebar-title">Stats <i class="material-icons">trending_up</i></span>
    <div class="sidebar-radar-chart"><canvas id="radar-chart" width="170" height="140"></canvas></div>
</div>
