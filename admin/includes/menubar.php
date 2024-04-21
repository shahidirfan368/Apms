<aside class="main-sidebar" style="background-color:rgb(255,99 ,71)">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="background-color:rgb(255,154 ,138)">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" style="background-color: rgb(255,154 ,138)">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
		  
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" style="background-color: black">
        <li class="header" style="background-color:rgb(255,99 ,71)" ><b>REPORTS</b></li>
        <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="header"style="background-color:rgb(255,99 ,71)"><b>MANAGE</b></li>
        
        <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Employees </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		    <li><a href="addemployee.php"><i class="fa fa-circle-o"></i>Add Employee</a></li>
            <li><a href="manageemployee.php"><i class="fa fa-circle-o"></i>Manage Employee</a></li>
            <li><a href="employee.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
            <li><a href="overtime.php"><i class="fa fa-circle-o"></i> Overtime</a></li>
            <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Cash Advance</a></li>
            <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Schedules</a></li>
          </ul>
        </li>
				 <li class="treeview">
          <a href="#">
            <i class="fa fa-leaf"></i>
            <span>Leaves</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
                        
                            <ul class="treeview-menu">
                                <li><a href="apply-leave.php"><i class="fa fa-circle-o"></i>Apply Leaves </a></li>
                                                               <li><a href="leavehistory.php"><i class="fa fa-circle-o"></i>Leaves History </a></li>
                                                             
       
                            </ul>
                    </li>
	<li class="treeview">
          <a href="#">
            <i class="fa fa-leaf"></i>
            <span>Leave Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
                        
                            <ul class="treeview-menu">
                                <li><a href="leaves.php"><i class="fa fa-circle-o"></i>All Leaves </a></li>
                                                               <li><a href="addleavetype.php"><i class="fa fa-circle-o"></i>Add leavetype </a></li>
															   <li><a href="manageleavetype.php"><i class="fa fa-circle-o"></i>Manage leavetype </a></li>
															   <li><a href="approvedleave-history.php"><i class="fa fa-circle-o"></i>Approved leaves</a></li>
															   <li><a href="notapproved-leaves.php"><i class="fa fa-circle-o"></i>NotApproved leaves</a></li>
															   <li><a href="pending-leavehistory.php"><i class="fa fa-circle-o"></i>Pending leaves</a></li>


       
                            </ul>
                    </li>
   
        <li><a href="deduction.php"><i class="fa fa-file-text"></i> Deductions</a></li>
        <li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li><br>
        <li class="header"style="background-color:rgb(255,99,71)"><b>PRINTABLES</b></li>
        <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li>
        <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Schedule</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>