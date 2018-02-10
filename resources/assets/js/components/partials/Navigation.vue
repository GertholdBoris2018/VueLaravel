<template>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-transparent mb-4" style="position: fixed;">
		<div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-2 hidden-xs hidden-sm">
                    <a href="#" title="HEAD"><img src='../../../images/logo.png' alt="NEOBET ICO Logo" class="logo" style="transform: translateY(-10px) scale(1);"/></a>
                </div>
                <div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">
                    <ul class="menu-horizontal text-left">
                        <li><a href="#" title="Home">Home</a></li> 
                        <li><a href="#" title="About">About</a></li>
                        <li><a href="#" title="Roadmap">Roadmap</a></li>
                        <li><a href="#" title="Research">Research</a></li>
                        <li><a href="#" title="Team">Team</a></li> 
                        <li><a href="#" title="Whitepaper">Whitepaper</a></li> 
                        <li><a href="#" title="Contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</nav>

</template>

<script>
    export default {
        data() {
            return { isActive: false }
        }
    };


</script>

<style>
    .navbar-fixed {
        position: fixed;
        top: -3em;
    }

    /*----------------------
    $NAVBAR
        basic navbar styling
    ----------------------*/
    nav {
        width: 100%;
        color: #bbb;
        font-weight: bold;
        letter-spacing: 0.025em;
        background-color: rgba(37, 37, 37, 0);
        padding-top: 1.85714em;
    }

    nav ul {
        text-align: center;
        margin: 0;
    }

    nav ul li {
        display: inline-block;
        padding: 0 1em;
    }

    nav ul li:hover {
        background: #53b31b;
    }

    /*----------------------
    $BODY
    ----------------------*/
    body {
        background: #ffffff;
        font-family: 'Open Sans',Helvetica,Arial,sans-serif;
    }

    .logo {
        display: inline-block;
        max-height: 3em;
        max-width: none;
    }

    .menu-horizontal {
        display: block;
        position: relative;
        top: 0;
    }

    .text-left {
        text-align: left;
    }

    .menu-horizontal>li>a {
        font-size: 13px !important;
        font-weight: 400;
        text-transform: uppercase;
        color: #ffffff;
    }

</style>
