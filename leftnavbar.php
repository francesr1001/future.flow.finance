
<?php
    $currentPage = basename($_SERVER["REQUEST_URI"], ".php");
?>
<nav class="navbar">
    <ul class="navbar-nav">
        <li class="">
        <img src="flow-logo.png" class="logo">
        </li>

        <li class="nav-item">
        <a href="home.php" class="nav-link">
            <span class="material-symbols-outlined <?php if ($currentPage=="home"){echo "ic-highlight";}; ?>">home</span>
        </a>
        </li>

        <li class="nav-item">
        <a href="statistics.php" class="nav-link">
            <span class="material-icons <?php if ($currentPage=="statistics"){echo "ic-highlight";}; ?>">insert_chart_outlined</span>
        </a>
        </li>

        <li class="nav-item">
        <a href="transactions.php" class="nav-link">
            <span class="material-symbols-outlined <?php if ($currentPage=="transactions"){echo "ic-highlight";}; ?>">credit_card</span>
        </a>
        </li>

        <li class="nav-item">
        <a href="accounts.php" class="nav-link">
            <span class="material-icons <?php if ($currentPage=="accounts"){echo "ic-highlight";}; ?>">account_circle</span>
        </a>
        </li>

        <!-- FRANCES EDITED  -->        

            <li>
            <!-- HTML code for the image and target element -->
            <img id="image" src="https://cdn1.iconfinder.com/data/icons/web-interface-65/32/34_-_Light_Dark_Mode-1024.png" 
            alt="LightIcon" style="width:30px;height:30px;"/>

            <!--FRANCES EDITED--> 
            <!-- activator  --> 
            <?php include 'backgroundActivator.php';?>
             <!--FRANCES EDITED--> 
            <!-- activator  --> 

            <!--FRANCES EDITED--> 
            <!-- NavBar Background Color Changer  --> 
            <?php include 'backgroundNavBar.php';?>
             <!--FRANCES EDITED--> 
            <!-- NavBar Background Color Changer  --> 
            </li>



        <!-- FRANCES EDITED  -->  


    </ul>
</nav>



