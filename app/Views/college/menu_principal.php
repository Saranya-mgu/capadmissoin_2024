<?= $this->section('span1') ?>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,700,300);

    ul {
        padding: 0;
        margin: 0;
    }

    li {
        list-style-type: none;
    }

    input[type='radio'] {
        display: none;
    }

    label {
        cursor: pointer;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    body .swanky {
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    body .swanky {
        perspective: 600px;
        margin: auto;
        height: 360px;
    }

    body .swanky_title {
        float: right;
        text-align: left;
        width: 400px;
        color: white;
        position: relative;
        top: 70px;
    }

    body .swanky_title__social a {
        position: relative;
        overflow: hidden;
        width: 140px;
        margin-right: 15px;
        text-decoration: none;
        padding: 0px 0px 5px 0px;
        height: 40px;
        border: 2px solid white;
        float: left;
        color: white;
        font-size: 12px;
        font-weight: 400;
        margin-top: 20px;
    }

    body .swanky_title__social a .slide {
        height: 45px;
        width: 100px;
        float: left;
        position: absolute;
        transform: skew(20deg);
        left: -120px;
        transition-property: left;
        transition-duration: 0.2s;
        background: white;
    }

    body .swanky_title__social a .slide .arrow {
        position: absolute;
        right: 31px;
        top: 24px;
        opacity: 0;
        transform: skew(-20deg);
    }

    body .swanky_title__social a .slide .arrow .stem {
        width: 10px;
        height: 2px;
        background: #858490;
    }

    body .swanky_title__social a .slide .arrow .point {
        width: 6px;
        height: 6px;
        border-right: 2px solid #858490;
        top: -3px;
        right: 1px;
        position: absolute;
        transform: rotate(45deg);
        border-top: 2px solid #858490;
    }

    body .swanky_title__social a img {
        width: 16px;
        margin-left: 10px;
        position: relative;
        margin-right: 8px;
        transition-property: margin-left;
        transition-duration: 0.1s;
        margin-top: 10px;
        top: 4px;
    }

    body .swanky_title__social a:hover>.slide {
        left: -70px;
        transition-property: left;
        transition-duration: 0.1s;
    }

    body .swanky_title__social a:hover>img {
        margin-left: 40px;
        transition-property: margin-left;
        transition-duration: 0.1s;
    }

    body .swanky_title__social a:hover>.slide .arrow {
        right: 11px;
        opacity: 1;
        transition-property: right, opacity;
        transition-delay: 0.07s;
        transition-duration: 0.2s;
    }

    body .swanky .intro {
        float: right;
        color: white;
        width: 370px;
        top: 50px;
        position: relative;
    }

    body .swanky .intro h1 {
        text-shadow: 0px 2px rgba(0, 0, 0, 0.26);
    }

    body .swanky .intro p {
        line-height: 20px;
        text-shadow: 0px 1px rgba(0, 0, 0, 0.26);
    }

    body .swanky_wrapper {
        width: 325px;
        height: auto;
        overflow: hidden;
        border-radius: 4px;
        background: #2a394f;
    }

    body .swanky_wrapper label {
        padding: 25px;
        float: left;
        height: 72px;
        border-bottom: 1px solid #293649;
        position: relative;
        width: 100%;
        color: #eff4fa;
        transition: text-indent 0.15s, height 0.3s;
        box-sizing: border-box;
    }

    body .swanky_wrapper label img {
        margin-right: 10px;
        position: relative;
        top: 2px;
        width: 16px;
    }

    body .swanky_wrapper label span {
        position: relative;
        top: -3px;
    }

    body .swanky_wrapper label:hover {
        background: #212e41;
        border-bottom: 1px solid #2a394f;
        text-indent: 4px;
    }

    body .swanky_wrapper label:hover .bar {
        width: 100%;
    }

    body .swanky_wrapper label .bar {
        width: 0px;
        transition: width 0.15s;
        height: 2px;
        position: absolute;
        display: block;
        background: #355789;
        bottom: 0;
        left: 0;
    }

    body .swanky_wrapper label .lil_arrow {
        width: 5px;
        height: 5px;
        -webkit-transition: transform 0.8s;
        transition: transform 0.8s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        border-top: 2px solid white;
        border-right: 2px solid white;
        float: right;
        position: relative;
        top: 6px;
        right: 2px;
        transform: rotate(45deg);
    }

    body .swanky_wrapper__content {
        position: absolute;
        display: none;
        overflow: hidden;
        left: 0;
        width: 100%;
    }

    body .swanky_wrapper__content li {
        width: 100%;
        opacity: 0;
        left: -100%;
        background: #15a4fa;
        padding: 25px 0px;
        text-indent: 25px;
        box-shadow: 0px 0px #126ca1 inset;
        transition: box-shadow 0.3s, text-indent 0.3s;
        position: relative;
    }

    body .swanky_wrapper__content li:hover {
        background: #0c93e4;
        box-shadow: 3px 0px #126ca1 inset;
        transition: box-shadow 0.3s linear, text-indent 0.3s linear;
        text-indent: 31px;
    }

    body .swanky_wrapper__content .clear {
        clear: both;
    }

    input[type='radio']:checked+label .swanky_wrapper__content {
        display: block;
        top: 68px;
        border-bottom: 1px solid #212e41;
    }

    input[type="radio"]:checked+label>.lil_arrow {
        -webkit-transition: -webkit-transform 0.8s;
        transition: transform 0.8s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -webkit-transform: rotate(135deg);
        -ms-transform: rotate(135deg);
        transform: rotate(135deg);
        border-top: 2px solid #14a3f9;
        border-right: 2px solid #14a3f9;
    }

    input[type='radio']:checked+label {
        height: 325px;
        background: #212e41;
        text-indent: 4px;
        transition-property: height;
        transition-duration: 0.6s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type='radio']:checked+label .bar {
        width: 0;
    }

    input[type='radio']:checked+label li:nth-of-type(1) {
        animation: in 0.15s 0.575s forwards;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -moz-animation: in 0.15s 0.575s forwards;
        -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type='radio']:checked+label li:nth-of-type(2) {
        animation: in 0.15s 0.7s forwards;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -moz-animation: in 0.15s 0.7s forwards;
        -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type='radio']:checked+label li:nth-of-type(3) {
        animation: in 0.15s 0.825s forwards;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -moz-animation: in 0.15s 0.825s forwards;
        -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    input[type='radio']:checked+label li:nth-of-type(4) {
        animation: in 0.15s 0.95s forwards;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        -moz-animation: in 0.15s 0.95s forwards;
        -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    @keyframes in {
        from {
            left: -100%;
            opacity: 0;
        }

        to {
            left: 0;
            opacity: 1;
        }
    }

    .love {
        position: absolute;
        right: 20px;
        bottom: 0px;
        font-size: 11px;
        font-weight: normal;
    }

    .love p {
        color: white;
        font-weight: normal;
        font-family: 'Open Sans', sans-serif;
    }

    .love a {
        color: white;
        font-weight: 700;
        text-decoration: none;
    }

    .love img {
        position: relative;
        top: 3px;
        margin: 0px 4px;
        width: 10px;
    }

    .brand {
        position: absolute;
        left: 20px;
        bottom: 14px;
    }

    .brand img {
        width: 30px;
    }
</style>

<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<div style="height:5%" class="orange_box" align="left">
    <strong><span style="color:#000;">Logged in As : <?= session()->get('college_name') ?></span></strong>
</div>

<div style="height:60%;">

    <div class="swanky">
        <div class="swanky_wrapper">
            <label for=''>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'></img>
                 <?= anchor('Collegeprince/profile', 'Profile', ['style' => 'color: white;']); ?>
            </label>
            <label for=''>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'></img>
                <span>Help Desk Details</span>
            </label>

            <input id="Dashboard" type="radio" name="radio"></input>
            <label for='Dashboard'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dash.png'></img>
                <span>Dashboard</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
                <div class="swanky_wrapper__content">
                    <ul>
                        <li>Tools</li>
                        <li>Reports</li>
                        <li>Analytics</li>
                        <li>Code Blocks</li>
                    </ul>
                </div>
            </label>
            <input id="Sales" type="radio" name="radio"></input>
            <label for='Sales'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/del.png'></img>
                <span>Sales</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
                <div class="swanky_wrapper__content">
                    <ul>
                        <li>New Sales</li>
                        <li>Expired Sales</li>
                        <li>Sales Reports</li>
                        <li>Deliveries</li>
                    </ul>
                </div>
            </label>
            <input id="Messages" type="radio" name="radio"></input>
            <label for='Messages'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mess.png'></img>
                <span>Messages</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
                <div class="swanky_wrapper__content">
                    <ul>
                        <li>Inbox</li>
                        <li>Outbox</li>
                        <li>Sent</li>
                        <li>Archived</li>
                    </ul>
                </div>
            </label>
            <input id="Users" type="radio" name="radio"></input>
            <label for='Users'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'></img>
                <span>Users</span>
                <div class="lil_arrow"></div>
                <div class="bar"></div>
                <div class="swanky_wrapper__content">
                    <ul>
                        <li>New User</li>
                        <li>User Groups</li>
                        <li>Permissions</li>
                        <li>Passwords</li>
                    </ul>
                </div>
            </label>
            <input id="Settings" type="radio" radio="radio"></input>
            <label for='Settings'>
                <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'></img>
                <span>Settings</span>
                <div class="lil_arrow"></div>
                <div class="swanky_wrapper__content">
                    <ul>
                        <li>Databases</li>
                        <li>Design</li>
                        <li>Change User</li>
                        <li>Log Out</li>
                    </ul>
                </div>
            </label>
        </div>
    </div>



</div>

<div align="center">
    <?php if (session()->get('ug') == 1) { ?>
        <a href="<?php echo base_url(); ?>Collegeprince/"><img src="<?php echo base_url(); ?>images/button_ug.png" border="0" /></a>
    <?php
    }
    if (session()->get('pg') == 1) {
    ?>
        <a href="<?php echo base_url(); ?>Collegeprincepg/"><img src="<?php echo base_url(); ?>images/button_pg_inactive.png" border="0" /></a>
    <?php }
    if (session()->get('ip') == 1) {
    ?>
        <a href="<?php echo base_url(); ?>Collegeprince_integrated/"><img src="<?php echo base_url(); ?>images/button_ip.png" border="0" width="90px" /></a>
    <?php } ?>
</div>

<div style="color:#F00; padding-top:20px; padding-left:27px;">
    <a href='<?php echo base_url(); ?>Collegeprince/contact'><img src="<?php echo base_url(); ?>/images/cus1.jpg" width="160px;" height="60px;" /></a>

</div>

<?= $this->endSection() ?>