<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="{{ asset('assets/backend/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
		     style="opacity: .8">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">Alexander Pierce</a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item has-treeview">
					<a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
						<i class="nav-icon fa fa-dashboard"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="">
						<i class="nav-icon fa fa-dashboard"></i>
						<p>
							Point of Sales (POS)
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Employee
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Employee</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Employee</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Attendance (EMP)
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Take Attendance</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Attendance</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Customer
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Customer</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Customer</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Supplier
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Supplier</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Supplier</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Advanced Salary (EMP)
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Advanced Salary</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link {">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Advanced Salary</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Salary (EMP)
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Pay Salary</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Paid Salary</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Category
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Category</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Category</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Product
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Product</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Products</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Expense
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Add Expense</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Today Expense</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Monthly Expense</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Yearly Expense</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>All Expense</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Order
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Pending Orders</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Approved Orders</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item has-treeview ">
					<a href="#" class="nav-link ">
						<i class="nav-icon fa fa-pie-chart"></i>
						<p>
							Sales Report
							<i class="right fa fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Today's Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Monthly Report</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="" class="nav-link ">
								<i class="fa fa-circle-o nav-icon"></i>
								<p>Total Sales</p>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-header">MENU</li>
				<li class="nav-item has-treeview">
					<a href="" class="nav-link ">
						<i class="nav-icon fa fa-server"></i>
						<p>
							Setting
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
					   document.getElementById('logout-form').submit();">
						<i class="nav-icon fa fa-sign-out"></i> Logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</li>

			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>