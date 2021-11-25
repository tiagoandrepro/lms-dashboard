<template>
    <div class="wrapper">
        <app-header />

        <!-- Sidebar -->
        <app-sidebar>
            <template v-slot:links>
                <sidebar-item :link="{name: 'Período', icon: 'fas fa-pen', path: 'test'}"/>
                <sidebar-dropdown
                    :link="{name: 'Boletos', icon: 'fas fa-pen', path: 'test', children:[{name: 'Link 1', path: 'link1'},{name: 'LInk 2', path: 'link2'}]}"/>
            </template>
        </app-sidebar>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Dashboard</h4>
                        <app-breadcrumbs/>
                    </div>
                    <slot/>
                </div>
            </div>
            <!-- <app-footer /> -->
        </div>
    </div>
</template>
<script>
import AppSidebar from "./components/Sidebar";
import AppFooter from "./components/Footer";
import AppBreadcrumbs from "./components/Breadcrumbs"
import SidebarItem from "./components/SidebarItem";
import AppHeader from "./components/Header";
import SidebarDropdown from "./components/SidebarDropdown";
export default {
    name: 'dashboard.app',
    components: {
        SidebarDropdown,
        SidebarItem,
        AppSidebar,
        AppFooter,
        AppBreadcrumbs,
        AppHeader
    }
}
</script>
