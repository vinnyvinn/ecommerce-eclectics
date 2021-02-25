<template>
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
            <b>Logistics</b>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li>
                        <!-- Menu Toggle Button -->
                        <a href="#" @click="logout">
                            <!-- The user image in the navbar-->
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{username()}}</span>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        methods:{
            logout(){
                User.logout();
            },
            username(){
                return User.name();
            }
        }
    }
</script>

<style scoped>

</style>
