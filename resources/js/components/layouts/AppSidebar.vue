<template>
    <aside class="main-sidebar" id="sidebar-wrapper">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"></li>
                <!-- Optionally, you can add icons to the links -->
                <li><router-link to="/users"><i class="fa fa-user-circle angle-left"></i> <span>Users</span></router-link></li>
                <li><router-link to="/categories"><i class="fa fa-shopping-basket angle-left"></i> <span>Orders</span></router-link></li>

<!--                   <li class="treeview">-->
<!--                  <a href="#"><i class="fa fa-shopping-basket angle-left"></i> <span>Requisitions</span>-->
<!--                        <span class="pull-right-container">-->
<!--                <i class="fa fa-angle-left pull-right"></i>-->
<!--              </span>-->
<!--                    </a>-->
<!--                    <ul class="treeview-menu">-->
<!--                        <li><router-link to="/requisitions" class="fa fa-circle-o"> All</router-link></li>-->
<!--                        <li><router-link to="/reversed-requisitions" class="fa fa-circle-o"> Reversed</router-link></li>-->

<!--                        </ul>-->
<!--                </li>-->

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
</template>
<script>
    export default {
      methods:{
          username(){
              return User.name();
          }
      }
    }
</script>

<style scoped>

</style>
