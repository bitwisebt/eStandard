<style>
    .badge {
        background-color: red;
        color: white;
        padding: 4px 8px;
        text-align: center;
        border-radius: 5px;
    }


    @media (min-width: 992px) {
        .dropdown-menu .dropdown-toggle:after {
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
        }

        .dropdown-menu .dropdown-menu {
            margin-left: 0;
            margin-right: 0;
        }

        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }
</style>
</style>
<nav class="navbar navbar-expand-lg navbar-dark py-0" style="background-color: #07553b;">
    &emsp;&emsp;&emsp;&emsp;&emsp;
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::user()->role_id==1)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Masters</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/user-mgmt">User Management</a></li>
                    <li><a class="dropdown-item" href="/technical-committee">Technical Committee</a></li>
                    <li><a class="dropdown-item" href="/sub-committee">Sub Committee</a></li>
                    <li>
                    <div class="dropdown-divider"></div>
                    </li>
                    <li><a class="dropdown-item" href="/backup">Back-Up Management</a></li>

                </ul>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Reports</a>
                <ul class="dropdown-menu">
                    @if(Auth::user()->role_id==1 || Auth::user()->role_id==2)
                    <li><a class="dropdown-item" href="#">Financial</a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/voucher-day" target="_blank">Day Transaction</a></li>
                            <li><a class="dropdown-item" href="/voucher-select">Voucher by Date</a></li>
                            <li><a class="dropdown-item" href="/ledger-view" target="_blank">Ledger</a></li>
                            <li><a class="dropdown-item" href="/ledger-select">By Ledger</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="/trial-balance" target="_blank">Trial Balance</a></li>
                            <li> <a class="dropdown-item" href="/balance-sheet">Balance Sheet</a></li>
                            <li><a class="dropdown-item" href="/profit-loss-account">Profit & Loss Account</a></li>
                            <li><a class="dropdown-item" href="/rpt-cashflow-select">Cash Flow Statement</a></li>
                            <li><a class="dropdown-item" href="/rpt-brs-select">Bank Statement</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="/rpt-purchase-select">Purchase</a></li>
                            <li><a class="dropdown-item" href="/rpt-sale-select">Sales</a></li>
                            <li><a class="dropdown-item" href="/rpt-item-balance" target="_blank">Item Balance</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#"> Accounting </a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/rpt-musterroll" target="_blank">Muster Roll</a></li>
                            <li><a class="dropdown-item" href="/rpt-musterroll-dashboard">Muster Roll Details</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="/rpt-payroll" target="_blank">Payroll</a></li>
                            <li><a class="dropdown-item" href="/rpt-payroll-dashboard">Payroll Details</a></li>
                            <li><a class="dropdown-item" href="/rpt-payslip-show">Pay Slip</a></li>
                            <li><a class="dropdown-item" href="/rpt-tds-certificate-show">TDS Certificate</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#"> HR/Admin</a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/rpt-employee" target="_blank">Employee</a></li>
                            <li><a class="dropdown-item" href="/rpt-employee-entitlement" target="_blank">Entitlements</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="#"> Machinery</a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/rpt-machinery" target="_blank">Details</a></li>
                            <li><a class="dropdown-item" href="/rpt-maintenance" target="_blank">Maintenace Summary</a></li>
                            <li><a class="dropdown-item" href="/rpt-maintenance-view">Maintenace Details</a></li>
                            <li><a class="dropdown-item" href="/rpt-maintenance-history">Maintenace History</a></li>
                        </ul>
                    </li>
                    @endif
                    <li><a class="dropdown-item" href="#"> Stock Inventory</a>
                        <ul class="submenu dropdown-menu">
                            <li><a class="dropdown-item" href="/rpt-site-requisition" target="_blank">Requisition</a></li>
                            <li><a class="dropdown-item" href="/rpt-site-receipt" target="_blank">Receipt Register</a></li>
                            <li><a class="dropdown-item" href="/rpt-site-issue" target="_blank">Issued Register</a></li>
                            <li><a class="dropdown-item" href="/rpt-site-stock" target="_blank">Stock Balance</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).on('click', '.dropdown-menu', function(e) {
        e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function(e) {
            e.preventDefault();
            if ($(this).next('.submenu').length) {
                $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function() {
                $(this).find('.submenu').hide();
            })
        });
    }
</script>