<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbored</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

  <div class="container">
    <aside>
      <!--the aside dashbored -->
      <div class="top">
        <div class="logo">
          <img src="" alt="Amazona logo" />
          <h2>AMA<span class="danger">ZONA</span></h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-symbols-outlined">close </span>
        </div>
      </div>
      <div class="sidebar">
        <a href="#">
          <span class="material-symbols-outlined">dashboard</span>
          <h3>Dashbored</h3>
        </a>
        <br />
        <a href="#" class="active">
          <span class="material-symbols-outlined"> person_outline </span>
          <h3>Customers</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined"> receipt_long </span>
          <h3>orders</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined"> inventory </span>
          <h3>products</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined"> add </span>
          <h3>Add products</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined"> mail_outline </span>
          <span class="message-count">26</span>
          <h3>Message</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined">dashboard</span>
          <h3>Reports</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined"> settings </span>
          <h3>Settings</h3>
        </a>
        <br />
        <a href="#">
          <span class="material-symbols-outlined"> logout </span>
          <h3>Logout</h3>
        </a>
      </div>
    </aside>
    <main>
      <h1>Dashbored</h1>
      <div class="date">
        <input type="date" />
      </div>
      <div class="insights">
        <div class="sales">
          <span class="material-symbols-outlined">analytics</span>
          <div class="middle">
            <div class="left">
              <h3>Total Sales</h3>
              <h1>$25,024</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>81%</p>
              </div>
            </div>
          </div>
          <small class="text-mutes">Last 24 Hours</small>
        </div>
        <!-- End of Sales -->
        <div class="expenses">
          <span class="material-symbols-outlined">bar_chart</span>
          <div class="middle">
            <div class="left">
              <h3>Total Expenses</h3>
              <h1>$14,160</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>62%</p>
              </div>
            </div>
          </div>
          <small class="text-mutes">Last 24 Hours</small>
        </div>
        <!-- End of Expenses -->
        <div class="income">
          <span class="material-symbols-outlined">stacked_line_chart</span>
          <div class="middle">
            <div class="left">
              <h3>Total Expenses</h3>
              <h1>$10,864</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="38" cy="38" r="36"></circle>
              </svg>
              <div class="number">
                <p>44%</p>
              </div>
            </div>
          </div>
          <small class="text-mutes">Last 24 Hours</small>
        </div>
        <!-- End of Income -->
      </div>
      <!-- End of insights -->
      <div class="recent-order">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <th>Product Name</th>
            <th>Product Number</th>
            <th>Payment</th>
            <th>Status</th>
          </thead>
          <tbody>

            <tr>
              <td>foldable mini drone</td>
              <td>8542632</td>
              <td>due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>foldable mini drone</td>
              <td>8542632</td>
              <td>due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>foldable mini drone</td>
              <td>8542632</td>
              <td>due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>foldable mini drone</td>
              <td>8542632</td>
              <td>due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
            <tr>
              <td>foldable mini drone</td>
              <td>8542632</td>
              <td>due</td>
              <td class="warning">Pending</td>
              <td class="primary">Details</td>
            </tr>
          </tbody>
        </table>
        <a href="#">Show All</a>
      </div>
    </main>
    <!-- end of main-->
    <div class="right">
      <div class="top">
        <button id="menu-btn">
          <span class="material-symbols-outlined">menu</span>
        </button>
        <div class="theme-toggler">
          <span class="material-symbols-outlined active"> light_mode </span>
          <span class="material-symbols-outlined"> dark_mode </span>
        </div>
        <div class="profile">
          <div class="info">
            <p>hey, <b>Abdallah</b></p>
            <small class="text-muted">Admin</small>
          </div>
          <div class="profile-photo">
            <img src="" alt="lo" />
          </div>
        </div>
      </div>
      <!--end the top-->
      <div class="recent-updates">
        <h2>Recent Udates</h2>
        <div class="updates">
          <div class="update">
            <div class="profile-photo">
              <img src="" alt="" />
            </div>
            <div class="message">
              <p>
                <b>mike tyson</b> received his order of nigth lion tech gps
                drone.
              </p>
              <small class="text-muted">2 Minutes Ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="" alt="" />
            </div>
            <div class="message">
              <p>
                <b>mike tyson</b> received his order of nigth lion tech gps
                drone.
              </p>
              <small class="text-muted">2 Minutes Ago</small>
            </div>
          </div>
          <div class="update">
            <div class="profile-photo">
              <img src="" alt="" />
            </div>
            <div class="message">
              <p>
                <b>mike tyson</b> received his order of nigth lion tech gps
                drone.
              </p>
              <small class="text-muted">2 Minutes Ago</small>
            </div>
          </div>
        </div>
      </div>
      <!-- end of recent update-->
      <div class="sales-anaytics">
        <h2>Sales Analytics</h2>
        <div class="item online">
          <div class="icon">
            <span class="material-symbols-outlined"> shopping_cart </span>
          </div>
          <div class="right">
            <div class="info">
              <h3>ONLINE ORDERS</h3>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <h5 class="success">+39%</h5>
            <h3>3849</h3>
          </div>
        </div>


        <div class="item offline">
          <div class="icon">
            <span class="material-symbols-outlined"> local_mall </span>
          </div>
          <div class="right">
            <div class="info">
              <h3>OFFLINE ORDERS</h3>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <h5 class="success">+11%</h5>
            <h3>4568</h3>
          </div>
        </div>



        <div class="item customers">
          <div class="icon">
            <span class="material-symbols-outlined"> person </span>
          </div>
          <div class="right">
            <div class="info">
              <h3>NEW CUSTOMERS</h3>
              <small class="text-muted">Last 24 Hours</small>
            </div>
            <h5 class="danger">-5%</h5>
            <h3>679</h3>
          </div>
        </div>

        <div class="item add-product">
          <div>
            <span class="material-symbols-outlined"> add </span>
            <h3>Add Product</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>