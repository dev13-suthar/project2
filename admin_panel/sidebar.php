<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="./adminView/viewCustomers.php"  onclick="showCustomers()" ><i class="fa fa-users"></i> Customers</a>
    <a href="./adminView/viewCategories.php"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Category</a>
    <!-- <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> Sizes</a> -->
    <!-- <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i> Product Sizes</a>     -->
    <a href="./adminView/viewAllProducts.php"   onclick="showProductItems()" ><i class="fa fa-th"></i> Orders</a>
    <a href="./adminView/viewadminCustomer.php" onclick="showOrders()"><i class="fa fa-list"></i> Admin User</a>
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>

